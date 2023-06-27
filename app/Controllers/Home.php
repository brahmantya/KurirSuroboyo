<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        if (session()->get('logged_in')) {
            $data = [
                'datapengirim' => $this->userModel->dataUserDetails(session()->get('username'))

            ];
        }
        //        session()->setFlashdata('success', 'Proses Pemesanan Berhasil !');
        echo view('homepage', $data);
    }

    public function test()
    {
        //	    $data = $this->cleanNumberPhone('+6285105991200');
        //	    dd($data);
        $data = $this->formatRupiah(10000);
        dd($data);
    }

    public function sendWhatsapp($message, $destination)
    {
        $apikey = $this->whatsappsender->getApiKey();
        $type = "OUT";
        $apiurl = "http://panel.rapiwha.com/send_message.php";
        $apiurl .= "?apikey=" . urlencode($apikey);
        $apiurl .= "&number=" . urlencode($destination);
        $apiurl .= "&type=" . urlencode($type);
        $apiurl .= "&text=" . urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }


    public function getDistance($origin, $destination)
    {
        $alamatpengirim = $origin . ',Indonesia';
        $alamatpenerima = $destination . ',Indonesia';
        $alamatpengirim = urlencode($alamatpengirim);
        $alamatpenerima = urlencode($alamatpenerima);
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=$alamatpengirim&destinations=$alamatpenerima&key=AIzaSyCtcenQsMCh4peC8zzCGgBzKTO-_VC2x3Y";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
        return true;
    }

    function roundUpToAny($n, $x = 1000)
    {
        if ($n % 1000 == 0) {
            return $n;
        } else {
            return (int)round(($n + $x / 2) / $x) * $x;
        }
    }

    public function hitungSubTotal($tarifcode, $jarak, $berat, $jumlahpenerima)
    {
        $subtotal = 0;
        $arrayjarak = (array)json_decode($jarak, true);
        $berat = ceil($berat);
        $datatarif = $this->tarifModel->getTarif($tarifcode);
        $tarif = $datatarif['tarif'];
        $minim_ongkir = (int)$datatarif['minim_ongkir'];
        $max_berat = (int)$datatarif['max_berat'];
        $extracostpenerima = (float)$datatarif['extracostpenerima'];
        $extracostberat = (float)$datatarif['extracostberat'];
        switch ($tarifcode) {
            case 1:
                $subtotal = $minim_ongkir;
                break;
            default:
                $subtotal = $tarif * $arrayjarak[0];
                if ($subtotal < $minim_ongkir) {
                    $subtotal = $minim_ongkir;
                }
                if ($jumlahpenerima > 1) {
                    $biayaongkirtambahan = 0;
                    for ($i = 1; $i < $jumlahpenerima; $i++) {
                        $biaya = $tarif * $arrayjarak[$i];
                        $biayaongkirtambahan += $this->roundUpToAny($biaya);
                    }
                    $subtotal += $biayaongkirtambahan;
                }
        }
        if ($max_berat != 0 && $berat > $max_berat) {
            $extracost = $extracostberat * ($berat - $max_berat);
            $subtotal += $extracost;
        }
        if ($jumlahpenerima > 1) {
            $extra = $extracostpenerima * ($jumlahpenerima - 1);
            $subtotal += $extra;
        }
        echo json_encode($this->roundUpToAny($subtotal));
        return $this->roundUpToAny($subtotal);
    }

    public function savePemesanan()
    {
        $id_pemesanan = $this->pemesananModel->generateKode();
        $existingpengirim = false;
        $id_pengirim = "";
        if (session()->get('logged_in')) {
            $userDetail = $this->userModel->dataUserDetails(session()->get('username'));
            if ($userDetail['alamat_pengirim'] == $this->request->getVar('Alamat_pengirim')) {
                $id_pengirim = $userDetail['id_pengirim'];
                $existingpengirim = true;
            } else {
                $id_pengirim = $this->pengirimModel->generateKode();
                $existingpengirim = false;
            }
        } else {
            $id_pengirim = $this->pengirimModel->generateKode();
            $existingpengirim = false;
        }
        $id_penerima = $this->penerimaModel->generateKode();
        $jumlahpenerima = (int) $this->request->getVar('jumlahpenerima');
        $datapenerima = [];
        $jumlahdiskon = (int)$this->request->getVar('Sub_Total') - ((int)$this->request->getVar('Total') - (int)$this->request->getVar('harga_produk'));
        $id_diskon = null;
        if ($this->request->getVar('id_diskon') != "") {
            $id_diskon = $this->request->getVar('id_diskon');
        }
        $datapemesanan = [
            'id_pemesanan' => $id_pemesanan,
            'id_tarif' => $this->request->getVar('Tarif'),
            'id_admin' => null,
            'id_pengirim' => $id_pengirim,
            'id_metode' => $this->request->getVar('pembayaran'),
            'id_kurir' => null,
            'id_diskon' => $id_diskon,
            'jenis_barang' => $this->request->getVar('Jenis_barang'),
            'total_harga' => $this->request->getVar('Total'),
            'harga_barang' => $this->request->getVar('harga_produk'),
            'ongkir' => $this->request->getVar('Sub_Total'),
            'diskon' => $jumlahdiskon,
            'tanggal_kirim' => $this->request->getVar('tanggal'),
            'jam' => $this->request->getVar('jam'),
            'berat' => $this->request->getVar('berat_barang'),
            'jarak' => $this->request->getVar('jarak'),
            'jumlahpenerima' => (int)$this->request->getVar('jumlahpenerima')
        ];
        $datapengirim = [
            'id_pengirim' => $id_pengirim,
            'id_pemesanan' => null,
            'id_kota' => $this->request->getVar('kota_pengirim'),
            'nama_pengirim' => $this->request->getVar('Nama_pengirim'),
            'telp_pengirim' => $this->request->getVar('Telp_pengirim'),
            'alamat_pengirim' => $this->request->getVar('Alamat_pengirim'),
            'keterangan_pengirim' => $this->request->getVar('Keterangan_pengirim')
        ];
        for ($i = 1; $i <= $jumlahpenerima; $i++) {
            $penerima = [
                'id_penerima' => $id_penerima,
                'id_kota' => $this->request->getVar("kota_penerima$i"),
                'id_pemesanan' => $id_pemesanan,
                'nama_penerima' => $this->request->getVar("Penerima$i"),
                'alamat_penerima' => $this->request->getVar("alamat_penerima$i"),
                'no_telp' => $this->request->getVar("telp_penerima$i"),
                'keterangan_penerima' => $this->request->getVar("Keterangan_penerima$i")
            ];
            $datapenerima[$i] = $penerima;
            ++$id_penerima;
        }
        $insertpemesanan = false;
        $insertpenerima = true;
        $insertpengirim = false;
        if ($existingpengirim) {
            $insertpengirim = true;
        } else {
            $insertpengirim = $this->pengirimModel->insert($datapengirim);
        }
        if ($insertpengirim) {
            //            dd($datapemesanan);
            $insertpemesanan = $this->pemesananModel->insert($datapemesanan);
            foreach ($datapenerima as $item) {
                $insertpenerima = $this->penerimaModel->insert($item);
            }
        }
        if ($insertpengirim && $insertpenerima && $insertpemesanan) {
            $noadmin = $this->adminModel->getAdminNumber();
            $this->sendWhatsapp(
                $this->generateMessageForm($datapemesanan, $datapengirim, $datapenerima, $jumlahpenerima, $this->request->getVar('diskon')),
                $noadmin['No_admin']
            );
            $this->pemesananModel->save([
                'id_pemesanan' => $id_pemesanan,
                'id_admin' => $noadmin['id_admin'],
            ]);
            session()->setFlashdata('success', 'Proses Pemesanan Berhasil !');
            return redirect()->to('/');
        } else {
            session()->setflashdata('error', 'Proses Pemesanan Gagal Terkirim');
            return redirect()->to('/');
        }
    }

    public function cleanNumberPhone($number)
    {
        return ltrim($number, "0+62");
    }

    public function convertDate($date)
    {
        $date = new \DateTime($date);
        return $date->format('d-m-Y');
    }

    public function formatRupiah($value)
    {
        return "Rp " . number_format((float)$value, 2, ",", ".");
    }

    public function generateMessageForm($datapemesanan, $datapengirim, $datapenerima, $jumlahpenerima, $kodediskon = null)
    {
        $namatarif = $this->tarifModel->getNamaTarif($datapemesanan['id_tarif'])['nama_tarif'];
        $telp_pengirim = $this->cleanNumberPhone($datapengirim['telp_pengirim']);
        //	    $telp_penerima = $this->cleanNumberPhone($datapenerima['no_telp']);
        $namametodepembayaran = $this->metodepembayaran->getNamaPembayaran($datapemesanan['id_metode']);
        $penerima = $this->generateFormPenerima($jumlahpenerima, $datapenerima);
        $tglkirim = $this->convertDate($datapemesanan['tanggal_kirim']);
        $ongkir = $this->formatRupiah($datapemesanan['ongkir']);
        $total = $this->formatRupiah($datapemesanan['total_harga']);
        $hargaproduk = $this->formatRupiah($datapemesanan['harga_barang']);
        $message = "
Nomor Pemesanan : {$datapemesanan['id_pemesanan']}

*FORM PERMINTAAN JASA KURIR*

*Data Pengirim,*
Nama : {$datapengirim['nama_pengirim']}
No Telpon : wa.me/62{$telp_pengirim}
Alamat : {$datapengirim['alamat_pengirim']}
Keterangan : {$datapengirim['keterangan_pengirim']}
Tgl pengambilan : {$tglkirim}
Jam : {$datapemesanan['jam']}
Jenis produk : {$datapemesanan['jenis_barang']}
    Berat : {$datapemesanan['berat']} Kg / L
    Tarif : {$namatarif}";
        for ($i = 0; $i < $jumlahpenerima; $i++) {
            $message = $message . "\n" . $penerima[$i];
        }
        $message = $message . "\n
Jarak : {$datapemesanan['jarak']} KM	    
Kode Diskon : {$kodediskon}
Metode Pembayaran : *{$namametodepembayaran['nama_metode']}*
Harga Produk : {$hargaproduk}
Ongkir : *{$ongkir}*
Total : *{$total}*";
        return $message;
    }

    public function generateFormPenerima($jumlahpenerima, $datapenerima)
    {
        $i = 0;
        $nomor = 1;
        $form = [];
        foreach ($datapenerima as $item) {
            $notelp = $this->cleanNumberPhone($item['no_telp']);
            $message = "
*{$nomor}. Data Penerima,*
Nama : {$item['nama_penerima']}
No Telpon : wa.me/62{$notelp}
Alamat : {$item['alamat_penerima']}
Keterangan : {$item['keterangan_penerima']}";
            $form[$i] = $message;
            ++$i;
            ++$nomor;
        }
        return $form;
    }

    public function getDiskon($kodediskon)
    {
        $data = $this->diskonModel->where('kode_diskon', $kodediskon)->first();
        echo json_encode($data);
    }
}
