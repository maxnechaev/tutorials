<?php
/*
  $x = 32;
  $y = 22.13;
  $sum = $x + $y;
  $dif = $x - $y;
  $mult = $x * $y;
  $div = $x / $y;

  echo "Результат сложения = $sum";
  echo "<br />";
  echo "Результат вычитания = $dif";
  echo "<br />";
  echo "Результат умножения = $mult";
  echo "<br />";
  echo "Результат деления = $div";
  echo "<br />";

  $z = 12;
  $ostatok = $x % $z;
  echo "Остаток при делении $x и $z = $ostatok<br />";

echo "<hr />";

  $q = 400;
  echo "q = $q<br />";
  $q = $q - 10;
  echo "q = $q<br />";
  $q *= 10;
  echo "q = $q<br />";
  $q++;
  echo $q;
  echo "<br />";
  $q--;
  echo $q;

  $str_1 = "<b>Первая строка</b> <input type=\"text\" /> <br />";
  $str_2 = "<i>Вторая строка</i>";

  echo $str_1." ".$str_2." \" \\ ";
  echo '\'';

echo "<hr />";

  $x = 12;
  $y = 34;
  $z = 4.25;

  $bool_1 = $x != $z;
  $bool_2 = $x <= $y;
  echo $bool_1."<br />".$bool_2;

  $bool_3 = !($x == $y);
  echo "<br />".$bool_3;

  $bool_4 = $x == $y || $z < $y; // "или"
  echo "<br />".$bool_4;

  $bool_5 = $z != $y && $x < $y; //"и" "и"
  echo "<br />".$bool_5;

  $bool_6 = $z != $x ^ $y < $z; //Взаимоисключающие переменные
  echo "<br />".$bool_6;

  $bool_7 = !($x != $y && $z < $x) || $x == $y;
  echo "<br />".$bool_7."<br />";

  echo "Hi";


echo "<hr />";

  $string = "Exampe";
  $num = 0;

  $bool_1 = $string == true; //оператор эквивалентности
  echo "$bool_1 = $string == true"."<br />";

  $bool_2 = $num == "";//оператор эквивалентности
  echo "$bool_2 = $num == \"\";"."<br />"."<hr />";

  $bool_3 = $string === true;//оператор эквивалентности и сопоставление типов данных
  echo "$bool_3 = $string === true"."<br />";

  $bool_4 = $num === "";//оператор эквивалентности и сопоставление типов данных
  echo "$bool_4 = $num === \"\";"."<br />";


echo "<hr />"; //Логические операторы
  $x = 10;
  $y = 5;

  if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15) { //оператор if самостоятельный
    echo "Ура";
  }
  else if ($x == 15 || $y != 7){//дополнительный оператор else if
    $num = 5;
    echo "Число № ".$num."<br />"."Все сработало";
  }

  else {//дополнительный оператор else
    echo "Все сработало";
  }

  $x != $y ? $string = "Да" : $string = "Нет";//ещё один оператор
  echo "<br />".$string;


echo "<hr />";
  $x = 14;

  switch ($x) {// оператор switchcase
    case "Hello" : echo "Это строковая переменная"; break;
    case 5 : echo "Эта переменная равна 5"; break;
    case 7 : echo "Эта переменная равна 7"; break;
    case 12 : echo "Эта переменная равна 12"; break;
    default : echo "Это переменная нам неизвестна"; break;
  }

  echo "<hr />";//Операторы циклов

  for ($i = 100; $i >= 80; $i -= 2) { //обязательно имеет три параметра
    if ($i % 5 == 0) continue;//оператор continue пропускает результат со зачением, выполняющим условия данного оператора if
    if($i <= 87) break;//оператор break останавливает цикл, дойдя до зачения, указанного в данном операторе if
    echo "Цикл под номером $i"."<br />";
  }

  echo "<br />";

  $x = 1;

  while ($x <= 10) {
    echo "Операция под номером $x"."<br />";
    if ($x == 7)
      for ($y = 0; $y < 5; $y += 3)
        echo "Еще одна итерация $y"."<br />";
    $x ++;
  }

  echo "<br />";

  $z = 10;

  do {// тут так же работают continue и break
    echo "Операция выполнилась только один раз";
    $z++;
    echo "<br />";

  } while ($z < 5);

  echo "<hr />";//функции PHP

  function printWords($word, $x, $y)//printWords в данном случае - это название фунцкии, на которую ссылается весь код, $word - параметр
  {
    $word = math($x, $y);
    echo $word;
  }

  function math($first, $second)
  {
    $total = $first + $second;
    return $total;
  }

  $x = 12;
  $y = 35;

  printWords ($sum, $x, $y);


  echo "<hr />";

  $array = array(12, -3.25, "String", true);//обычный массив
  echo $array[1];
  $array[1] = "String";//заменяем значение 1 в массиве
  $array[2] = 4.25;
  echo "<br />".$array[1]."<br />".$array[2];
  $array[] = "New element";
  echo "<br />".$array[4]."<hr />";

  for ($i=0; $i < count($array); $i++) {
    echo "элемент массива с индексом $i = ".$array[$i]."<br />";
  }

  $list = array("age" => 12, "name" => "Alex", "schoolboy" => true);//ассоциативный массив
  //цикл for для ассоциативных массивов не используется
  $list ["age"] = 10;
  echo "<hr />";
  $sum = 0;

  echo "<hr />".getAverage (array ("first" => 12, "second" => 45, "third" => 23, "fourth" => 55));//тут всегда должно указываться array

  function getAverage ($average) {
    foreach ($average as $key => $value) {//цикл foreach сравнивает зачение и возврещает значение по ключу
      $sum += $value;
      echo $key."<br />";
    }
    return $sum / count ($average);
  }

echo "<hr />";//двумерные массивы

  $array = array (array (12, 4.46, "String", true), array("Example"), array(45, "strong"));

  echo $array[0][2]."<br />";//выводит второй элемент в нулевом массиве

  for ($i=0; $i < count($array); $i++) {//перебираем массив первого уровня
    for ($j=0; $j < count($array[$i]); $j++) {//перебираем массив второго уровня
      echo $array[$i][$j]." | ";//выведение всего двумерного массива в виде матрицы
    }
    echo "<br />";
  }


echo "<hr />";//Области видимости переменных

  $x = 12;//глобальная переменная, видимая по всему коду
  echo "Переменная x = $x<br />";
  $x = 10;
  echo "Переменная x = $x<br />";

  function test()
  {
    $x = 0;//локальная переменная
    //$GLOBALS["x"] += 10;//$GLOBALS позволяет использовать глобальные переменные в функциях
    global $x; //также позволяет использовать глобальные переменные в функциях, объявляет их
    $x += 10;
    //echo "Переменная x = $x<br />";
  }
  test();

  function test_2()
  {
    static $id;//статическая переменная, ее значение всегда учитывается, даже за пределами функции
      $id++;
      echo $id."<br />";
  }
  for ($i=0; $i < 10; $i++) {//например, тут static $id перебирается в цикле
    test_2 ();
  }

  echo "<hr />";

  $title = "Заголовок страницы";
  require_once "header.php";//прикрепляет файл header.php в соответствующее место страницы, если имя или адрес файла указаны неверно, то браузер выдаст ошибку
  echo "Тело документа";
  include_once "footer.php";//прикрепляет файл footer.php в соответствующее место страницы, если имя или адрес файла указаны неверно, то браузер НЕ выдаст ошибку и продолжит код
  //_once включает файл только один раз
  include "page.php";

  echo "<hr />";

*/
?>
