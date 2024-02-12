<?php
define('APP_PATH', '/home/runner/work/cypht/cypht/');
define('VENDOR_PATH', APP_PATH.'vendor/');

/* get the framework */
require 'vendor/autoload.php';
require 'vendor/ezyang/htmlpurifier/library/HTMLPurifier/Config.php';
require 'lib/module.php';
require 'lib/modules.php';
require 'lib/modules_exec.php';
require 'lib/config.php';
require 'lib/auth.php';
require 'lib/oauth2.php';
require 'lib/session_base.php';
require 'lib/session_php.php';
require 'lib/session_db.php';
require 'lib/session_memcached.php';
require 'lib/session_redis.php';
require 'lib/format.php';
require 'lib/dispatch.php';
require 'lib/request.php';
require 'lib/cache.php';
require 'lib/output.php';
require 'lib/crypt.php';
require 'lib/crypt_sodium.php';
require 'lib/sodium_compat.php';
require 'lib/environment.php';
require 'lib/db.php';
require 'lib/servers.php';
require 'lib/api.php';
require 'lib/webdav_formats.php';

$environment = Hm_Environment::getInstance();
$environment->load();
?>
