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
            case 'bisnis/ppob':
                $head['meta_descriptions'] = 'Jika kamu mencari aplikasi bisnis PPOB terbaik di Android, baca ulasan ini dan temukan beragam info aplikasi bisnis pembayaran terlengkap.';
                $head['title_page'] = 'MyBeb - Aplikasi Bisnis PPOB Terbaik di Android';
                break;
            case 'bisnis/pulsa':
                $head['meta_descriptions'] = 'MyBeb adalah aplikasi jualan pulsa termurah dan terbaik di Android. Harganya termurah dan penggunaannya gratis tanpa biaya lisensi.';
                $head['title_page'] = 'MyBeb - Aplikasi Jualan Pulsa Termurah di Android';
                break;
            case 'bisnis/sampingan':
                $head['meta_descriptions'] = 'Ada banyak pilihan bisnis sampingan anak sekolah yang bisa kamu jumpai di artikel ini. Yuk baca segera dan temukan bisnis apa yang cocok buat kamu.';
                $head['title_page'] = 'MyBeb - Bisnis Sampingan Anak Sekolah, Pasti Sukses';
                break;
            case 'tagihan/bpjs-kesehatan':
                $head['meta_descriptions'] = 'Yuk bayar BPJS Kesehatan di MyBeb sekarang, dan dapatkan bonus voucher liburan gratis ke Jogjakarta. Ayo cek dan bayar segera!';
                $head['title_page'] = 'MyBeb - Bayar BPJS Kesehatan di MyBeb Bonus Liburan Gratis';
                break;
            case 'tagihan/cicilan':
                $head['meta_descriptions'] = 'Yuk bayar cicilan online di MyBeb dan dapatkan voucher McD sebesar 100 RIBU. Bayar angsuran kamu segera ya dan raih vouchernya.';
                $head['title_page'] = 'MyBeb - Bayar Cicilan Online di MyBeb Bonus Voucher McD';
                break;
            case 'tagihan/indihome':
                $head['meta_descriptions'] = 'Yuk segera cek dan bayar tagihan Indihome kamu di aplikasi MyBeb. Ada banyak bonus dan voucher gratis yang bisa kamu dapatkan, gratis.';
                $head['title_page'] = 'MyBeb - Cek dan Bayar Tagihan Indihome Auto Bonus';
                break;
            case 'tagihan/kartu-kredit':
                $head['meta_descriptions'] = 'Hari ini bayar tagihan kartu kredit bisa dilakukan di aplikasi MyBeb. Bayar tagihan kartu kredit jadi lebih mudah dan dapat voucher gratis.';
                $head['title_page'] = 'MyBeb - Bayar Tagihan Kartu Kredit di MyBeb';
                break;
            case 'tagihan/pascabayar':
                $head['meta_descriptions'] = 'Hari ini bayar tagihan pascabayar bisa dilakukan di aplikasi MyBeb. Bayar tagihan jadi lebih mudah, lebih untuk dan dapat voucher gratis.';
                $head['title_page'] = 'MyBeb - Cek dan Bayar Tagihan Pascabayar di MyBeb';
                break;
            case 'topup/ovo':
                $head['meta_descriptions'] = 'Yuk top up saldo OVO kamu di MyBeb sekarang, ada voucher KFC senilai 50.000 gratis. Ayo isi saldo OVO kamu sekarang!.';
                $head['title_page'] = 'MyBeb - Top Up Saldo OVO - Grab - Bonus Voucher McD 100.000';
                break;
            case 'topup/gopay':
                $head['meta_descriptions'] = 'Yuk top up saldo Gopay kamu di MyBeb sekarang, ada voucher KFC senilai 50.000 gratis. Ayo isi saldo Gopay kamu sekarang!.';
                $head['title_page'] = 'MyBeb - Top Up Saldo Gopay - Bonus Voucher KFC 50.000';
                break;
            case 'topup/dana':
                $head['meta_descriptions'] = 'Yuk top up saldo DANA kamu di MyBeb sekarang, ada voucher McD senilai 50.000 gratis. Ayo isi saldo DANA sekarang!';
                $head['title_page'] = 'MyBeb - Top Up Saldo DANA - TIX ID di MyBeb';
            case 'voucher/joox':
                $head['meta_descriptions'] = 'Ini adalah cara mendapatkan joox VIP secara langsung dan paling gampang. Cukup degan install MyBeb, langsung dapat JOOX VIP.';
                $head['title_page'] = 'MyBeb - Cara Mendapatkan JOOX VIP';
                break;
            case 'voucher/ovo':
                $head['meta_descriptions'] = 'Yuk segera install MyBeb dan inilah cara mendapatkan saldo OVO gratis paling gampang. Segera install dan raih saldo sebanyak-banyaknya.';
                $head['title_page'] = 'MyBeb - Cara Mendapatkan Saldo OVO Gratis';
                break;
            case 'voucher/spotify':
                $head['meta_descriptions'] = 'Yuk segera install MyBeb dan dapatkan spotify premium. Dapatkan juga manfaat lainnya seperti voucher kfc gratis dan voucher McD gratis.';
                $head['title_page'] = 'MyBeb - Cara Mendapatkan Spotify Premium';
                break;
            case 'voucher/mcd-gratis':
                $head['meta_descriptions'] = 'Yuk segera install MyBeb dan dapatkan voucher McD gratis. Dapatkan juga manfaat lainnya seperti voucher kfc gratis dan saldo Gopay gratis.';
                $head['title_page'] = 'MyBeb - Cara Mendapatkan Voucher McD Gratis';
                break;
            case 'voucher/kfc':
                $head['meta_descriptions'] = 'Yuk segera install MyBeb dan dapatkan voucher KFC gratis. Dapatkan juga manfaat lainnya seperti voucher McD gratis dan saldo Grab gratis.';
                $head['title_page'] = 'MyBeb - Cara Mendapatkan Voucher KFC Gratis';
                break;
            default:
                $head['meta_descriptions'] = 'Ini meta desc default';
                $head['title_page'] = 'Ini title default';
                break;
        }
        return $head;
    }

}
