<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function index()
    {
        $datapemesanan = $this->pemesananModel->getAllPemesanan();
        $data = [
            'datapemesanan' => $datapemesanan,
        ];
        return view('admin/orderlistpage', $data);
    }

    public function editOrderPage($id_pemesanan)
    {
        $datapemesanan = $this->pemesananModel->getPemesanan($id_pemesanan);
        $data = [
            'action' => '/updateorder',
            'datapemesanan' => $datapemesanan,
            'datatarif' => $this->tarifModel->findAll(),
            'datapenerima' => $this->penerimaModel->getPenerima($id_pemesanan),
            'datapengirim' => $this->pengirimModel->getPengirim($datapemesanan['id_pengirim']),
        ];

        return view('admin/orderaddpage', $data);
    }

    public function updateOrder()
    {

        $deleted_penerima = json_decode($this->request->getVar('deleted_penerima'));
        $id_pemesanan = $this->request->getVar('id_pemesanan');
        $id_pengirim = $this->request->getVar('id_pengirim');
        $jumlahpenerima = (int) $this->request->getVar('jumlahpenerima');
        $jumlahdiskon = (int)$this->request->getVar('Sub_Total') - ((int)$this->request->getVar('Total')-(int)$this->request->getVar('harga_produk'));
        $datapenerima = [];

        $id_diskon = null;
        if ($this->request->getVar('id_diskon')!=""){
            $id_diskon = $this->request->getVar('id_diskon');
        }
        $datapemesanan =[
            'id_pemesanan' => $id_pemesanan,
            'id_tarif' => $this->request->getVar('Tarif'),
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
            'jumlahpenerima' => $jumlahpenerima
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
        if (!empty($deleted_penerima)){
            foreach ($deleted_penerima as $deleted_id){
                $this->penerimaModel->delete($deleted_id);
            }
        }
        for ($i = 1; $i<=$jumlahpenerima; $i++){
            $id_penerima= $this->request->getVar("id_penerima$i");
            if ($id_penerima!=""){

            } else {
                $id_penerima = $this->penerimaModel->generateKode();
            }
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
        }
        if ($this->pemesananModel->save($datapemesanan)) {
            $this->pengirimModel->save($datapengirim);
            foreach ($datapenerima as $item) {
                $insertpenerima = $this->penerimaModel->save($item);
            }
            $noadmin = $this->adminModel->getAdminNumber();
            $this->whatsappHelper->sendWhatsapp($this->whatsappHelper->generateMessageForm($datapemesanan,$datapengirim, $datapenerima, $jumlahpenerima, $this->request->getVar('diskon')),
                $noadmin['No_admin']);
            session()->setFlashdata('success', 'Pemesanan Berhasil Diperbarui');
            return redirect()->to('/orderlist');
        } else {
            session()->setFlashdata('error', 'Gagal Update Pemesanan');
            return redirect()->to("/orderedit/$id_pemesanan");
        }
    }

    public function deleteOrder($id_pemesanan)
    {
        if ($this->pemesananModel->delete($id_pemesanan)) {
            session()->setFlashdata('success', 'Data Pelanggan Berhasil Diperbarui ');
            return redirect()->to('/orderlist');
        } else {
            session()->setFlashdata('error', 'Data Pelanggan Berhasil Dihapus ');
            return redirect()->to("/orderedit/$id_pemesanan");
        }
    }
}
