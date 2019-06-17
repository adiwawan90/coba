<?php
/*
  $Id: tell_a_friend.php,v 1.7 2003/06/10 18:20:39 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Beritahu Rekan');

define('HEADING_TITLE', 'Beritahu Rekan tentang \'%s\'');

define('FORM_TITLE_CUSTOMER_DETAILS', 'Data Anda');
define('FORM_TITLE_FRIEND_DETAILS', 'Data Rekan Anda');
define('FORM_TITLE_FRIEND_MESSAGE', 'Pesan Anda');

define('FORM_FIELD_CUSTOMER_NAME', 'Nama Anda:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'Alamat E-Mail:');
define('FORM_FIELD_FRIEND_NAME', 'Nama Rekan Anda:');
define('FORM_FIELD_FRIEND_EMAIL', 'Alamat E-Mail Rekan Anda:');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Email Anda tentang <b>%s</b> telah dikirim ke <b>%s</b>.');

define('TEXT_EMAIL_SUBJECT', 'Rekan Anda, %s telah merekomendasikan produk dari %s');
define('TEXT_EMAIL_INTRO', 'Halo %s!' . "\n\n" . 'Rekan Anda, %s, berpikir bahwa Anda tertarik %s sampai %s.');
define('TEXT_EMAIL_LINK', 'Untuk melihat produk, silakan klik link di bawah ini:' . "\n\n" . '%s');
define('TEXT_EMAIL_SIGNATURE', 'Salam Hangat,' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Nama Rekan Anda tidak boleh kosong.');
define('ERROR_TO_ADDRESS', 'Alamat E-Mail Rekan Anda tidak valid.');
define('ERROR_FROM_NAME', 'Nama Anda tidak boleh kosong.');
define('ERROR_FROM_ADDRESS', 'Alamat E-Mail Anda tidak valid.');
?>
