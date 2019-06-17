<?php
/*
  $Id: advanced_search.php,v 1.15 2003/07/08 16:45:35 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Pencarian Lanjutan');
define('NAVBAR_TITLE_2', 'Hasil Pencarian');

define('HEADING_TITLE_1', 'Pencarian Lanjutan');
define('HEADING_TITLE_2', 'Produk yang ditemukan berdasakan kriteria pencarian');

define('HEADING_SEARCH_CRITERIA', 'Kriteria Pencarian');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Cari di Deskripsi Produk');
define('ENTRY_CATEGORIES', 'Kategori:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Termasuk sub kategori');
define('ENTRY_MANUFACTURERS', 'Produsen:');
define('ENTRY_PRICE_FROM', 'Harga dari:');
define('ENTRY_PRICE_TO', 'Harga sampai:');
define('ENTRY_DATE_FROM', 'Tanggal dari:');
define('ENTRY_DATE_TO', 'Tanggal sampai:');

define('TEXT_SEARCH_HELP_LINK', '<u>Bantuan Mesin Pencari</u> [?]');

define('TEXT_ALL_CATEGORIES', 'Semua Kategori');
define('TEXT_ALL_MANUFACTURERS', 'Semua Produsen');

define('HEADING_SEARCH_HELP', 'Bantuan Mesin Pencari');
define('TEXT_SEARCH_HELP', 'Kata kunci bisa dipisahkan oleh pernyataan AND dan/atau OR untuk lebih akuratnya hasil pencarian.<br><br>Contoh, <u>Microsoft AND mouse</u> akan menampilkan pencarian yang mengandung kedua kata tersebut. Kemudian, untuk <u>mouse OR keyboard</u>, akan menghasilkan pencarian yang mengandung kedua kata atau salah satu dari kedua kata tersebut.<br><br>Pencarian secara tepat per kata bisa dilakukan dengan menggunakan tanda petik dua.<br><br>Contoh, <u>"notebook computer"</u> akan menampilkan hasil pencarian yang sama persis dengan kata tersebut.<br><br>Tanda kurung dapat digunakan untuk pencarian lebih lanjut.<br><br>Contoh, <u>Microsoft and (keyboard or mouse or "visual basic")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>Tutup</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Nama Produk');
define('TABLE_HEADING_MANUFACTURER', 'Produsen');
define('TABLE_HEADING_QUANTITY', 'Jumlah');
define('TABLE_HEADING_PRICE', 'Harga');
define('TABLE_HEADING_WEIGHT', 'Berat');
define('TABLE_HEADING_BUY_NOW', 'Beli');

define('TEXT_NO_PRODUCTS', 'Tidak ada produk yang sesuai dengan kriteria pencarian Anda.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Setidaknya satu dari semua field yang ada di formulir harus diisi.');
define('ERROR_INVALID_FROM_DATE', 'Tanggal dari tidak valid.');
define('ERROR_INVALID_TO_DATE', 'Tanggal sampai tidak valid.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Tanggal sampai harus lebih besar atau sama dengan tanggal dari.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Harga dari harus berisi angka.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Harga sampai harus berisi angka.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Harga sampai harus lebih besar atau sama dengan harga dari.');
define('ERROR_INVALID_KEYWORDS', 'Kata kunci tidak valid.');
?>
