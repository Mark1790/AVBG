<?php
function ConectarBD(){
    $conex=mysql_connect("localhost","root","");
    if(!$conex){
        die ("Error: ".mysql_error());
    }

    $database=mysql_select_db("AVGB",$conex);
    if (!$database){
        die ("error: ".mysql_error());
    }
}


?>