<?php

namespace App\View\Utils;

include "src/GlobalVariables.php";

class DisplayArtifacts
{
	public function show(array $sets): string {
		ob_start();
        $cpt = 1?>
<?php foreach ($sets as $set): ?>
	<div class="set">
        <p>set <?= $cpt; $cpt++; ?></p>
		<?php foreach ($set as $artifact): ?>
			<div class="artifact tooltip-container">
				<img class="artifact-img tooltip-trigger" src="<?= $artifact["image"] ?>" alt="(image de <?= $artifact["name"] ?>)">
                <div class="tooltip">
                    <h2 class="tooltip-title"><?= $artifact["name"] ?></h2>
                    <?php if ($artifact["dj-image"] !== null): ?>
                    <img class="tooltip-img"
                         src="<?= djImage . $artifact["dj-image"] . '.png' ?>" alt="(image du donjon de <?= $artifact["name"] ?>)">
                    <?php else: ?>
                    <p>Cette artéfact n'est disponible qu'en faisant les boss du monde</p>
					<?php endif; ?>

                </div>
            </div>
		<?php endforeach; ?>
	</div>
<?php endforeach; ?>
<?php
		return ob_get_clean();
	}
}