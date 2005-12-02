<?php
// The main version number, when we don't distinguish between platforms
define('stable_version', '1.2.4');

// Note: Sizes are in MB.
define('mac_classic_version', '1.0.0');
define('mac_classic_size',    1.5);
define('macosx_version', '1.2.4b');
define('macosx_size',    3.4);

define('win_exe_version', '1.2.4');
define('win_exe_size',    2.5);
define('win_zip_version', '1.2.4b');
define('win_zip_size',    3.2);

define('src_version', '1.2.4b');
define('src_size',    4.3);
define('src_suffix',  '.tar.gz');

$win_exe_url = "audacity-win/audacity-win-".win_exe_version.".exe";
$win_zip_url = "audacity-win-zip/audacity-win-".win_zip_version.".zip";
$src_url = "audacity-src/audacity-src-".src_version.src_suffix;
$macosx_url = "audacity-macosx/audacity-macosx-".macosx_version.".dmg";
$mac_classic_url = "audacity-mac/audacity-mac-".mac_classic_version.".sit";
?>
