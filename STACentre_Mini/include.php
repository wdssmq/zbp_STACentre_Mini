<?php
#注册插件
RegisterPlugin("STACentre_Mini", "ActivePlugin_STACentre_Mini");

function ActivePlugin_STACentre_Mini()
{
  Add_Filter_Plugin('Filter_Plugin_Admin_Footer', 'STACentre_Mini_AddJS');
}
function STACentre_Mini_AddJS()
{
  global $zbp;
  $curURL = $zbp->currenturl;
  if (strpos($curURL, "STACentre")) {
    echo '<script src="' . STACentre_Mini_Path("script", "host") . '"></script>';
    // echo $zbp->currenturl;
    $zbp->option['ZC_POST_ALIAS_USE_ID_NOT_TITLE'] = true;
    $zbp->SaveOption();
  }
}
function STACentre_Mini_Path($file, $t = 'path')
{
  global $zbp;
  $result = $zbp->$t . 'zb_users/plugin/STACentre_Mini/';
  switch ($file) {
    case 'script':
      return $result . 'script/plugin.js';
      break;
    case 'usr':
      return $result . 'usr/';
      break;
    case 'var':
      return $result . 'var/';
      break;
    case 'main':
      return $result . 'main.php';
      break;
    default:
      return $result . $file;
  }
}
function InstallPlugin_STACentre_Mini()
{
}
function UninstallPlugin_STACentre_Mini()
{
}
