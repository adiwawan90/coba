<?php
/*
  $Id: checkout_success.php,v 1.12 2003/04/15 17:47:42 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Checkout');
define('NAVBAR_TITLE_2', 'Berhasil');

define('HEADING_TITLE', 'Pesanan Anda telah diproses!');

define('TEXT_SUCCESS', 'Pesanan Anda telah berhasil diproses! Produk yang Anda pesan akan diantarkan ke alamat kurang lebih 2-5 hari kerja.');
define('TEXT_NOTIFY_PRODUCTS', 'Berikan notifikasi kepada saya tentang perubahan pada produk:');
define('TEXT_SEE_ORDERS', 'Anda dapat melihat sejarah pesanan Anda melalui halama <a href="' . tep_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">\'Akun Saya\'</a> dan klik pada <a href="' . tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL') . '">\'Sejarah Pesanan (History)\'</a>.');
define('TEXT_CONTACT_STORE_OWNER', 'Silakan kirim pertanyaan Anda ke <a href="' . tep_href_link(FILENAME_CONTACT_US) . '">contact person</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Terima kasih atas kepercayaan Anda kepada kami');

define('TABLE_HEADING_COMMENTS', 'Masukkan komentar untuk pemrosesan pesanan');

define('TABLE_HEADING_DOWNLOAD_DATE', 'Tanggal Kadaluarsa: ');
define('TABLE_HEADING_DOWNLOAD_COUNT', ' waktu download tersisa');
define('HEADING_DOWNLOAD', 'Download produk Anda di sini:');
define('FOOTER_DOWNLOAD', 'Anda dapat juga mendownload produk Anda kemudian pada alamat \'%s\'');
?>