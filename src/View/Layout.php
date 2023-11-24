<?php

namespace App\View;

class Layout
{
	public function show(string $title, $content, array $styles = []): void {
		?><!DOCTYPE html>
		<html lang="fr">
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="/assets/styles/css/main.css">
            <?php foreach ($styles as $style): ?>
                <link rel="stylesheet" href="/assets/styles/css/<?= $style ?>.css">
            <?php endforeach; ?>
            <script src="/assets/scripts/js/main.js" defer></script>
            <link rel="icon" href="/favicon.ico" type="image/x-icon">
			<title><?= $title ?></title>
		</head>
		<body>
            <?php require "Header.php" ?>
			<?= $content ?>
		</body>
		</html>
<?php
	}
}