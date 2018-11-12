<?php

declare(strict_types=1);

namespace Aericio\CancelKnockbackEnchant;

use pocketmine\entity\Entity;

class KnockbackEnchantment extends \pocketmine\item\enchantment\KnockbackEnchantment
{
    /**
     * @param Entity $attacker
     * @param Entity $victim
     * @param int    $enchantmentLevel
     */
    public function onPostAttack(Entity $attacker, Entity $victim, int $enchantmentLevel): void{
        // do nothing
    }
}