<?php

namespace SpecialKits\Loader;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase{
  public function onEnable(){
    
		$this->saveDefaultConfig();
    
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info(color::YELLOW. "HGKITS-SpecialKits Ligado!");
  }
}
