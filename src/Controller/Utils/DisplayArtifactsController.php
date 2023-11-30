<?php

namespace App\Controller\Utils;

class DisplayArtifactsController
{
	public function render(array $sets, $usedArtifactsInfo): string
	{
		$finalArtifacts = [];

		$cpt = 0;
		foreach ($sets as $set) {
			foreach ($set as $artifact) {
				$finalArtifacts[$cpt][$artifact] = $usedArtifactsInfo[$artifact];
				$finalArtifacts[$cpt][$artifact]["image"] = "/assets/img/artifacts/" . $artifact . ".png";
			}
			$cpt++;
		}
		return (new \App\View\Utils\DisplayArtifacts())->show($finalArtifacts);
	}
}