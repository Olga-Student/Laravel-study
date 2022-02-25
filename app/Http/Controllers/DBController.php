<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBController extends Controller
{
    public function index(){
        //echo "TEST-DB";
        /*\DB::statement("
            CREATE TABLE test (
                id int PRIMARY KEY AUTO_INCREMENT,
                content varchar(50)
            )
        ");*/
        //echo "complete";

        /*$sql = "INSERT INTO test (content) VALUES (:connect)";
        $result = \DB::insert($sql, [':connect' => 'test']);*/

        $sql = "SELECT * FROM test";
        $result = \DB::select($sql);

        /*$sql = "SELECT * FROM test WHERE id = :id";
        $result = \DB::select($sql, [':id' => 2]);*/

        /*$sql = "SELECT * FROM test WHERE id = :id";
        $result = \DB::selectOne($sql, [':id' => 2]);*/

      /*dd($result);*/

      /* запуск транзакций
       \DB::transaction(function () {
          \DB::insert("jkjsklj");
          \DB::insert("jkjsklj");
          \DB::insert("jkjsklj");
       });*/

    /*   конструктор запросов подходит для простых запросов
     \DB::table('test')
            ->where('id', '=', 2) //селетор вызовов where под все возможные вызовы
            ->select([])
            ->get();

     echo "complete";*/

    }
}
