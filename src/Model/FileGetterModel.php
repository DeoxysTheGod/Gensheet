<?php

namespace App\Model;

class FileGetterModel
{
	public static function getJsonWeaponsFile($weapons): array {
		// récupère les fichiers correspondants aux armes demandées
		$files = scandir("data/weapons");
		$files = array_diff($files, [".", ".."]);
		$files = array_map(function ($file) {
			return pathinfo($file, PATHINFO_FILENAME);
		}, $files);
		return array_intersect($files, $weapons);
	}

	public static function getJsonArtifactsFile($sets): array {
		// lève les doublons pour charger les fichiers une seule fois
		$filteredSets = [];
		foreach ($sets as $set) {
			foreach ($set as $artifact) {
				if (in_array($artifact, $filteredSets)) {
					continue;
				}
				$filteredSets[] = $artifact;
			}
		}
		// récupère les fichiers correspondants aux sets demandés
		$files = scandir("data/artifacts");
		$files = array_diff($files, [".", ".."]);
		$files = array_map(function ($file) {
			return pathinfo($file, PATHINFO_FILENAME);
		}, $files);
		return array_intersect($files, $filteredSets);
	}
}