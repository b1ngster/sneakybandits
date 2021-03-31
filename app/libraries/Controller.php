<?php
  /*
   * Base Controller
   * Loads the models and views
   */
  class Controller {
    // Load model
    public function model($model){
      // Require model file
      require_once $_SERVER['DOCUMENT_ROOT'] .'/../app/models/' . $model . '.php';

      // Instatiate model
      return new $model();
    }

    // Load view
    public function view($view, $data = []){
      // Check for view file
      

      $path =  $_SERVER['DOCUMENT_ROOT'] . '/../app/views/' . $view . '.php';

      
      Logger::write( 'debug', $path);
      if(file_exists($path)){

        require_once $path;
      } else {
        // View does not exist
        die('View does not exist');
      }
    }
  }