<?php

namespace App\Controller\Utils;

class DisplayWeaponsController
{
	public function render(array $weapons, $usedWeaponsInfo): string
	{
		$finalWeapons = [];

		foreach ($weapons as $weapon) {

			$finalWeapons[$weapon] = $usedWeaponsInfo[$weapon];
			$finalWeapons[$weapon]["image"] = "/assets/img/weapons/" . $weapon . ".png";
		}
		return (new \App\View\Utils\DisplayWeapons())->show($finalWeapons);
	}
}