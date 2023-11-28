<?php

namespace App\Model;

class CharacterModel {
	public function getPersonnage($name) {
		$filePath = "data/characters/$name.json";
		$character = json_decode(file_get_contents($filePath), true);
		return $character;
	}
}