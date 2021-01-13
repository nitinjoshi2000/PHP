<!-- <?php

$num = 2;
do{
	$num +=2;
	echo $num, "\n";
}  while ($num < 12); 

?> -->

<?php

$num =2;

while($num != 2){

	echo "In case of while the code is skipped";
	echo $num, "\n";
}

do{
	$num++;
	echo "The do.... while code is executed atleast once";
} while ($num == 2);

?>