<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'db_morayya' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_<B@ ;hALf/>uy{.2[e]o`B08;5e3t?UGDG[9}*>R5~]]7sjHfm[9qXN7kKHs-;K' );
define( 'SECURE_AUTH_KEY',  'yG%M*3S!M47hROmzltJVVJ p7RJgVJ%@;}-7|Awp}G.Z-Xt|tr)Xnko3B4^1^yXL' );
define( 'LOGGED_IN_KEY',    'S+O5 K1Vv^?/#fJST]6l66M*K@>f*9!!=>?HhpSU:F4C13B@6MTh`Y:^gGcS:n|*' );
define( 'NONCE_KEY',        ')sFhAQQ>-#@!SA,Jfb_&@4E1}i,w@W!&xDaSQbBTQ{VsE~WX,J}Ed?(=0K,@lGIt' );
define( 'AUTH_SALT',        '$~@m*lK*YOx&jc?!~-n7?x XbsFr^@PAw>Aqq&Wu_N&$c$6k:JAR{;R6,uBxje_&' );
define( 'SECURE_AUTH_SALT', 'M[=-_Mrj7jZOex]qfc>=(_#D.pP( 6*X*+r/Xf[4%Yfre CQ`i.G:&z ij.H+hD5' );
define( 'LOGGED_IN_SALT',   't4{<^m>nW.=#0k/Y/GU8[gr;VeVsjKwx[U)n%1wvjnK>Q>K=mO6SsW]P@T!n(}D>' );
define( 'NONCE_SALT',       'VL48U|l2IW@9uLJ:qaR84LZJ$gJsjU7;,%q=:68_pfp4HF2{E =mEk;sRWv4[yBO' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
