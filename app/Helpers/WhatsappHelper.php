<?php

namespace App\Helpers;

class WhatsappHelper extends BaseHelper
{
    public function generateMessageForm($datapemesanan, $datapengirim, $datapenerima, $jumlahpenerima, $kodediskon=null){
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
        for ($i=0; $i<$jumlahpenerima; $i++){
            $message = $message."\n".$penerima[$i];
        }
        $message = $message."\n
Jarak : {$datapemesanan['jarak']} KM	    
Kode Diskon : {$kodediskon}
Metode Pembayaran : *{$namametodepembayaran['nama_metode']}*
Harga Produk : {$hargaproduk}
Ongkir : *{$ongkir}*
Total : *{$total}*";
        return $message;
    }

    public function generateFormPenerima($jumlahpenerima, $datapenerima){
        $i = 0;
        $nomor = 1;
        $form = [];
        foreach ($datapenerima as $item){
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

    public function sendWhatsapp($message, $destination){
        $apikey =$this->whatsappsender->getApiKey();
        $type = "OUT";
        $apiurl = "http://panel.rapiwha.com/send_message.php";
        $apiurl .= "?apikey=".urlencode($apikey);
        $apiurl .= "&number=".urlencode($destination);
        $apiurl .= "&type=". urlencode($type);
        $apiurl .= "&text=". urlencode($message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}