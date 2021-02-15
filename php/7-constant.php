<?php
  //define- Defines a named constant.
  //define(string $name, mixed$value);
  //define(string $name, mixed$value, bool $case_insensitive = false) : bool

  define("FAVORITE_DESSERT","strawberry cake");
  echo "your favorite dessert is ".FAVORITE_DESSERT."<br>";

  define("FAVORITE_DESSERT","raspberry macaron");
  echo "your favorite dessert is ".FAVORITE_DESSERT."<br>";

  //output:
  //your favorite dessert is strawberry cake

  //Warning: Constant FAVORITE_DESSERT already defined in C:\xampp\htdocs\php\7-constant.php on line 9
  //your favorite dessert is strawberry cake


?>
