<?php

namespace test;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\entity\Effect;

class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("PLUGIN HAS BEEN ENABLED");
  }
 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
  switch($cmd->getName()){
   case test:
   $effect = Effect::getEffect(1);
   $effect->setAmplifier(2);
   $effect->setDuration(10000000);
   $effect->setVisable(true);
   $sender->addEffect($effect);
  }
 }
}
