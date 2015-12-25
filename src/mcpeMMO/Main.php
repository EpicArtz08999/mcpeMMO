<?php

namespace MCPEMMO;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use MCPEMMO\api\exceptions\InvalidPlayerException;
use MCPEMMO\api\exceptions\InvalidSkillException;
use MCPEMMO\api\exceptions\InvalidXPGainReasonException;
use MCPEMMO\api\AbilityAPI;
use MCPEMMO\api\ChatAPI;
use MCPEMMO\api\ExperienceAPI;
use MCPEMMO\api\PartyAPI;
use MCPEMMO\chat\AdminChatManager; 
use MCPEMMO\chat\ChatManager;
use MCPEMMO\chat\ChatManagerFactory;
use MCPEMMO\chat\PartyChatManager;
use MCPEMMO\database\DatabaseManager;
use MCPEMMO\database\DatabaseManagerFactory; 
use MCPEMMO\database\FlatfileDatabaseManager;
use MCPEMMO\database\SQLDatabaseManager;
use MCPEMMO\listeners\BlockListener;
use MCPEMMO\listeners\EntityListener;
use MCPEMMO\listeners\InventoryListener;
use MCPEMMO\listeners\PlayerListener;
use MCPEMMO\listeners\SelfListener;
use MCPEMMO\listeners\WorldListener;
use MCPEMMO\metrics\MetricsManager;
use MCPEMMO\party\PartyManager;
use MCPEMMO\party\ShareHandler;
use MCPEMMO\skills\SkillManager; /* in the Skill Manager links all the other skills */

class Main extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info("MCPEMMO has been enabled.");
    }

    
    public function onDisable(){
        $this->getLogger()->info("MCPEMMO has been disabled.");
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
