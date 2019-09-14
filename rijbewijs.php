<?php
echo "Hoe oud ben je?\r\n";
$leeftijd = readline();
$minleeftijd = 16.5;
if ($leeftijd < $minleeftijd) {
	echo "Helaas, je mag nog niet beginnen met rijlessen";
} else {
	echo "Je mag beginnen met rijlessen!";
}
?>