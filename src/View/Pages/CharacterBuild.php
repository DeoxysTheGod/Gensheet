<?php

namespace App\View\Pages;

class CharacterBuild {

    private array $character;
    private string $artifacts;
    private string $weapons;

    public function __construct(array $character, string $artifacts, string $weapons) {
        $this->character = $character;
        $this->artifacts = $artifacts;
        $this->weapons = $weapons;
    }

    public function render(): string {
        ob_start();
        ?>
        <div class="characters">
            <h1><?= $this->character["name"] ?></h1>
            <div class="build">
                <div class="artifacts-set">
                    <h1>Artéfacts</h1>
                    <?php echo $this->artifacts; ?>
                </div>
                <div class="weapons-build">
                    <h1>Armes</h1>
                    <?php echo $this->weapons; ?>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}