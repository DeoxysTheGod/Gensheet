<?php

namespace App\Model;

class ArtifactModel
{
	public function getArtifact($set): mixed
	{
		$filePath = "data/artifacts/$set.json";
		return json_decode(file_get_contents($filePath), true);
	}

	public function getAllUsedArtifacts(array $sets): array
	{
		$artifacts = [];
		$files = FileGetterModel::getJsonArtifactsFile($sets);
		foreach ($files as $file) {
			$artifacts[$file] = $this->getArtifact($file);
		}
		return $artifacts;
	}
}