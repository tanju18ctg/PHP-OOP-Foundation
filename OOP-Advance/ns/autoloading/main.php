<?php 

namespace CloudStoarage;

//include("mail/Mailer.php");


spl_autoload_register(function($className) 
{
    $path = strtolower(str_replace("CloudStoarage\\", "", $className)).".php";
    $path =  str_replace("\\", "/", $path);
    include_once($path);
});

use \CloudStoarage\Mail\Mailer;
use \CloudStoarage\FileSystem\Scanner;

class Main{

    function __construct()
    {
        $mail = new Mailer();
        $mail->sendMail();

        $scan = new Scanner();
        echo $scan->scan();
    }
}

$m = new Main();

?>