<?php

function printsum($a, $b){
	echo "<br>$a + $b = " . ($a + $b) . "<br>";
}

$variabel1 = "this is a string";
$intNrEn = "10";
$intNrTo = 10;

if($intNrEn == $intNrTo){
	echo "I think that $variabel1<br> Variabel1 = $intNrEn
			<br> Variabel2 = \"$intNrTo\" <br>"; //Line shift = <br>	
}

echo "<br>Hello <i>world</i>. I are awesome <br>";

printsum(5, 4);

echo "<br>";

for($i = 1; $i <= 10; $i++){
	{
	echo $i;
	}
	
	if($i == 10){
		echo "<br>";
		break;
	}
	
	echo ", ";
}

echo "<br>";

$tests = array("ArrayPlats0", "ArrayPlats1", "ArrayPlats2", "ArrayPlats3");

echo "\$tests array<br>";
echo $tests[0] . "<br>";
echo $tests[1] . "<br>";
echo $tests[2] . "<br>";
echo $tests[3] . "<br>";

echo "Antall element i \$tests arrayen: " . count($tests) . "<br>";

$frukt = array("en" => "Frukt nr 1", "to" => "Frukt nr 2");

echo "<br>\$test2 array<br>";
foreach ($frukt as $item) {
	echo $item . "<br>";
}

echo "<br>Antall element i \$frukt arrayen: " . count($frukt) . "<br>";

?>