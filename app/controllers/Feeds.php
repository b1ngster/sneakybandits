<?php

  class Feeds extends Controller {
    public function __construct(){
     
      $this->feedsModel = $this->model('FeedsModel');
    }

    public function index(){
      // Check for POST
   
        // Process form
        $remotePath =    'https://www.gamespot.com/feeds/mashup';
        $headers = get_headers( $remotePath , 1 );

            $data = $this->feedsModel->all(); 

            //print_r($data);
              // Load view
    $this->view('feeds/index', $data);
 

    }
   
  }