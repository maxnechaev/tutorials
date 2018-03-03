<?php
  /*$x = 10;
  if (isset ($x)) echo "Переменная существует";
  else echo "Переменная не существует";
  echo "<br />";
  unset ($x);//удаляем всю переменную вместе со значением
  if (isset ($x)) echo "Переменная существует";
  else echo "Переменная не существует";
  echo "<br />";

echo "<hr />";

//проверка типов данных с помощью предустановленнных стандартных функция PHP
  $x = "10";
  $bool = false;
  $null;

  echo "x is numeric - ".is_numeric($x)."<br />";//проверяет, является ли переменная числом, причем, даже распознает числа в строковых значениях
  echo "x is integer - ".is_integer($x)."<br />";//проверяет, является ли значение целочисленным. Для чисел, записанных в строку выдаст false
  echo "x is double - ".is_double($x)."<br />";//проверяет переменную на тип float
  echo "x is string - ".is_string($x)."<br />";//проверяет, являается ли значение строковым
  echo "bool is boolean - ".is_bool($bool)."<br />";//проверяет, являается ли значение булиевой переменной
  echo "bool is scalar - ".is_scalar($bool)."<br />";//проверяет, является ли переменная простой (true) или сложной, как, например, массив (false)
  echo "null is boolean - ".is_null($null)."<br />";//проверяет, задано ли значение у переменной. Задано - false, не задано - true
  echo "x is array - ".is_array($x)."<br />";//проверяет, является липеременная массивом
  echo "Type of x - ".gettype($x)."<br />";//Позволяет узнать тип переменной

echo "<hr />";

//Математические функции

  echo M_PI."<br />";
  echo M_E."<br />";
  $x = -15;
  echo abs ($x)."<br />";//модуль переменной x
  $y = 49.234235235;
  echo round ($y, 2)."<br />";//округляет переменную к ближнему целочисленному значению, второй параметр указывает на количество цифр после запятой
  echo ceil ($y)."<br />";//округляет переменную к большему целочисленному значению
  echo floor ($y)."<br />";//округляет переменную к меньшему целочисленному значению

  echo mt_rand (1, 20)."<br />";//генерирует рандомное число в заданных параметрах. Если их не задавать, то в принципе любое число
  echo min (12, 23, -2, -5, -19, 0, 2, -3)."<br />";//выбирает минимальное значение из заданных параметров
  echo max (12, 23, -2, -5, -19, 0, 2, -3)."<br />";//выбирает максимальное значение из заданных параметров

  $z = 1;
  echo sin($z)."<br />";//синус
  echo cos($z)."<br />";//косинус
  echo tan($z)."<br />";//тангенс
  echo 1 / tan($z)."<br />";//котангенс
  echo asin($z)."<br />";//арксинус
  echo acos($z)."<br />";//арккосинус
  echo atan($z)."<br />";//арктангенс
  echo 1 / atan($z)."<br />";//арккотангенс

echo "<hr />";
//Строковые функции
  $string = "This is example";

  echo strlen($string)."<br />";// выдает количество символов в строке. включая пробелы
  echo strpos($string, "exa")."<br />";//ищет заданные символы на совпадение в строке и указывает их позицию

  if (strpos ($string, "T") === false) echo "Т не найдено";
  else echo "Т найдено";

  echo "<br />".substr($string, 3, -5)."<br />";// обрезает строку с заданного символа. Обязательны минимум два параметра - переменная и номер символа
  echo str_replace(array("This", "is", "example"), array("These", "are", "examples"), $string)."<br />"; //заменяет символы в строке или массиве

  $str = "<b>ХАХА, жирный шрифт</b>";
  echo htmlspecialchars($str)."<br />";//преобразует введенные пользователем теги в спецсимволы, то есть введеный пользователем код не будет исполняться, но будет отображатсья

  echo "<br />".strtolower($string);//переводит все в нижний регистр
  echo "<br />".strtoupper($string)."<br />";//переводит все в верхний регистр

  echo md5("123")."<br />"; //шифрует данные, в основном, пароли

  echo trim ("   sdfs     string   ss    ");//удаляет лишние пробелы

echo "<hr />";


//Функции для работы с массивами

  $array = array (12, 5, 45, 37, 65);
  echo count($array)."<br />";
  sort ($array);//сортировка по возрастанию
  print_r ($array);
  echo "<br />";
  rsort ($array);//сортировка по убыванию
  print_r ($array);
  echo "<br />";

  $arraylist = array('5' => 123, '2' => "Happy Meal", '15' => true);
  asort ($arraylist);//сортировка по возрастанию индексов ключей
  print_r($arraylist);
  echo "<br />";
  arsort ($arraylist);//сортировка по убыванию индексов ключей
  print_r($arraylist);
  echo "<br />";

  ksort ($arraylist);//сортировка по возрастанию ключей
  print_r($arraylist);
  echo "<br />";
  krsort ($arraylist);//сортировка по убыванию ключей
  print_r($arraylist);
  echo "<br />";

  echo "<hr />";

  shuffle ($array);
  print_r ($array);
  echo "<br />";

  echo in_array(12, $array);//проверяем массив на наличие элемента
  echo "<br />";

  $arr_1 = array(10, 2);
  $arr_2 = array(4, 5, 7);

  $arr_3 = array_merge($arr_1, $arr_2);//объединение или сложение массивов
  print_r ($arr_3);
  echo "<br />";

  $arrDone = array(1, 2, 3, 4, 5, 6, 7);
  $arrDone = array_slice($arrDone, 1, 5);//обрезает массив со второго элемента и выводит +5 последующих
  print_r ($arrDone);
  echo "<br />";

echo "<hr />";

//Функции для работы с датами
  $start = microtime(true);
  echo time ()."<br />";//количество секунд с 01-01-1970

  echo microtime (true)."<br />";//количество секунд с тысячными долями с 01-01-1970
  echo "Время работы скрипта: ".(microtime(true) - $start)." секунд<br />";//помогает выяснить скорость обработки скрипта

  $time = mktime (12, 35, 23, 12, 7, 2007);
  echo date ("Y-m-d H:i:s", $time)."<br />";;

  $array = getdate($time);
  print_r($array);
  echo "<br />";

  echo checkdate (2, 28, 2019);//проверяет, есть ли такая дата

echo "<hr />";

//Функции для работы с файлами

  $file = fopen ("a.txt", "a+t");//r - открывает файл для чтения,
                                //r+ - открывает файл и позволяет записывать в него. При этом новые символы перекрывают существующие.
                                //w, w+ - открывает файл только для записи, обрезает файл до нулеой длины. позволяет создавать несуществующие файлы
                                //a, a+ - помещает указатель в конец файла, позволяет создавать несуществующие файлы
                                //a+t - позволяет использовать табуляцию и использование новых строк, a+b не позволяет
  fwrite($file, "Example\nText\nNext");
  fclose($file);

    $file = fopen ("a.txt", "r+t");
    while (!feof($file)){//функция в этом цикле проверяет, насколько мы уже прочитали файл
      echo fread ($file, 1)."<br />";
    }
    fseek ($file, 0);//устанавливает курсор в заданную позицию
    echo fread ($file, 1);

    fclose ($file);
echo "<hr />";

  file_put_contents("c.txt", "TEST test Test");//одной командой создает файл
  echo file_get_contents("c.txt")."<br />";//одной командой выводит файл
  echo file_exists("a.txt")."<br />";//проверяет, существует ли файл
  echo filesize ("c.txt")."<br />";//выдает объем файла в байтах

  rename ("c.txt", "b.txt");//переименовывает файл
  unlink ("b.txt");//удаляет файл

echo "<hr />";

//Права пользователей

            Owner     Group     Users
----------------------------------------
read          1         1         1     | 4
write         1         0         0     | 2
execute       1         0         0     | 1
----------------------------------------
              7         4         4

  echo __FILE__;//показывает полный путь файла
  echo "<br />";
  echo fileperms(__FILE__);
  echo "<br />";
  chmod(__FILE__, 0777);//изменение прав. "0" в начале обязателен

echo "<hr />";
//PHP info
  echo $_SERVER["REMOTE_ADDR"];//выводит IP ползьзователя, все глобальные переменные можно посмотреть в phpinfo

  phpinfo();//можно узнать версию и конфигурацию PHP

echo "<hr />";
//Редирект
  header ("Location:http://google.com");
  exit;//позволяет не выполнять дальнейгий код

echo "<hr />";
//отправка e-mail'ов на почту

  $message = "Это самое простое сообщение в мире";
  $to = "4max.nechaev@gmail.com";
  $from = "4max.nechaev@gmail.com";
  $subject = "Тема сообщения";
  $subject = "=?utf-8?B?".base64_encode($subject)."?=";
  $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";//позволяет отвечать на сообщения
  mail ($to, $subject, $message, $headers);

echo "<hr />";

  //Cookie - хранятся в браузере
  //setcookie ("num", 10, time() + 10);//устанавливаем cookie для параметра num, третий параметр указывает на продолжительность жисни cookie. Если не указывать, то оно будет сохраняться постоянно
  //if (isset ($_COOKIE["num"]))
    //echo "Куки установлены";
  //else
    //echo "Куки не установлены";
  $num = (isset ($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
  $num++;
  setcookie ("num", $num, time () + 4);
  echo "Пользователь обновил страничку $num раз";

  echo "<hr />";

    //Сессии - хранятся на сервере
  session_start();//всегда записывается вначале кода
  $num = (isset ($_SESSION["num"])) ? $_SESSION["num"] : 0;//сессия удаляется через 15 минут
  $num++;
  $_SESSION["num"] = $num;
  echo "Пользователь обновил страничку $num раз";

  session_destroy ();//удаляяет сессию
echo "<hr />";
*/

?>
