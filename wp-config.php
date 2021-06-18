<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'OJTwordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<i[Y:fhy|oEx1! ne{4X6!{#l{x@[|ss|Ij+)OoYGd!8`@J(C2Pgp3IUvJzzE/R!' );
define( 'SECURE_AUTH_KEY',  'h/ 6/ %x LN2<tl?6rDu}7cuEoBR}u.4/$#EcK6E#R[[&-pdrIk!*I9(bmLbN1=Z' );
define( 'LOGGED_IN_KEY',    'O46ufC!8LQ*HtP2 >~ _K;ea/C+n8lwrv)n6%?iOZ7gzMOr}xz}Tl~VO=Tx~D98D' );
define( 'NONCE_KEY',        'pBx,B/4s)AslFH21uZ#KR2(:d&nuKOgjh5(JKi ,z;e)uth}leCX|#%zYynJ/_^{' );
define( 'AUTH_SALT',        'mfnCpvWpQkK^N1|y,;p[U53-{gJ:w|lNM#G}je/(;Ah(B.[YC)y%CM%nSzoxJ@&G' );
define( 'SECURE_AUTH_SALT', '9hqQ#KgyV]q =?u7X9QpQ=NGzJM>I$H%#nfU##?/#JG<!`vmgb1#M@>,v~<>1]Tk' );
define( 'LOGGED_IN_SALT',   ' j2NbpnoEqza..xFwUWR;/}@iDN9.$k[FSf10/,yy3Qcu|`*m7G@hBAX1A0kl! |' );
define( 'NONCE_SALT',       'rM/_Dpr/qh%ZLF .hBE1Tm.5%}l&fkc4Ae]%Z6Px{Q(Gyf2IQX9sz_A5)jDy<1be' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
