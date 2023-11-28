<?php

namespace App\View\Pages;

class CharacterBuild {
    public function render(array $character): string {
        ob_start();
        ?>
        <h1><?= $character["name"] ?></h1>
        <p><?= $character["rarity"] ?></p>
        <?php
        return ob_get_clean();
    }
}