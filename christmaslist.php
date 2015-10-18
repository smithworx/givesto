<?php

function generateGivesTo($group_list, $attempt = 0){
	$recipients = [];
	$givesto = [];
	$attempt += 1;

	foreach($group_list as $k1=>$group){
		$possible_recipients = array_merge(
								array_slice($group_list,0,$k1),
								array_slice($group_list,$k1+1)
								);

		$possible_recipients = array_diff(
			flatten($possible_recipients),
			$recipients);	

		foreach($group as $k2=>$person){
			if(empty($possible_recipients)){
				if($attempt < 10){
					return generateGivesTo($group_list, $attempt);
				} else {
					echo " - INCOMPLETE SOLUTION - ";
				}
			}
			$k = array_rand($possible_recipients);
			$givesto[$person] = $possible_recipients[$k];
			$recipients[] = $possible_recipients[$k];
			unset($possible_recipients[$k]);
		}
	}

	fancyPrint($givesto);
	return $givesto;
}

function fancyPrint($givesto){

	echo "Gift Giving List ".@date("Y")."\n";
	echo "------------------------\n";
	foreach($givesto as $giver => $recipient){
		echo strtoupper($giver)." gives to ".strtoupper($recipient)."\n";
	}
	echo "\n\n";

}

function flatten(array $array) {
    $return = array();
    array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
    return $return;
}




