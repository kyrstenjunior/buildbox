<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'buildbox' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mTBuAU}8+,`w4+|%GN{c^x92n^Ojx&V`XxRXG>~~{$*w0|-j%PxetCZCaJ_SXU8T' );
define( 'SECURE_AUTH_KEY',  'EMM^2H*4E)[hbh g&M^#hp>]nCO=.PaI~S!Vl>A._cD%PhHz&3hIp63&b**zjyHm' );
define( 'LOGGED_IN_KEY',    '_;n*3u<Mv+?AuWhl;(>&Yevg8Yeb6GF3$f*nT>GIL#~KN;a(9d;l^CsOYd1^*hu`' );
define( 'NONCE_KEY',        'O= #d!!g8 }b1=f}M|^gk@m9vGR8.:-`S7Y8&{R n[8)Iy-S6e21ei/N9u~zm3z;' );
define( 'AUTH_SALT',        '/3TIj@bt7DaVP9^gB^E|f1W?C|PfD/&w+b)wI2$U!F<l4@9U/<@wF?iZ+l5^;mCT' );
define( 'SECURE_AUTH_SALT', 'It/M^^,%~*>XSZ0iawm+L*ik%/kCLLuFf{KXsb}aC`Cw:$y<0@pgyw~ ^-C^.FtC' );
define( 'LOGGED_IN_SALT',   'rOT=D[TuPq1%O!<%-I`n^xd*9a*,GC0(*+|mxz}4*D]bneM9za5%kOQk,-ak8ALj' );
define( 'NONCE_SALT',       '3r$}~oxbZw[V0))#(Bxm-oI&I6T4lQ>74Ipupf&o?_XWr27@{=Hww42FC2SdfMS<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpbb';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
