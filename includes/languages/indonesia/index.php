<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:38:00 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', 'Ini adalah setup standard pada osCommerce, produk yang ditampilkan di sini hanya untuk demonstrasi saja, <b> semua produk yang dipesan tidak akan dikirimkan ke alamat Anda dan Anda juga tidak akan dikenakan tagihan</b>. Semua informasi yang terdapat dalam produk ini hanyalah sekadar perumpamaan.<br><br><table border="0" width="100%" cellspacing="5" cellpadding="2"><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/1.gif') . '</td><td class="main" valign="top"><b>Pesan Kesalahan</b><br><br>Jika ada pesan kesalahan yang terdapat di atas, silakan memperbaiki terlebih dahulu sebelum proses selanjutnya.<br><br>Pesan kesalahan ditampilkan pada bagian paling atas dengan <span class="messageStackError">latar belakang</span> warna.<br><br>Beberapa hal perlu dilakukan untuk memastikan setup yang benar terhadap toko online Anda - hal-hal tersebut bisa dinonaktifkan dengan mengubah beberapa parameter pada bagian bawah pada berkas includes/application_top.php.</td></tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/2.gif') . '</td><td class="main" valign="top"><b>Mengubah teks pada halaman ini</b><br><br>Teks yang terdapat pada halaman ini bisa dimodifikasi pada masing-masing folder bahasa (language basis):<br><br><nobr class="messageStackSuccess">[path to catalog]/includes/languages/' . $language . '/' . FILENAME_DEFAULT . '</nobr><br><br>Berkas tersebut bisa dimodifikasi manual, atau melalui Administration Tool pada <nobr class="messageStackSuccess">Languages->' . ucfirst($language) . '->Define</nobr> or <nobr class="messageStackSuccess">Tools->File Manager</nobr> modules.<br><br>Teks tersebut terdapat dalam bagian berikut ini:<br><br><nobr>define(\'TEXT_MAIN\', \'<span class="messageStackSuccess"> Ini adalah setup standard pada osCommerce...</span>\');</nobr><br><br>Teks dengan latar belakang hijau bisa dimodifikasi - sangat penting untuk tetap menggunakan define() pada kata kunci TEXT_MAIN. Untuk menghilangkan teks pada TEXT_MAIN, berikut contoh dengan dua tanpa petik pada teks:<br><br><nobr>define(\'TEXT_MAIN\', \'\');</nobr><br><br>Informasi lebih lanjut tentang fungsi PHP define() dapat dibaca <a href="http://www.php.net/define" target="_blank"><u>di sini</u></a>.</td></tr><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/3.gif') . '</td><td class="main" valign="top"><b>Mengamankan Administration Tool</b><br><br>Sangat penting mengamankan Adminstration Tools.</td></tr><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/4.gif') . '</td><td class="main" valign="top"><b>Dokumentasi Online</b><br><br>Dokumentasi online bisa dibaca di <a href="http://www.oscommerce.info" target="_blank"><u>osCommerce Knowledge Base</u></a>.<br><br>Community support ada di <a href="http://forums.oscommerce.com" target="_blank"><u>osCommerce Community Support Forums</u></a>.</td></tr></table><br>Jika Anda berminat untuk mendownload CMS yang dipakai untuk membuat toko online ini, atau jika Anda ingin memberikan kontribusi terhadap osCommerce, silakan kunjungi <a href="http://www.oscommerce.com" target="_blank"><u>support site of osCommerce</u></a>. Toko online ini berjalan dengan menggunakan osCommerce versi <font color="#f0000"><b>' . PROJECT_VERSION . '</b></font>.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Produk Baru untuk Bulan %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Segera Hadir');
define('TABLE_HEADING_DATE_EXPECTED', 'Tanggal yang diharapkan');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Silakan lihat apa yang kami punya di sini');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Model');
  define('TABLE_HEADING_PRODUCTS', 'Nama Produk');
  define('TABLE_HEADING_MANUFACTURER', 'Produsen');
  define('TABLE_HEADING_QUANTITY', 'Jumlah');
  define('TABLE_HEADING_PRICE', 'Harga');
  define('TABLE_HEADING_WEIGHT', 'Berat');
  define('TABLE_HEADING_BUY_NOW', 'Beli Sekarang');
  define('TEXT_NO_PRODUCTS', 'Belum ada produk pada kategori ini.');
  define('TEXT_NO_PRODUCTS2', 'Tidak ada produk dari produsen ini.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Jumlah Produk: ');
  define('TEXT_SHOW', '<b>Tampilkan:</b>');
  define('TEXT_BUY', 'Beli 1 \'');
  define('TEXT_NOW', '\' sekarang');
  define('TEXT_ALL_CATEGORIES', 'Semua Kategori');
  define('TEXT_ALL_MANUFACTURERS', 'Semua Produsen');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Apa yang Baru di sini');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Kategori');
}
?>
