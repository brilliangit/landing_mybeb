<?php

/**
 * Description of MY_Controller
 *
 * @author Brillian Andrie Nugroho Wiguno <brillianandrie@gmail.com>
 */
class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function render($view, $data) {
        $this->load->view('layouts/header',$data);
        $this->load->view($view, $data);
        $this->load->view('layouts/footer',$data);
    }
    
    function get_meta($title) {
        $head = [];
        switch ($title) {
            case 'aplikasi-jualan-pulsa':
                $head['meta_descriptions'] = 'Jika kamu mau membuka bisnis jualan pulsa, berikut adalah 5 aplikasi jualan pulsa terbaik di Android. Yuk pilih segera aplikasi favorit kamu';
                $head['title_page'] = 'MyBeb - Aplikasi jualan pulsa terbaik di android';
                break;
            case 'aplikasi-pembayaran-online':
                $head['meta_descriptions'] = 'Jika kamu ingin bayar tagihan secara online, berikut adalah 5 aplikasi pembayaran online terbaik di Android. Yuk segera download dan bayar tagihanmu';
                $head['title_page'] = 'MyBeb - Aplikasi pembayaran online';
                break;
            case 'ppob':
                $head['meta_descriptions'] = 'Jika kamu mencari aplikasi bisnis PPOB terbaik di Android, baca ulasan ini dan temukan beragam info aplikasi bisnis pembayaran terlengkap.';
                $head['title_page'] = 'MyBeb - Aplikasi Bisnis PPOB Terbaik di Android';
                break;
            case 'pulsa':
                $head['meta_descriptions'] = 'MyBeb adalah aplikasi jualan pulsa termurah dan terbaik di Android. Harganya termurah dan penggunaannya gratis tanpa biaya lisensi.';
                $head['title_page'] = 'MyBeb - Aplikasi Jualan Pulsa Termurah di Android';
                break;
            case 'bpjs-kesehatan':
                $head['meta_descriptions'] = 'Yuk bayar BPJS Kesehatan di MyBeb sekarang, dan dapatkan bonus voucher liburan gratis ke Jogjakarta. Ayo cek dan bayar segera!';
                $head['title_page'] = 'MyBeb - Bayar BPJS Kesehatan di MyBeb Bonus Liburan Gratis';
                break;
            case 'cicilan':
                $head['meta_descriptions'] = 'Yuk bayar cicilan online di MyBeb dan dapatkan voucher McD sebesar 100 RIBU. Bayar angsuran kamu segera ya dan raih vouchernya.';
                $head['title_page'] = 'MyBeb - Bayar Cicilan Online di MyBeb Bonus Voucher McD';
                break;
            case 'ovo':
                $head['meta_descriptions'] = 'Yuk top up saldo OVO kamu di MyBeb sekarang, ada voucher KFC senilai 50.000 gratis. Ayo isi saldo OVO kamu sekarang!.';
                $head['title_page'] = 'MyBeb - Top Up Saldo OVO - Grab - Bonus Voucher McD 100.000';
                break;
            case 'gopay':
                $head['meta_descriptions'] = 'Yuk top up saldo Gopay kamu di MyBeb sekarang, ada voucher KFC senilai 50.000 gratis. Ayo isi saldo Gopay kamu sekarang!.';
                $head['title_page'] = 'MyBeb - Top Up Saldo Gopay - Bonus Voucher KFC 50.000';
                break;
            case 'dana':
                $head['meta_descriptions'] = 'Yuk top up saldo DANA kamu di MyBeb sekarang, ada voucher McD senilai 50.000 gratis. Ayo isi saldo DANA sekarang!';
                $head['title_page'] = 'MyBeb - Top Up Saldo DANA - TIX ID di MyBeb';
                break;
            default:
                $head['meta_descriptions'] = 'Ini meta desc default';
                $head['title_page'] = 'Ini title default';
                break;
        }
        return $head;
    }

}
