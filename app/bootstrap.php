<?php

  // Load Config
  require_once 'config/app.php';
  // Load Helpers
  require_once 'helpers/url_helper.php';
  require_once 'helpers/session_helper.php';

  // Autoload Core Libraries
// this function helps the init function on index page
//by not needing includes on the top of all pages
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
