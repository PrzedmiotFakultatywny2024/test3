<?php

namespace GlpiPlugin\Test3;
use CommonDBTM;
use CommonGLPI;
use Computer;
use Html;
use Log;
use MassiveAction;
use Session;

class PluginTest3 extends CommonDBTM {

     // Should return the localized name of the type
   static function getTypeName($nb = 0) {
      return 'Test3';
   }


   static function canCreate() {

      if (isset($_SESSION["glpi_plugin_test3_profile"])) {
         return ($_SESSION["glpi_plugin_test3_profile"]['test3'] == 'w');
      }
      return false;
   }


   static function canView() {

      if (isset($_SESSION["glpi_plugin_test3_profile"])) {
         return ($_SESSION["glpi_plugin_test3_profile"]['test3'] == 'w'
                 || $_SESSION["glpi_plugin_test3_profile"]['test3'] == 'r');
      }
      return false;
   }


   /**
    * @see CommonGLPI::getMenuName()
   **/
   static function getMenuName() {
      return __('Test 3 plugin');
   }




}
