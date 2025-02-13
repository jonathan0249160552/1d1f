<?php
class Database {

    private $dsn = "mysql:host=localhost;dbname=1d1f";
    private $dbuser = "root";
    private $dbpass = "";
    

    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
               
              

        }catch (PDOExeception $e) {
            echo 'Error :'.$e->getMessage();

        }
        return $this->conn;
    }
    // Checking Input 
    public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
       $data =  filter_var($data, FILTER_UNSAFE_RAW);
       $data =  filter_var($data,FILTER_SANITIZE_SPECIAL_CHARS );
        
        return $data;
    }

   public function sendFile(){

   }

    // read more function
   public function read_more($limit,$text)
    {
        $contents = explode(" ",$text);
        $words = array_slice($contents,0,$limit);
        return implode(" ",$words);
    
    }


    // Error success message alert
    public function showMessage($type,$message){
        return '<div id="message_alert" class="alert alert-'.$type.' alert-dismissible "> 
                    <button type="button" class="close" 
                    data-dismiss="alert">&times;</button>
                    <strong class="text-center"> '.$message.' </strong>
                    
                     </div>';

                     
    }

    // display time in ago
    public function timeInAgo($timestamp)
    {
     date_default_timezone_set('Africa/Accra');
        $timestamp = strtotime($timestamp) ? strtotime($timestamp) : $timestamp;
        $time = time() - $timestamp;

        switch($time){
            // Seconds
            case $time <=60:
            return 'Just Now!';
            // Minute
            case $time >= 60 && $time < 3600:
            return(round($time/60)==1)?' 1 minute ago' : round($time/60). ' minutes ago';

            // yours
            case $time >= 3600 && $time < 86400:
            return(round($time/3600)==1)?' an hour ago' : round($time/3600). ' hours ago';

             // days
             case $time >= 86400 && $time < 604800:
             return(round($time/86400)==1)?' a day ago' : round($time/86400). ' days ago';

             // weeks
             case $time >= 604800 && $time < 2600640:
             return(round($time/604800)==1)?' a week ago' : round($time/604800). ' weeks ago';

             // months
             case $time >= 2600640 && $time < 31207680:
             return(round($time/2600640)==1)?' a month ago' : round($time/2600640). ' months ago';
            
             // years
             case $time >= 31207680;
                return(round($time/31207680)==1)?' a years ago' : round($time/31207680). ' years ago';
   
            
            }
    }


    public function timeStmp($timestamp)
    {
     date_default_timezone_set('Africa/Accra');
        $timestamp = strtotime($timestamp) ? strtotime($timestamp) : $timestamp;
        $time = time() - $timestamp;

        switch($time){
            // Seconds
            case $time <=60:
            return 60;
            
            
            }
    }

}




?>