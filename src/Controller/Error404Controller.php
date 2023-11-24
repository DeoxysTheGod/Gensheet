<?php

namespace App\Controller;

class Error404Controller
{
	public function render(): void {
		Controller::render("Error 404", "Error404.php", ["error"]);
	}
}