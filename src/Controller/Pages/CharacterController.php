<?php

namespace App\Controller\Pages;

class CharacterController
{
	public function render(): void
	{
		$characters = (new \App\Model\CharacterModel())->getAllCharacters();
		(new \App\View\Layout())->show(
			"Characters", (new \App\View\Pages\Characters())->render($characters), ['/pages/characters']);
	}
}