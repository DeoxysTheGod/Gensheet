<?php

namespace App\Controller;

class HomepageController
{
	public function render(): void {
		Controller::render("Homepage", "Homepage.php");
	}
}