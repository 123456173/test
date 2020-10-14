<!DOCTYPE html>
<html>
<body>
<?php 
// single line comment
/* multiple line comment*/
$food="Pizza";
$place="Restaurent";
$x=5+6;
$y=5;//global scope
$z=6;
$color="black";
//variables with global scope
//functions
function sampleOne($color) {
  echo "$color black.<br>";
}
sampleOne("Red");
sampleOne("Blue");
sampleOne("Black");
sampleOne("Green");
sampleOne("Purple");

/*declare(strict_types=1);
function countNumbers(int $j, int $v)
{
	return $j+$v;
}
echo countNumbers(10,20);
function countNum(float $j, float $v) : 
int {
  return (int)($j + $v);
}
echo countNum(5.5, 10.3); 

float {
  return (int)($j + $v);
}
echo countNum(5.5, 10.3); 
*/

function sub_five(&$value) {
  $value -= 5;
}
$num = 2;
sub_five($num);
echo $num;

function mySum(){
	static $s=10;//static keyword
	echo $s ."<br>";
	$s++;
	$a=100;//local scope
	echo "the variable in inside function is:" .$a ."<br>";
	global $y, $z;//global keyword
	$y=$y+$z;
}
mySum();
echo "<br>";
mySum();
echo "<br>";
mySum();
echo "<br>";
echo $x ."<br>";
echo $y ."<br>";
echo "the variable in outside function y is:" .$y ."<br>";
echo $sum=$x+$y+$z ."<br>";
echo "i like: $color" ."<br>";
echo "the sum is:" .$x . "and i like" .$color ."<br>";
echo "This ", "line ", "was ", "made ", "with multiple parameters." ."<br>";
print "the sum is:" .$x ."<br>"; 
echo "my fav food is:" .$food ."<br>";
echo "my fav place:" .$place ."<br>";

//object
class house{
	function house(){
		$this->color="white";
	}
}
$myhouse=new house(); //object
echo $myhouse->color ."<br>";

//array
$fruits=array("orange","apple","mango");
echo "i like" .$fruits[1] ."<br>";
echo count($fruits) ."<br>";
$arrlength=count($fruits);
for($s=0;$s< $arrlength; $s++)
{
	echo $fruits[$s];
	echo "<br>";
}
$dress=array("jean"=>"20","chudi"=>"30","shirt"=>"40");//key and values
foreach($dress as $x=>$val) 
{
  echo "$x = $val<br>";
}
$fruits=array(array("orange",22,32),array("apple",30,25));
echo $fruits[0][0].": rate is:" .$fruits[0][1].", sold:" .$fruits[0][2].".<br>";
$fruits=array("orange","apple","mango");
sort($fruits);
$flength=count($fruits);
for($g=0;$g<$flength;$g++)
{
	echo $fruits[$g];
	echo "<br>";
}
rsort($fruits);
$flength=count($fruits);
for($g=0;$g<$flength;$g++)
{
	echo $fruits[$g];
	echo "<br>";
}
/*asort($fruits);
ksort($fruits);
arsort($fruits);
krsort($fruits);*/

//strings
$o="my name is kaviya";
echo strlen("$o") ."<br>";
echo str_word_count($o) ."<br>";
echo strrev($o) ."<br>";
echo strpos("$o", "my") ."<br>";
echo str_replace("kaviya", "rabbit", $o) ."<br>";
echo addcslashes("my", $o) ."<br>";
echo bin2hex($o) ."<br>";

//numbers
$w=25.32;
$q=45.4e5;
$c="i like cats";
var_dump(is_int($y));
var_dump (is_integer($w));
var_dump(is_float($x));
var_dump(is_numeric($x));
var_dump (is_numeric($c));
var_dump(is_infinite($q));
$e=acos(7);
var_dump($e);
$int_cast=(int)$w;//float to int
echo $int_cast;
$t="456987";
$string_cast=(int)$t;//str to int
echo $string_cast ."<br>";

//math
echo (pi()) ."<br>";
echo (max(12,10,25,14)) ."<br>";
echo(min(100,25,456,8,754)) ."<br>";
echo (sqrt(26598)) ."<br>";
echo(abs(8597)) ."<br>";
echo(round(2564.0312)) ."<br>";
echo (rand()) ."<br>";
echo (rand(986,569)) ."<br>";
echo (acosh(65)) ."<br>";

//constants
define("Home","I like my home");//not a case sen
function myHome(){
	echo Home ."<br>";//global 
}
myHome();
echo Home ."<br>";
define("COLOR", "I like red", true);//case sen
echo color ."<br>";
define("animals",["dog","cat","cow"]);
echo animals[0] ."<br>";

//operators
echo $sum=$x+$y ."<br>";
echo $sub=$x-$y ."<br>";
echo $mul=$x*$y ."<br>";
echo $div=$x/$y ."<br>";
echo $mod=$x%$y ."<br>";
echo $exp=$x**$y ."<br>";
$s=80;
$s+=20;
echo $s++ ."<br>";
$s-=20;
echo $s ."<br>";

//conditional statements
$bell=20;
$sofi=30;
if($bell<$sofi)
{
	echo "bell is less in height";
}
elseif($sofi>$bell)
{
	echo "sofi is greater";
}
else{
	echo "no one";
}

$n=date("H");
if($n<"20") 
{
	echo "Exam started";
} 
elseif ($t<"30") 
{
	echo "exam ended";
} 
else 
{
	echo "no exam";
}
$car="bmw";

switch($car){
	case "ford":
	echo "my fav car is ford";
	break;
	case "bmw":
	echo "my fav car is bmw";
	break;
	default:
	echo "none";
	break;
}

$l=10;
while($l<=20)
{
	echo " the fav number is: $l .<br>";
 	$l++;
}

do{
	echo "the favourite number is: $l .<br>";
	$l++;
}while($l<=20);

for ($i=0;$i<=20;$i++) {
  echo "The number is: $i <br>";
} 

$dress=array("jean","chudi","shirt");
foreach($dress as $dresses)
{
	echo "$dresses <br>";
}
$dress=array("jean"=>"20","chudi"=>"30","shirt"=>"40");//key and values
foreach($dress as $x=>$val) 
{
  echo "$x = $val<br>";
}
?>
</body>
</html>