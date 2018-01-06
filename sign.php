<?=(new class (10) extends srv\api{ # vim: se fdm=marker:

  const STATUS = [];

  /** @a aaaaaaaaaaaa
   * @B: BBB BBB BBB
   ** @bbb  :   bbbbb  bbbbbbbbbbbb    
   @ccc                                         :                  cccccccccccccccccc
   *   @dd dddd D dddddddddd
   *   dddddddddd
   x*/
  function POST(string $appid, int $timestamp, string $token):string{
    //TODO: 如果$get,$post,$files三位一体同时传入，怎么办？只自动转换了形参而以
    //TODO: 分别检查这三者，因为$get仅仅转换而以，并没有检测业务合法性
    //TODO: 如果所有方法过来都需要检测的公共标准，可以放在构造或invoke回调里面做

    die(self::ok(201,[1,2,3]));
    //$this->verify($appid, $timestamp, $token) or die(self::err(12345));
    //self::ok(200);
    echo '<button>okok</button>';
    //return stdClass;
    return __FILE__; //可以return，可以echo，甚至可以随时die
    //die(__FILE__);
  }

  function GET(bool $ok,string $a='abc'):string{
    $str = self::err(3.14,$_SERVER,['reason'=>'xxxxxxxxxxxxxxxx','code'=>88888]);
    die($str);
    //return $str;
  }

  private function verify(string $appid, int $timestamp, string $token):bool{
    $_SERVER['REQUEST_TIME']-$timestamp < 10000 or die('timeout');//FIXME: 要不要false

    #TODO: 拿$appid去数据源换$secret
    #TODO: 拼装标准URI，依据
    #TODO: 排序调用方原来的$_GET['timestamp']，URI，和$secret，之后sha1加密成一个字符串
    #TODO: 比较这个字符串和$token参数，如果一致说明匹配成功
  }

})(5,function(){#TODO 每一次判断
  return !isset($_POST['tel'], $_POST['passwd']);
}, function(){#TODO 只做一件事情
  return true;
},function(){#TODO 这样条理清晰一些
  return null;
},function(){#TODO 但记住，除非显式的false，否则都算匹配成功
  return;
},function(){#TODO 而且，回调不能带参数，不然基类调用它时不知道该用什么参数
},function(){#TODO 
  return !false;
});
