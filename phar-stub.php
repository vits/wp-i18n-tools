#!/usr/bin/env php
<?php
define('IS_PHAR_MAKEPOT', true);

\Phar::mapPhar('wp-i18n-tools.phar');
require_once 'phar://wp-i18n-tools.phar/makepot.php';

__HALT_COMPILER();
