<?php
namespace ScummVM;

class Constants
{
    public function __construct()
    {
        /* Current version. */
        define('RELEASE', '2.0.0');
        define('RELEASE_TOOLS', '2.0.0');
        define('RELEASE_DEBIAN', '2.0.0');

        /* Version when the percentages on the compat page were removed */
        define('COMPAT_LAYOUT_CHANGE', '1.7.0');

        /* News items on the front page. */
        define('NEWS_ITEMS', 5);

        /* Number of heroes header files. */
        define('HEROES_NUM', 6);

        /* Base URL to the website. */
        if ($_SERVER['SERVER_PORT'] == '80') {
            $url = "http://{$_SERVER['SERVER_NAME']}";
        } elseif ($_SERVER['SERVER_PORT'] == '443') {
            $url = "https://{$_SERVER['SERVER_NAME']}";
        } else {
            $url = "http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}";
        }
        if (substr($url, -1) != '/') {
            $url .= '/';
        }
        define('URL_BASE', $url);

        /* Paths. */
        define('DIR_DATA', 'data');
        define('DIR_NEWS', 'data/news');
        define('DIR_LANG', 'lang');
        define('DIR_COMPAT', 'data/compatibility');
        define('DIR_DOWNLOADS', '/downloads');
        define('DIR_SCREENSHOTS', '/data/screenshots');

        /* Downloads */
        define('DOWNLOADS_URL', '/frs/scummvm/{$release}/');
        define('DOWNLOADS_TOOLS_URL', '/frs/scummvm-tools/{$release}/');
        define('DOWNLOADS_EXTRAS_URL', '/frs/extras/');

        /**
         * Smarty configuration. The Smarty team does not recommend putting any of the
         * directories used under the web server root. 'SMARTY_DIR_COMPILE' and
         * 'SMARTY_DIR_CACHE' must be writable by the web server (chown).
         */
        define('SMARTY_DIR', 'vendor/smarty/smarty/libs/');
        define('SMARTY_DIR_TEMPLATE', 'templates');
        define('SMARTY_DIR_COMPILE', SMARTY_DIR . '/template_c');
        define('SMARTY_DIR_CACHE', SMARTY_DIR . '/cache');
    }
}
