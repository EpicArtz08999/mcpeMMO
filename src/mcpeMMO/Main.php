<?php

namespace mcpeMMO;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use mcpeMMO\api\exceptions\InvalidPlayerException;
use mcpeMMO\api\exceptions\InvalidSkillException;
use mcpeMMO\api\exceptions\InvalidXPGainReasonException;
use mcpeMMO\api\AbilityAPI;
use mcpeMMO\api\ChatAPI;
use mcpeMMO\api\ExperienceAPI;
use mcpeMMO\api\PartyAPI;
use mcpeMMO\chat\AdminChatManager; 
use mcpeMMO\chat\ChatManager;
use mcpeMMO\chat\ChatManagerFactory;
use mcpeMMO\chat\PartyChatManager;
use mcpeMMO\database\DatabaseManager;
use mcpeMMO\database\DatabaseManagerFactory; 
use mcpeMMO\database\FlatfileDatabaseManager;
use mcpeMMO\database\SQLDatabaseManager;
use mcpeMMO\listeners\BlockListener;
use mcpeMMO\listeners\EntityListener;
use mcpeMMO\listeners\InventoryListener;
use mcpeMMO\listeners\PlayerListener;
use mcpeMMO\listeners\SelfListener;
use mcpeMMO\listeners\WorldListener;
use mcpeMMO\metrics\MetricsManager;
use mcpeMMO\party\PartyManager;
use mcpeMMO\party\ShareHandler;
use mcpeMMO\skills\SkillManager; /* in the Skill Manager links all the other skills */

class Main extends PluginBase implements Listener
{
    public function onEnable(){
        $this->getLogger()->info("mcpeMMO has been enabled.");
    }

    
    public function onDisable(){
        $this->getLogger()->info("McpeMMo has been disabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
	switch($command->getName()){ 
		case "mcpemmo":
			if ($sender instanceof Player){
		            	$sender->sendMessage("This plugin is still in the works");
		            	return true;
		            	break;
			}
	        	else{
	        		$sender->sendMessage("Please run this command in-game.");
	        		return true;
	        		break;
	        	}
		default:
		  	return false;
	}
    }
}
