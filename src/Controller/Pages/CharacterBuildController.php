<?php

namespace App\Controller;

class CharacterBuildController
{
	public function render(string $name): void
	{
		$character = (new \App\Model\CharacterModel())->getCharacter($name);
		$artifacts = (new \App\Model\ArtifactModel())->getAllUsedArtifacts($character['builds']['set']);
		(new \App\View\Layout())->show(
			(string) $character['name'], (new \App\View\Pages\CharacterBuild($character, ["ok"]))->render(), ['character-build']);
	}
}