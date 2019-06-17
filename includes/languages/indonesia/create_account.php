<?php
/*
  $Id: create_account.php,v 1.11 2003/07/05 13:58:31 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Buat Akun Baru');

define('HEADING_TITLE', 'Informasi Akun Saya');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>Catatan:</b></font></small> Jika Anda sudah mempunyai akun, silakan log masuk pada <a href="%s"><u>halaman log masuk</u></a>.');

define('EMAIL_SUBJECT', 'Selamat Datang di ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Halo Bpk. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Halo Ibu %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Halo %s' . "\n\n");
define('EMAIL_WELCOME', 'Kami dengan senang hati menyambut Anda di <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Sekarang Anda telah menjadi bagian dari <b>berbagai layanan</b> yang kami sediakan khusus untuk Anda. Beberapa di antaranya:' . "\n\n" . '<li><b>Daftar Belanja yang Permanen</b> - Semua produk yang pernah Anda tambahkan pada daftar belanja, akan tetap berada di sana sampai Anda menghapusnya, atau memproses belanjaan tersebut sampai chekout.' . "\n" . '<li><b>Buku Alamat</b> - Kami bisa mengirimkan pesanan Anda ke alamat lain selain alamat rumah Anda! Ini adalah sebuah cara yang fantastis bagi Anda untuk mengirimkan sebuah hadiah ulang tahun untk orang tercinta.' . "\n" . '<li><b>Sejarah Pesanan</b> - Lihat kembali barang-barang yang telah Anda pesan pada kami.' . "\n" . '<li><b>Komentar Produk</b> - Bagi pengalaman Anda dan berikan komentar untuk semua produk yang ada di sini.' . "\n\n");
define('EMAIL_CONTACT', 'Untuk pertanyaan dan bantuan, silakan kirim E-mail ke: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Catatan:</b> Alamat E-mail ini diberikan oleh salah satu pelanggan kami. Jika Anda tidak berkeinginan untuk menjadi pelanggan, silakan kirim email ke ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
?>
