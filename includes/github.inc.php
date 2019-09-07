<?php
  if (!defined('ABSPATH')) {
      exit;
  }

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://florian-valois.com/plugin-test-1.1.zip',
    BPW_PLUGIN_DIR . '/boilerplate-plugin-wordpress.php',
    'boilerplate-plugin-wordpress'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
$myUpdateChecker->setBranch('master');

?>