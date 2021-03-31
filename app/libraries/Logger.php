<?php

class Logger {

    /** Logger logs conents to file */

    public static function write( $file, $contents  ){

        
        $dir = $_SERVER['DOCUMENT_ROOT'] . '/../app/storage/logs';
        $path = $dir .DIRECTORY_SEPARATOR . $file . '.log';
       /*adds a line to the log file */

       $message = $_SERVER['REMOTE_ADDR'] . " " .$uri = $_SERVER['REQUEST_URI'] ." " .date('Y-m-d H:i:s')." " .$contents;
            if(file_put_contents( 
                $path, $message. PHP_EOL, FILE_APPEND))
                return true;
    }
    
   

}