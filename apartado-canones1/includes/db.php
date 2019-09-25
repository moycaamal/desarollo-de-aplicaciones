<?php // Using Medoo namespace use Medoo\Medoo; // Initialize $database=new Medoo([ 'database_type'=> 'mysql',
use Medoo\Medoo;

//$server = ($_SERVER['HTTP_HOST' == "smoothoperators.com.mx"]) ? "smoothoperators.com.mx" : "smoothoperators.com.mx" ; 

//Initialize
$db = new Medoo([   
    'database_name' => 'proyecto-desarollo',
    'server' => 'smoothoperators.com.mx',
    'username' => 'remote',
    'password' => 'D7AC3D58A7318'
    ]);
