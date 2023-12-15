<?php

namespace App\View\Pages;

include_once "src/GlobalVariables.php";

class CharacterBuild
{

	private array $character;
	private string $artifacts;
	private string $weapons;

	public function __construct(array $character, string $artifacts, string $weapons)
	{
		$this->character = $character;
		$this->artifacts = $artifacts;
		$this->weapons = $weapons;
	}

	public function render(): string
	{
		ob_start();
		?>
        <div class="characters">
        <h1><?= $this->character["name"] ?></h1>
        <div class="build">
		<?php if ($this->character["builds"] !== null): ?>
        <img src="<?= ASSETS_IMG_CHARACTERS . $this->character['id'] . '.png' ?>" alt="<?= $this->character["name"] ?>">
        <div class="artifacts-set">
            <h2>Artéfacts</h2>
			<?php echo $this->artifacts; ?>
        </div>
        <div class="weapons-build">
            <h2>Armes</h2>
			<?php echo $this->weapons; ?>
        </div>
        <?php else: ?>
            <h2>Build en cours de réalisation</h2>
        <?php endif; ?>
        </div>
        </div>
		<?php
		return ob_get_clean();
	}
}