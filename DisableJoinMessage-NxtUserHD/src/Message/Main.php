<?php

namespace Message;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable()
    {
        $this->getLogger()->info("enabled.");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event) {
        $event->setJoinMessage(" ");
    }

    public function onQuit(PlayerQuitEvent $event) {
        $event->setQuitMessage(" ");
    }

    public function onDisable()
    {
        $this->getLogger()->info("disabled.");
    }

}
