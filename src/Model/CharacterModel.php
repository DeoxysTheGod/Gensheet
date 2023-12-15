<?php

namespace App\Model;

class CharacterModel {
	public function getCharacter($name) {
		$filePath = "data/characters/$name.json";
		return json_decode(file_get_contents($filePath), true);
	}

	public function getAllCharacters() {
		$characters = [];
		$files = scandir("data/characters");
		foreach ($files as $file) {
			if ($file === "." || $file === "..") {
				continue;
			}
			$character = json_decode(file_get_contents("data/characters/$file"), true);
			$characters[] = $character;
			$characters[count($characters) - 1]["file-name"] = pathinfo($file, PATHINFO_FILENAME);
			$characters[count($characters) - 1]["image"] = "/assets/img/characters/" . pathinfo($file, PATHINFO_FILENAME) . ".png";
		}
		return $characters;
	}
}