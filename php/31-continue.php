<?php
	
echo "<pre>
for(\$i=0; \$i<10; \$i++;){
	if(\$i == 5)
		continue;
	echo \$i;
	if(\$i != 10)
		echo ',';
}<pre><br>";
		

	for($i=0; $i<10; $i++){
		if($i == 5)
			continue;
		if($i != 9)
			echo $i.',';
		else
			echo $i;
}

?>