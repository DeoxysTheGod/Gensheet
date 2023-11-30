<?php

namespace App\Controller\Pages;

class CharacterBuildController
{
	public function render(string $name): void
	{
		$character = (new \App\Model\CharacterModel())->getCharacter($name);
		$usedArtifacts = (new \App\Model\ArtifactModel())->getAllUsedArtifacts($character['builds']['set']);
		$displayArtifacts = (new \App\Controller\Utils\DisplayArtifactsController())->render($character['builds']['set'], $usedArtifacts);
		(new \App\View\Layout())->show(
			(string) $character['name'],
			(new \App\View\Pages\CharacterBuild($character, $displayArtifacts))->render(),
			['/pages/characters-builds', '/utils/artifact']);
	}
}