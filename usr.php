<?php # vim: se fdm=marker:
(new class extends srv\api{

  function GET(){
    $arr = [[
      'id'=>123,
      'name'=>'abc'
    ],[
      'id'=>456,
      'name'=>'xyz'
    ],[
      'id'=>789,
      'name'=>'vnownf9829u'
    ]];
    die(static::ok(200,$arr));
  }

})();
