<?php

namespace App\View\Pages;

class Characters
{
	public function render(array $characters): string
	{
		ob_start();?>
<div class="characters">
    <h1>Personnage</h1>
    <ul>
    <?php foreach ($characters as $character): ?>
        <li class="character">
            <a class="app-link character-link" href="/character/<?= $character["file-name"] ?>">
                <img class="character-img" src="<?= $character["image"] ?>" alt="(image de <?= $character["name"] ?>)">
                <?= $character["name"] ?>
            </a>
        </li>
    <?php endforeach; ?>

    </ul>
</div>
		<?php
		return ob_get_clean();
	}
}