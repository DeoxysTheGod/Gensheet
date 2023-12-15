<?php

namespace App\View\Utils;

class DisplayWeapons
{
	public function show(array $weapons): string {
		ob_start();
        $cpt = 1;
		?>
		<div class="weapons">
			<?php foreach ($weapons as $weapon): ?>
				<div class="weapon">
                    <p><?= $cpt; $cpt++; ?></p>
					<img src="<?= $weapon["image"] ?>" alt="<?= $weapon["name"] ?>">
                    <p><?= $weapon["name"] ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<?php
		return ob_get_clean();
	}
}