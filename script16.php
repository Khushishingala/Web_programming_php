<?php

$line="hello world";

$vowelcount=0;

for ($i=0;$i<strlen($line);$i++){

	
	if(
	strtolower($line[$i])=='a'||
	strtolower($line[$i])=='e'||
	strtolower($line[$i])=='i'||
	strtolower($line[$i])=='o'||
	strtolower(($line[$i]))=='u'
	)
	{
		
		$vowelcount++;
	}
}
echo "the number of vowels in the sentence is:$vowelcount";

?>
	
