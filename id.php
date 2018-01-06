<?php # vim: se fdm=marker:
(new class extends srv\api{

  function GET(string $q='', int $limit=10){
    //TODO: 如果$q等于空，则：少量数据就直接全部返回吧，如果太多就返回少量老顾客
    $arr = [[
      'id'=>'A 12345',
      'model'=>'aaaaa',
      'vin'=>'BNW9384uhfsdfk'
    ],[
      'id'=>'D 67890',
      'model'=>'bbbbbbbb',
      'vin'=>'VNIOWNFI28998'
    ],[
      'id'=>'O 10JQK',
      'model'=>'ccc',
      'vin'=>'LHFwh902874y0'
    ]];
    die(static::ok(200,$arr));
  }

})();
