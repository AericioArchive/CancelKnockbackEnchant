<?php

declare(strict_types=1);

namespace Aericio\CancelKnockbackEnchant;

use pocketmine\item\enchantment\Enchantment;
use pocketmine\plugin\PluginBase;

class CancelKnockbackEnchant extends PluginBase
{
    public function onEnable(): void
    {
        $this->saveDefaultConfig();
        $config = $this->getConfig()->get('disable');
        if ($this->getConfig()->get('disable')) {
            Enchantment::registerEnchantment(new KnockbackEnchantment(Enchantment::KNOCKBACK, "%enchantment.knockback", Enchantment::RARITY_MYTHIC, Enchantment::SLOT_SWORD, Enchantment::SLOT_NONE, 2));
            $this->getLogger()->info('Knockback was disabled.');
        } else {
            $this->getLogger()->info('Knockback was not disabled; configuration value is ' . $config);
        }
    }
}
