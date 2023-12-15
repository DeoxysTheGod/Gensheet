<?php

namespace App\Model;

class WeaponModel
{
	public function getWeapon($name): mixed
	{
		$filePath = "data/weapons/$name.json";
		return json_decode(file_get_contents($filePath), true);
	}

	public function getAllUsedWeapons(array $weapons): array
	{
		$usedWeapons = [];
		$files = FileGetterModel::getJsonWeaponsFile($weapons);
		foreach ($files as $file) {
			$usedWeapons[$file] = $this->getWeapon($file);
		}
		return $usedWeapons;
	}
}