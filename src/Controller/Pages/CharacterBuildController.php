<?php

namespace App\Controller\Pages;

class CharacterBuildController
{
	public function render(string $name): void
	{
		$character = (new \App\Model\CharacterModel())->getCharacter($name);
		if ($character['builds'] !== null) {
			if ($character['builds']['set'] !== null && $character['builds']['set'] !== []) {
				$usedArtifacts = (new \App\Model\ArtifactModel())->getAllUsedArtifacts($character['builds']['set']);
				$displayArtifacts = (new \App\Controller\Utils\DisplayArtifactsController())->render($character['builds']['set'], $usedArtifacts);
			} else {
				$displayArtifacts = "Pas de set d'artéfact trouvé";
			}
			if ($character['builds']['weapon'] !== null && $character['builds']['weapon'] !== []) {
				$usedWeapons = (new \App\Model\WeaponModel())->getAllUsedWeapons($character['builds']['weapon']);
				$displayWeapons = (new \App\Controller\Utils\DisplayWeaponsController())->render($character['builds']['weapon'], $usedWeapons);
			} else {
				$displayWeapons = "Pas d'arme trouvée";
			}
			(new \App\View\Layout())->show(
				(string) $character['name'],
				(new \App\View\Pages\CharacterBuild($character, $displayArtifacts, $displayWeapons))->render(),
				['/pages/characters-builds', '/utils/artifact', '/utils/weapon']);
		} else {
			(new \App\Controller\Error404Controller())->render();
		}
	}
}