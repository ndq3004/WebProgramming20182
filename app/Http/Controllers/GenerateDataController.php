<?php

namespace App\Http\Controllers;
// illuminate\database\Connection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GenerateDataController extends Controller
{
    public function handleDatabase(){
        // create database 
        // Schema::getConnection()->getDoctrineSchemaManager()->dropDatabase("laptrinhweb");
        // $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
        // foreach($tableNames as $tablename){
        //     echo $tablename;
        // }
        //===================
        // $conn = mysqli_connect("localhost", "root", '');
        // if(!$conn) 
        //     die("connection_error".mysql_error());
        // else echo "connection ok";
        //========================
        // DB::getConnection()->statement("create database laptrinhweb;");
        //==========================
        $username = array_get($config, 'username');
	$password = array_get($config, 'password');
    }
    public function generateData(){
        
    }
}
