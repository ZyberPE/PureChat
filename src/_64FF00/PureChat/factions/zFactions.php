<?php

declare(strict_types=1);

namespace _64FF00\PureChat\factions;

use pocketmine\player\Player;

class zFactions implements FactionsInterface{

    public function getPlayerFaction(Player $player) : string{
        $plugin = $player->getServer()->getPluginManager()->getPlugin("zFactions");

        if($plugin === null){
            return "";
        }

        $faction = $plugin->getFactionManager()->getPlayerFaction($player);

        if($faction === null){
            return "";
        }

        return $faction->getName();
    }

    public function getPlayerRank(Player $player) : string{
        return "";
    }
}
