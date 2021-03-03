<?php
	$weaponList[0] = ['name' =>'arrow', 'id' => 'a'];
	$weaponList[1] = ['name' =>'blade', 'id' => 'b'];
	$weaponList[2] = ['name' =>'cannon', 'id' => 'c'];
	$weaponList[3] = ['name' =>'dagger', 'id' => 'd'];

	foreach($weaponList as $wp){
		echo 'name '.$wp['name'];
		echo '<br>';
		echo 'id '.$wp['id'];
		echo '<br><br>';
	}

	//output
	//name arrow
	//id a
	// 
	//name blade
	//id b
	// 
	//name cannon
	//id c
	// 
	//name dagger
	//id d
?>