<?php # vim: se fdm=marker:
(new class extends srv\api{

  function GET(){
    $arr = [[
      'id'=>123,
      'role'=>'财务',
      'sex'=>1,
      'birth'=>time()-60*60*24*3252,
      'birthday'=> utils\is::birthday(new DateTime('2018-11-19')),
      'age'=> utils\to::age(new DateTime('1949-11-19')),
      'joined' => time(), //入职日期
      'name'=>'张三'
    ],[
      'id'=>456,
      'role'=>'企业主',
      'sex'=>0,
      'birth'=>time()-60*60*24*1111,
      'birthday'=> utils\is::birthday(new DateTime('1981-11-20')),
      'age'=> utils\to::age(new DateTime('2016-7-28')),
      'joined' => time(), //入职日期
      'name'=>'李四'
    ],[
      'id'=>999999,
      'role'=>null,
      'sex'=>1,
      'birth'=>time()-60*60*24*1111,
      'birthday'=> utils\is::birthday(new DateTime('2017-11-21')),
      'age'=> utils\to::age(new DateTime('2017-7-28')),
      'joined' => time(), //入职日期
      'name'=>'爱谁谁'
    ],[
      'id'=>789,
      'role'=>null,
      'sex'=>1,
      'birth'=>time()-60*60*24*2000,
      'birthday'=> utils\is::birthday(new DateTime('2018-11-21')),
      'age'=> utils\to::age(new DateTime('2017-11-21')),
      'joined' => time(), //入职日期
      'name'=>'王五'
    ]];
    die(static::ok(200,$arr));
  }

})();
