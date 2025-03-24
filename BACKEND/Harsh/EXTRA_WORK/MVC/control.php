<?php

include_once('model.php');

class control extends model{

    function __construct(){
       
        model::__construct();
        $path=$_SERVER['PATH_INFO'];

        switch($path)
        {
            case '/index' :
                include_once('index.php');
                break;
            
            default:
				echo "<h1> 404 : Page Nit Found</h1>";
			    break;
        }


    }

}
?>