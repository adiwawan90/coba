<?php
/*
  $Id: indonesia.php,v 1.114 2003/07/09 18:13:39 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'en_US.ISO_8859-1');

define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'Rp');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="LTR" lang="id"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Buat Akun Baru');
define('HEADER_TITLE_MY_ACCOUNT', 'Data Akun Saya');
define('HEADER_TITLE_CART_CONTENTS', 'Barang dalam Belanjaan');
define('HEADER_TITLE_CHECKOUT', 'Checkout');
define('HEADER_TITLE_TOP', 'Atas');
define('HEADER_TITLE_CATALOG', 'Katalog');
define('HEADER_TITLE_LOGOFF', 'Log Keluar');
define('HEADER_TITLE_LOGIN', 'Log Masuk');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'kunjungan sejak');

// text for gender
define('MALE', 'Laki-laki');
define('FEMALE', 'Perempuan');
define('MALE_ADDRESS', 'Bpk.');
define('FEMALE_ADDRESS', 'Ibu');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Kategori');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Produsen');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Produk Baru');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Mesin Pencari');
define('BOX_SEARCH_TEXT', 'Ketikkan kata kunci untuk mencari produk yang diinginkan');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Pencarian Lanjutan');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', 'Spesial Produk');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Komentar');
define('BOX_REVIEWS_WRITE_REVIEW', 'Komentari produk ini!');
define('BOX_REVIEWS_NO_REVIEWS', 'Belum ada komentar produk');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s dari 5 Bintang!');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Daftar Belanja');
define('BOX_SHOPPING_CART_EMPTY', 'kosong');

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Pesanan yang lalu');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Produk paling laku');
define('BOX_HEADING_BESTSELLERS_IN', 'Produk paling laku dalam bulan<br>&nbsp;&nbsp;');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Notifikasi');
define('BOX_NOTIFICATIONS_NOTIFY', 'Berikan notifikasi atas perubahan kepada <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Jangan berikan notifikasi atas perubahan kepada <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Informasi Produsen');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Website');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'produk lainnya');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Bahasa');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Mata Uang');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', 'Informasi');
define('BOX_INFORMATION_PRIVACY', 'Pernyataan Privasi');
define('BOX_INFORMATION_CONDITIONS', 'Syarat & Ketentuan');
define('BOX_INFORMATION_SHIPPING', 'Pengiriman Barang');
define('BOX_INFORMATION_CONTACT', 'Hubungi Kami');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', 'Beritahu Rekan');
define('BOX_TELL_A_FRIEND_TEXT', 'Informasikan kepada rekan Anda tentang produk ini');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Pengiriman Barang');
define('CHECKOUT_BAR_PAYMENT', 'Pembayaran');
define('CHECKOUT_BAR_CONFIRMATION', 'Konfirmasi');
define('CHECKOUT_BAR_FINISHED', 'Selesai!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Silakan Pilih');
define('TYPE_BELOW', 'Ketikkan');

// javascript messages
define('JS_ERROR', 'Telah terjadi kesalahan pada saat pemrosesan data.\n\nSilakan Anda benahi kesalahan-kesalahan berikut:\n\n');

define('JS_REVIEW_TEXT', '* \'Komentar\' harus berisi minimal ' . REVIEW_TEXT_MIN_LENGTH . ' huruf.\n');
define('JS_REVIEW_RATING', '* Anda harus memberikan penilaian terhadap produk!\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Silakan pilih cara pembayaran.\n');

define('JS_ERROR_SUBMITTED', 'Data Anda sedang dikirim. Silakan klik OK dan tunggu hingga proses selesai.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Silakan pilih cara pembayaran.');

define('CATEGORY_COMPANY', 'Data Perusahaan');
define('CATEGORY_PERSONAL', 'Data Pribadi');
define('CATEGORY_ADDRESS', 'Alamat');
define('CATEGORY_CONTACT', 'Nomor yang bisa dihubungi');
define('CATEGORY_OPTIONS', 'Kirimi email');
define('CATEGORY_PASSWORD', 'Kata Sandi');

define('ENTRY_COMPANY', 'Nama Perusahaan:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Jenis Kelamin:');
define('ENTRY_GENDER_ERROR', 'Silakan pilih jenis kelamin Anda.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nama Depan:');
define('ENTRY_FIRST_NAME_ERROR', 'Nama depan harus berisi minimal ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' huruf.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nama Akhir:');
define('ENTRY_LAST_NAME_ERROR', 'Nama akhir harus berisi minimal ' . ENTRY_LAST_NAME_MIN_LENGTH . ' huruf.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Tanggal Lahir:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Tanggal lahir Anda harus tertulis dalam format MM/DD/YYYY (contoh: 05/21/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (contoh: 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'E-Mail harus berisi minimal ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' huruf.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Alamat E-Mail Anda tidak valid. Silakan memasukkan alamat E-Mail yang benar.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Alamat E-Mail Anda sudah ada di dalam database kami. Silakan log masuk menggunakan alamat E-Mail tersebut. Atau Anda bisa membuat akun baru dengan alamat E-Mail yang lain.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Alamat:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Alamat harus berisi minimal ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' huruf.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', '');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Kode Pos:');
define('ENTRY_POST_CODE_ERROR', 'Kode pos harus berisi minimal ' . ENTRY_POSTCODE_MIN_LENGTH . ' huruf.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Kota:');
define('ENTRY_CITY_ERROR', 'Kota harus berisi minimal ' . ENTRY_CITY_MIN_LENGTH . ' huruf.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Propinsi:');
define('ENTRY_STATE_ERROR', 'Propinsi harus berisi minimal ' . ENTRY_STATE_MIN_LENGTH . ' huruf.');
define('ENTRY_STATE_ERROR_SELECT', 'Silakan pilih Propinsi.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Country:');
define('ENTRY_COUNTRY_ERROR', 'Anda harus memilih Negara.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'No. Telp.:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Nomor Telepon harus berisi minimal ' . ENTRY_TELEPHONE_MIN_LENGTH . ' huruf dan sertakan kode area.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Faximile:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Kirimi Email:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Subscribed');
define('ENTRY_NEWSLETTER_NO', 'Unsubscribed');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Kata Sandi:');
define('ENTRY_PASSWORD_ERROR', 'Kata sandi harus berisi minimal ' . ENTRY_PASSWORD_MIN_LENGTH . ' huruf.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Konfirmasi kata sandi harus sesuai dengan kata sandi!.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Konfirmasi Kata Sandi:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Kata Sandi:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Kata sandi harus berisi minimal ' . ENTRY_PASSWORD_MIN_LENGTH . ' huruf.');
define('ENTRY_PASSWORD_NEW', 'Kata Sandi Baru:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Kata sandi harus berisi minimal ' . ENTRY_PASSWORD_MIN_LENGTH . ' huruf.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Konfirmasi kata sandi harus sesuai dengan kata sandi!');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* Harus diisi');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Hasil Pencarian');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Menampilkan <b>%d</b> to <b>%d</b> (dari <b>%d</b> produk)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Menampilkan <b>%d</b> to <b>%d</b> (dari <b>%d</b> produk)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Menampilkan <b>%d</b> to <b>%d</b> (dari <b>%d</b> komentar)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Menampilkan <b>%d</b> to <b>%d</b> (dari <b>%d</b> Produk Baru)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Menampilkan <b>%d</b> to <b>%d</b> (dari <b>%d</b> Spesial Produk)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Halaman Awal');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Halaman Sebelumnya');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Halaman Selanjutnya');
define('PREVNEXT_TITLE_LAST_PAGE', 'Halaman Terakhir');
define('PREVNEXT_TITLE_PAGE_NO', 'Halaman %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Sebelumnya dari %d halaman');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Selanjutnya dari %d halaman');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;Awal');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Sebelum]');
define('PREVNEXT_BUTTON_NEXT', '[Sesudah&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'Akhir&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Alamat Baru');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Buku Alamat');
define('IMAGE_BUTTON_BACK', 'Kembali');
define('IMAGE_BUTTON_BUY_NOW', 'Beli');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Ubah Alamat');
define('IMAGE_BUTTON_CHECKOUT', 'Checkout');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Konfirmasi Pesanan');
define('IMAGE_BUTTON_CONTINUE', 'Lanjutkan');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Lanjut Berbelanja');
define('IMAGE_BUTTON_DELETE', 'Hapus');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Ubah Akun');
define('IMAGE_BUTTON_HISTORY', 'Pesanan yang lalu');
define('IMAGE_BUTTON_LOGIN', 'Log Masuk');
define('IMAGE_BUTTON_IN_CART', 'Masukkan ke keranjang');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Notifikasi');
define('IMAGE_BUTTON_QUICK_FIND', 'Mesin Pencari');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Hapus Notifikasi');
define('IMAGE_BUTTON_REVIEWS', 'Komentar');
define('IMAGE_BUTTON_SEARCH', 'Pencarian');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Pilihan pengiriman');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Beritahu Rekan');
define('IMAGE_BUTTON_UPDATE', 'Ubah');
define('IMAGE_BUTTON_UPDATE_CART', 'Ubah Daftar Belanja');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Tulis Komentar');

define('SMALL_IMAGE_BUTTON_DELETE', 'Hapus');
define('SMALL_IMAGE_BUTTON_EDIT', 'Ubah');
define('SMALL_IMAGE_BUTTON_VIEW', 'Lihat');

define('ICON_ARROW_RIGHT', 'lanjut');
define('ICON_CART', 'di Daftar Belanja');
define('ICON_ERROR', 'Error');
define('ICON_SUCCESS', 'Berhasil');
define('ICON_WARNING', 'Peringatan');

define('TEXT_GREETING_PERSONAL', 'Selamat datang kembali <span class="greetUser">%s!</span> <a href="%s"><u>Produk Baru</u></a> sudah tersedia!');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Jika Anda bukan %s, silakan <a href="%s"><u>log masuk</u></a> menggunakan akun Anda</small>');
define('TEXT_GREETING_GUEST', 'Selamat Datang <span class="greetUser">Guest!</span> Silakan <a href="%s"><u>log masuk</u></a> untuk berbelanja. Atau silakan <a href="%s"><u>buat akun baru</u></a> apabila Anda belum mempunyai akun.');

define('TEXT_SORT_PRODUCTS', 'Urutkan produk ');
define('TEXT_DESCENDINGLY', 'menurun');
define('TEXT_ASCENDINGLY', 'menanjak');
define('TEXT_BY', ' oleh ');

define('TEXT_REVIEW_BY', 'oleh %s');
define('TEXT_REVIEW_WORD_COUNT', '%s kata');
define('TEXT_REVIEW_RATING', 'Nilai: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Date Added: %s');
define('TEXT_NO_REVIEWS', 'Belum ada komentar untuk produk ini.');

define('TEXT_NO_NEW_PRODUCTS', 'Belum ada produk di database.');

define('TEXT_UNKNOWN_TAX_RATE', 'Prosentase pajak belum ada');

define('TEXT_REQUIRED', '<span class="errorText">harus diisi</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> Tidak dapat mengirim email melalui server SMTP Anda. Silakan cek file php.ini dan betulkan SMTP server jika diperlukan.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Peringatan: Folder instalasi masih ada di: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install. Silakan hapus folder ini untuk keamanan website Anda.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Peringatan: Saya masih bisa mengubah file konfigurasi: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php. Ini adalah lubang keamanan yang sangat beresiko - Silakan set pengguna yang berhak mengakses file ini.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Peringatan: Folder session tidak ada: ' . tep_session_save_path() . '. Sessions tidak akan bekerja hingga folder tersebut dibuat.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Peringatan: Saya bisa mengakses session folder di: ' . tep_session_save_path() . '. Sessions tidak akan bekerja hingga pengguna yang berhak mengakses folder di set.');
define('WARNING_SESSION_AUTO_START', 'Peringatan: session.auto_start sedang terbuka (enabled) - Silakan menutup (disable) feature php tersebut di php.ini dan restart webserver Anda.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Peringatan: Folder download masih belum ada di: ' . DIR_FS_DOWNLOAD . '. Produk yang bisa didonwload tidak akan bekerja hingga folder ini dibuat.');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Tanggal berakhirnya kartu kredit Anda tidak valid.<br>Silakan periksa tanggalnya dan coba lagi.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Nomor kartu kredit Anda tidak valid.<br>Silakan periksa nomor kartu kredit Anda dan coba lagi.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Empat digit awal no kartu kredit Anda adalah: %s<br>Jika nomor tersebut benar, Kami tidak bisa menerima kartu kredit tersebut.<br>Jika nomor tersebut salah, silakan coba lagi.');

define('FOOTER_TEXT_BODY', 'Hak Cipta &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br>Web ini dibuat dengan menggunakan <a href="http://www.oscommerce.com" target="_blank">osCommerce</a><br>Kontribusi dalam Bahasa Indonesia oleh <a href="http://www.website-hebat.com" target="_blank">website-hebat.com</a>');
?>
