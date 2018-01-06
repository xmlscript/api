<?php # vim: se fdm=marker:
(new class extends srv\api{

  function GET(){
    die(static::ok(102,['get'=>$_GET]));
  }

  function POST(){
    die(static::ok(200,['get'=>$_GET, 'post'=>$_POST, 'files'=>$_FILES]));
  }

  function PUT(){
    die(static::ok(200,file_get_contents('php://input')));
  }

})(0);
