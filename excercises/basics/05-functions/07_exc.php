<?php

/*

Imagine you own a gun store. Only certain guns can be purchased with license types. Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array. Each gun has license letter, price & name. Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

*/

/*    LICENSES 	*/

$allLicenses = ['P', 'S']; //P = pistole, S = shotgun


/*    PERSONS	*/

$person[] = new stdClass();
$person[0]->name = 'John Wick';
$person[0]->licenses = [$allLicenses[0]]; //Pistole license
$person[0]->money = 176.56;

$person[] = new stdClass();
$person[1]->name = 'Jackie Chan';
$person[1]->licenses = [];
$person[1]->money = 321.78;

/*	 GUNS 	*/

$guns[] = new stdClass();
$guns[0]->name = 'Pistol';
$guns[0]->license = $allLicenses[0]; //Pistole license
$guns[0]->cost = 134.89;

$guns[] = new stdClass();
$guns[1]->name = 'Shotgun';
$guns[1]->license = $allLicenses[1]; //Shotgun license
$guns[1]->cost = 246.12;


/*	 WEAPON SHOP	*/

foreach ($person as $eachPerson) {
	$licenseCount = count($eachPerson->licenses);
	if ($licenseCount <= 0) {
		echo "Sorry {$eachPerson->name}, don't have any gun licenses";
	} else {
		for ($i = 0; $i < count($eachPerson->licenses); $i++) { 
			foreach ($guns as $eachGun) {
				if($eachPerson->licenses[$i] === $eachGun->license && $eachPerson->money >= $eachGun->cost) {
					echo "{$eachPerson->name} have {$eachGun->name} gun license, and can buy it by {$eachGun->cost}$." . PHP_EOL;
				} elseif ($eachPerson->money < $eachGun->cost) {
					echo "{$eachPerson->name} have {$eachGun->name} gun license, but can't buy it by {$eachGun->cost}$, because he have only {$eachPerson->money}$." . PHP_EOL;
				}
			}
		}
	}
}