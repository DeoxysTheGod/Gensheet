<?php

namespace App\Controller;

class CharacterBuildController
{
	public function render(string $name): void
	{
		$character = (new \App\Model\CharacterModel())->getPersonnage($name);
		(new \App\View\Layout())->show(
			(string) $character['name'], (new \App\View\Pages\CharacterBuild())->render($character));
	}
}