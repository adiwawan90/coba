<?php
/*
  $Id: password_forgotten.php,v 1.8 2003/06/09 22:46:46 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Log Masuk');
define('NAVBAR_TITLE_2', 'Lupa Kata Sandi');

define('HEADING_TITLE', 'Saya lupa Kata Sandi');

define('TEXT_MAIN', 'Jika Anda lupa Kata Sandi Anda, silakan masukkan alamat E-mail yang digunakan untuk mendaftar, dan kami akan mengirimkan Kata Sandi Anda ke E-Mail.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Alamat E-mail Anda tidak ditemukan pada database kami. Silakan coba lagi.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Kata Sandi Baru');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Kata Sandi Baru diminta oleh ' . $REMOTE_ADDR . '.' . "\n\n" . 'Kata Sandi Anda untuk log Masuk ke \'' . STORE_NAME . '\' adalah:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Berhasil: Password Baru Anda telah berhasil dikirimkan ke E-Mail Anda.');
?>