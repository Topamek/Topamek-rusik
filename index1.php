<?php
//Типы данных
$bool = true;
$bool2 = false;
$int =0;
$int2 =1;

var_dump(PHP_INT_MAX);
var_dump(9223372036854775808);

var_dump($bool);
var_dump($bool2);
var_dump($int, $int2);

var_dump((int)"10");
var_dump((int)"10hello");
var_dump((int)"hello10");

var_dump("10" + 20);
// var_dump("10hello" + 20);
// var_dump("hello10" + 20);

var_dump(1.234);
var_dump((float)1234);

var_dump((0.1 * 10 + 0.2 * 10) / 10);


echo " <p> Hello 1 </p> \n";
echo " <p> Hello 2 </p>";
echo PHP_EOL;
echo " <p> Hello 3 </p>";

$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus temporibus, laborum id doloribus aliquid nulla hic iste voluptatem itaque laboriosam autem atque, molestias illo, dolore consequatur non animi aut quae!";

$str2 = <<<HEREDOC
<div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci atque sint error nam et inventore! Laudantium, natus. Odit laboriosam excepturi doloremque accusantium maxime, optio possimus praesentium qui commodi ratione nam.

</div>
HEREDOC;
echo $str2;
?>