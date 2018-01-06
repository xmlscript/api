<?=(new class extends srv\api{

  /**
   * @haha 我是GET方法的文档注释
   */
  function GET(string $a,int $b):string{
    return self::error(415,null,srv\doc::index(__DIR__));
  }
})(0);
