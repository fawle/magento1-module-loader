<?php
$ds = DIRECTORY_SEPARATOR;
$bp = dirname(dirname(dirname(__DIR__)));

if (!file_exists($bp.$ds.'app')) {
    foreach (array('pub', 'public') as $pubDir) {
        if (file_exists($bp . $ds . $pubDir)) {
            $bp .= $ds . $pubDir;
            break;
        }
    }
}

$paths = array(
    $bp . $ds . 'app' . $ds . 'code' . $ds . 'local',
    $bp . $ds . 'app' . $ds . 'code' . $ds . 'community',
    $bp . $ds . 'app' . $ds . 'code' . $ds . 'core',
    $bp . $ds . 'lib',
    $bp . $ds
    get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $paths));

require_once 'Mage/Core/functions.php';
require_once 'Varien/Autoload.php';

Varien_Autoload::register();
