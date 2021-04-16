<?php
  class FeedsModel {
    private $db;

    public function __construct(){
      //$this->db = new Database;
    }

    // Regsiter user
    public function all(){
      
      $urls = $this->read_file('../app/storage/RSS/urls.csv');
      $data = array();
     // print_r($urls);
      $data = $this->read_http('http://dotabuff.com/blog.rss');

      //foreach($urls as $url){

       //echo $url;
      //$d = $this->read_http($url);
     // print_r($d);

      //}
      return $data;
   
    }

    // Login User
    public function read_http($url)
      {
      //  echo $url;
        $ch = curl_init('https://dotabuff.com/blog.rss');
        curl_setopt($ch, CURLOPT_TIMEOUT, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        //$doc = new SimpleXmlElement($data, LIBXML_NOCDATA);
       print_r($data);
        curl_close($ch);
        if( empty( $data)){

          echo 'failed' . '/n';
         echo  $error_msg = curl_error($data);
        } else {
          echo $url;
         
          return $data;
        }
      
      
             
          }
      
    

    public function write_file($url, $data, $flags = 0){

        $parts = explode( '/', $url );
        array_pop( $parts );
        $dir = implode( '/', $parts );
       
        if( !is_dir( $dir ) ){
            mkdir( $dir, 0777, true );
       
      //  file_put_contents( '../app/storage/data/RSS/download', $url, $contents, $flags );
    }
    
      return $dir;
    }

    public function read_file (){

      

     // $urls = file_get_contents('../app/storage/data/RSS/urls.csv');

      $data = array();
      $handle = fopen('../app/storage/data/RSS/urls.csv', "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
       
      $data[] = trim(rtrim($line, ","));

    }

    fclose($handle);
} else {
    $data['error'] = 'failed to open remote';
} 


      return $data;

    }
}
  