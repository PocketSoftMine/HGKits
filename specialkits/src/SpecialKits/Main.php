<?php

namespace SpecialKits;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\entity\Effect;
use pocketmine\item\Item;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemHeldEvent;

use pocketmine\utils\TextFormat as color;

class Main extends PluginBase implements Listener{
     public function onEnable(){
         
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    
  }
     public function onCommand(CommandSender $sender, Command $command, $label, array $args){
          switch($command->getName()){
         case "endermage":
             $sender->getInventory()->addItem(Item::get(90, 0, 1));
			 $sender->sendMessage(color::BLUE. "Você pegou o kit Endermage");
		}
		return true;
	 }
}

