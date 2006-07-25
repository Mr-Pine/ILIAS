<?php
$BEAUT_PATH = realpath(".")."/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_escript extends HFile{
   function HFile_escript(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// EScript 088
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("case", "else", "elseif", "enum", "for", "foreach", "function", "if", "program", "while");
$this->unindent          	= array("else", "elseif", "endif", "endfunction", "endprogram", "endwhile", "endcase", "endenum", "endfor", "endforeach", "next");

// String characters and delimiters

$this->stringchars       	= array("\"", "'");
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", ".", "?", "	");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("//");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"array" => "1", 
			"const" => "1", 
			"dictionary" => "1", 
			"endprogram" => "1", 
			"endfunction" => "1", 
			"function" => "1", 
			"global" => "1", 
			"local" => "1", 
			"program" => "1", 
			"var" => "1", 
			"!" => "2", 
			";" => "2", 
			":" => "2", 
			"=" => "2", 
			"+" => "2", 
			"-" => "2", 
			"//" => "2", 
			"/" => "2", 
			"*" => "2", 
			"<" => "2", 
			">" => "2", 
			"." => "2", 
			"(" => "2", 
			")" => "2", 
			"[" => "2", 
			"]" => "2", 
			"and" => "2", 
			"case" => "2", 
			"default" => "2", 
			"else" => "2", 
			"elseif" => "2", 
			"endcase" => "2", 
			"endenum" => "2", 
			"endfor" => "2", 
			"endforeach" => "2", 
			"endif" => "2", 
			"endwhile" => "2", 
			"enum" => "2", 
			"for" => "2", 
			"foreach" => "2", 
			"if" => "2", 
			"in" => "2", 
			"next" => "2", 
			"not" => "2", 
			"or" => "2", 
			"return" => "2", 
			"to" => "2", 
			"while" => "2", 
			"include" => "3", 
			"use" => "3", 
			"BASIC" => "4", 
			"BASICIO" => "4", 
			"BOATS" => "4", 
			"CFGFILE" => "4", 
			"FILE" => "4", 
			"HTTP" => "4", 
			"NPC" => "4", 
			"OS" => "4", 
			"UO" => "4", 
			"UTIL" => "4", 
			"Accessible" => "5", 
			"AddMenuItem" => "5", 
			"AppendConfigFileElem" => "5", 
			"ApplyConstraint" => "5", 
			"ApplyDamage" => "5", 
			"ApplyRawDamage" => "5", 
			"AssignRectToWeatherRegion" => "5", 
			"append" => "5", 
			"BaseSkillToRawSkill" => "5", 
			"BoatFromItem" => "5", 
			"Broadcast" => "5", 
			"ban" => "5", 
			"CDbl" => "5", 
			"CInt" => "5", 
			"CStr" => "5", 
			"CheckLineOfSight" => "5", 
			"CheckLosAt" => "5", 
			"CheckSkill" => "5", 
			"ConsumeMana" => "5", 
			"ConsumeReagents" => "5", 
			"ConsumeSubstance" => "5", 
			"CreateAccount" => "5", 
			"CreateItemAtLocation" => "5", 
			"CreateItemInBackpack" => "5", 
			"CreateItemInInventory" => "5", 
			"CreateItemInContainer" => "5", 
			"CreateMenu" => "5", 
			"CreateMultiAtLocation" => "5", 
			"CreateNpcFromTemplate" => "5", 
			"CreateRootItemInStorageArea" => "5", 
			"CreateStorageArea" => "5", 
			"clear_script_profile_counters" => "5", 
			"close" => "5", 
			"Damage" => "5", 
			"DestroyItem" => "5", 
			"DestroyMulti" => "5", 
			"DestroyRootItemInStorageArea" => "5", 
			"Detach" => "5", 
			"DisableEvents" => "5", 
			"DisconnectClient" => "5", 
			"Distance" => "5", 
			"disable" => "5", 
			"EnableEvents" => "5", 
			"EnumerateItemsInContainer" => "5", 
			"EnumerateOnlineCharacters" => "5", 
			"EquipFromTemplate" => "5", 
			"EquipItem" => "5", 
			"EraseGlobalProperty" => "5", 
			"EraseObjProperty" => "5", 
			"enable" => "5", 
			"enabled" => "5", 
			"erase" => "5", 
			"events_waiting" => "5", 
			"exists" => "5", 
			"FindConfigElem" => "5", 
			"FindObjtypeInContainer" => "5", 
			"FindRootItemInStorageArea" => "5", 
			"FindStorageArea" => "5", 
			"fclose" => "5", 
			"find" => "5", 
			"fopen" => "5", 
			"fread" => "5", 
			"fseek" => "5", 
			"ftell" => "5", 
			"fwrite" => "5", 
			"GameStat" => "5", 
			"GetAmount" => "5", 
			"GetCommandHelp" => "5", 
			"GetConfigInt" => "5", 
			"GetConfigIntKeys" => "5", 
			"GetConfigMaxIntKey" => "5", 
			"GetConfigReal" => "5", 
			"GetConfigString" => "5", 
			"GetConfigStringKeys" => "5", 
			"GetConfigStringArray" => "5", 
			"GetElemProperty" => "5", 
			"GetEquipmentByLayer" => "5", 
			"GetGlobalProperty" => "5", 
			"GetHarvestDifficulty" => "5", 
			"GetMapInfo" => "5", 
			"GetMenuObjTypes" => "5", 
			"GetObjProperty" => "5", 
			"GetObjType" => "5", 
			"GetObjtypeByName" => "5", 
			"GetProperty" => "5", 
			"GetRawSkill" => "5", 
			"GetRegionString" => "5", 
			"GetSkill" => "5", 
			"GetSpellDifficulty" => "5", 
			"GetStandingHeight" => "5", 
			"GetWorldHeight" => "5", 
			"GrantPrivilege" => "5", 
			"HarvestResource" => "5", 
			"HealDamage" => "5", 
			"Hex" => "5", 
			"IsLegalMove" => "5", 
			"insert" => "5", 
			"keys" => "5", 
			"ListEquippedItems" => "5", 
			"ListGhostsNearLocation" => "5", 
			"ListHostiles" => "5", 
			"ListItemsAtLocation" => "5", 
			"ListItemsNearLocation" => "5", 
			"ListItemsNearLocationOfType" => "5", 
			"ListMobilesInLineOfSight" => "5", 
			"ListMobilesNearLocation" => "5", 
			"ListMobilesNearLocationEx" => "5", 
			"ListObjectsInBox" => "5", 
			"LoadTusScpFile" => "5", 
			"left" => "5", 
			"len" => "5", 
			"log_profile" => "5", 
			"lower" => "5", 
			"MakeBoundingBox" => "5", 
			"Move" => "5", 
			"MoveBoat" => "5", 
			"MoveBoatRelative" => "5", 
			"MoveCharacterToLocation" => "5", 
			"MoveItemToContainer" => "5", 
			"MoveItemToLocation" => "5", 
			"move_offline_mobiles" => "5", 
			"OpenPaperdoll" => "5", 
			"open" => "5", 
			"Pack" => "5", 
			"PerformAction" => "5", 
			"PlayLightningBoltEffect" => "5", 
			"PlayMovingEffect" => "5", 
			"PlayMovingEffectXYZ" => "5", 
			"PlayObjectCenteredEffect" => "5", 
			"PlaySoundEffect" => "5", 
			"PlaySoundEffectPrivate" => "5", 
			"PlayStationaryEffect" => "5", 
			"PrintTextAbove" => "5", 
			"PrintTextAbovePrivate" => "5", 
			"packages" => "5", 
			"polcore" => "5", 
			"position" => "5", 
			"print" => "5", 
			"QueryParam" => "5", 
			"RandomDiceRoll" => "5", 
			"RandomInt" => "5", 
			"RawSkillToBaseSkill" => "5", 
			"ReadConfigFile" => "5", 
			"ReadGameClock" => "5", 
			"ReleaseItem" => "5", 
			"RegisterForSpeechEvents" => "5", 
			"RegisterItemWithBoat" => "5", 
			"RequestInput" => "5", 
			"ReserveItem" => "5", 
			"RestartScript" => "5", 
			"Resurrect" => "5", 
			"RevokePrivilege" => "5", 
			"RunAwayFrom" => "5", 
			"RunAwayFromLocation" => "5", 
			"RunToward" => "5", 
			"RunTowardLocation" => "5", 
			"reverse" => "5", 
			"run_script_to_completion" => "5", 
			"SaveWorldState" => "5", 
			"SelectMenuItem2" => "5", 
			"Self" => "5", 
			"SendBuyWindow" => "5", 
			"SendDialogGump" => "5", 
			"SendEvent" => "5", 
			"SendOpenSpecialContainer" => "5", 
			"SendPacket" => "5", 
			"SendSellWindow" => "5", 
			"SendSkillWindow" => "5", 
			"SendStringAsTipWindow" => "5", 
			"SendSysMessage" => "5", 
			"SendTextEntryGump" => "5", 
			"SetAnchor" => "5", 
			"SetGlobalProperty" => "5", 
			"SetName" => "5", 
			"SetObjProperty" => "5", 
			"SetOpponent" => "5", 
			"SetProperty" => "5", 
			"SetRawSkill" => "5", 
			"SetRegionLightLevel" => "5", 
			"SetRegionWeatherLevel" => "5", 
			"SetScriptController" => "5", 
			"SetWarMode" => "5", 
			"Shutdown" => "5", 
			"SpeakPowerWords" => "5", 
			"SplitWords" => "5", 
			"StartSpellEffect" => "5", 
			"SubtractAmount" => "5", 
			"SystemFindBoatBySerial" => "5", 
			"SystemFindObjectBySerial" => "5", 
			"say" => "5", 
			"set_critical" => "5", 
			"set_debug" => "5", 
			"set_priority" => "5", 
			"set_priority_divide" => "5", 
			"set_script_option" => "5", 
			"setcmdlevel" => "5", 
			"setdex" => "5", 
			"setint" => "5", 
			"setlightlevel" => "5", 
			"setmaster" => "5", 
			"setname" => "5", 
			"setpassword" => "5", 
			"setstr" => "5", 
			"shrink" => "5", 
			"size" => "5", 
			"sleep" => "5", 
			"sleepms" => "5", 
			"sort" => "5", 
			"spendgold" => "5", 
			"squelch" => "5", 
			"start_script" => "5", 
			"syslog" => "5", 
			"system_rpm" => "5", 
			"Target" => "5", 
			"TargetCoordinates" => "5", 
			"TargetMultiPlacement" => "5", 
			"TurnAwayFrom" => "5", 
			"TurnAwayFromLocation" => "5", 
			"TurnBoat" => "5", 
			"TurnToward" => "5", 
			"TurnTowardLocation" => "5", 
			"toggle" => "5", 
			"UnloadConfigFile" => "5", 
			"Unpack" => "5", 
			"unban" => "5", 
			"unload_scripts" => "5", 
			"upper" => "5", 
			"WalkAwayFrom" => "5", 
			"WalkAwayFromLocation" => "5", 
			"WalkToward" => "5", 
			"WalkTowardLocation" => "5", 
			"Wander" => "5", 
			"WriteHtml" => "5", 
			"WriteHtmlRaw" => "5", 
			"wait_for_event" => "5", 
			"ANIM_ATTACK_1HAND_DOWN" => "6", 
			"ANIM_ATTACK_1HAND_JAB" => "6", 
			"ANIM_ATTACK_1HAND_WIDE" => "6", 
			"ANIM_ATTACK_2HAND_DOWN" => "6", 
			"ANIM_ATTACK_2HAND_JAB" => "6", 
			"ANIM_ATTACK_2HAND_WIDE" => "6", 
			"ANIM_ATTACK_BOW" => "6", 
			"ANIM_ATTACK_PUNCH" => "6", 
			"ANIM_ATTACK_XBOW" => "6", 
			"ANIM_BOW" => "6", 
			"ANIM_CAST_AREA" => "6", 
			"ANIM_CAST_DIR" => "6", 
			"ANIM_DIE_BACK" => "6", 
			"ANIM_DIE_FOR" => "6", 
			"ANIM_EAT" => "6", 
			"ANIM_FIDGET_1" => "6", 
			"ANIM_FIDGET_2" => "6", 
			"ANIM_HIT" => "6", 
			"ANIM_HORSE_ATTACK_BOW" => "6", 
			"ANIM_HORSE_ATTACK_MELEE" => "6", 
			"ANIM_HORSE_ATTACK_XBOW" => "6", 
			"ANIM_HORSE_RIDE_SLOW" => "6", 
			"ANIM_HORSE_RIDE_FAST" => "6", 
			"ANIM_HORSE_SIT" => "6", 
			"ANIM_HORSE_SLAP" => "6", 
			"ANIM_RUN_ARMED" => "6", 
			"ANIM_RUN_UNARMED" => "6", 
			"ANIM_SALUTE" => "6", 
			"ANIM_STAND" => "6", 
			"ANIM_STAND_1HAND" => "6", 
			"ANIM_STAND_2HAND" => "6", 
			"ANIM_TWIST_DODGE" => "6", 
			"ANIM_WALK_ARMED" => "6", 
			"ANIM_WALK_UNARMED" => "6", 
			"ANIM_WALK_WARMODE" => "6", 
			"CID_AIR_ELEMENTAL" => "6", 
			"CID_BIRD" => "6", 
			"CID_CORPSER" => "6", 
			"CID_DAEMON" => "6", 
			"CID_DAEMON_SWORD" => "6", 
			"CID_DRAGON_GREY" => "6", 
			"CID_EAGLE" => "6", 
			"CID_EARTH_ELEMENTAL" => "6", 
			"CID_ETTIN" => "6", 
			"CID_ETTIN_AXE" => "6", 
			"CID_FIRE_ELEMENTAL" => "6", 
			"CID_GARGOYLE" => "6", 
			"CID_GIANT_SNAKE" => "6", 
			"CID_HUMAN_FEMALE" => "6", 
			"CID_HUMAN_MALE" => "6", 
			"CID_OGRE" => "6", 
			"CID_ORC" => "6", 
			"CID_ORC_LORD" => "6", 
			"CID_WATER_ELEMENTAL" => "6", 
			"CID_ZERO" => "6", 
			"CID_ZOMBIE" => "6", 
			"COLOR_BLACK" => "6", 
			"COLOR_BLACKMETAL" => "6", 
			"COLOR_BLUE" => "6", 
			"COLOR_BLUE_DARK" => "6", 
			"COLOR_BLUE_LIGHT" => "6", 
			"COLOR_BSHIMMER" => "6", 
			"COLOR_CYAN" => "6", 
			"COLOR_CYAN_DARK" => "6", 
			"COLOR_CYAN_LIGHT" => "6", 
			"COLOR_DEFAULT" => "6", 
			"COLOR_GOLDMETAL" => "6", 
			"COLOR_GRAY" => "6", 
			"COLOR_GRAY_DARK" => "6", 
			"COLOR_GRAY_LIGHT" => "6", 
			"COLOR_GREEN" => "6", 
			"COLOR_GREEN_DARK" => "6", 
			"COLOR_GREEN_LIGHT" => "6", 
			"COLOR_INDIGO" => "6", 
			"COLOR_INDIGO_DARK" => "6", 
			"COLOR_INDIGO_LIGHT" => "6", 
			"COLOR_MAGENTA" => "6", 
			"COLOR_MAGENTA_DARK" => "6", 
			"COLOR_MAGENTA_LIGHT" => "6", 
			"COLOR_ORANGE" => "6", 
			"COLOR_ORANGE_DARK" => "6", 
			"COLOR_ORANGE_LIGHT" => "6", 
			"COLOR_RED" => "6", 
			"COLOR_RED_DARK" => "6", 
			"COLOR_RED_LIGHT" => "6", 
			"COLOR_SPECTRAL" => "6", 
			"COLOR_STONE" => "6", 
			"COLOR_TRANSLUCENT" => "6", 
			"COLOR_VIOLET" => "6", 
			"COLOR_VIOLET_DARK" => "6", 
			"COLOR_VIOLET_LIGHT" => "6", 
			"COLOR_WHITE" => "6", 
			"COLOR_YELLOW" => "6", 
			"COLOR_YELLOW_DARK" => "6", 
			"COLOR_YELLOW_LIGHT" => "6", 
			"DIR_E" => "6", 
			"DIR_N" => "6", 
			"DIR_NE" => "6", 
			"DIR_NW" => "6", 
			"DIR_S" => "6", 
			"DIR_SE" => "6", 
			"DIR_SW" => "6", 
			"DIR_W" => "6", 
			"EVID_DAMAGED" => "6", 
			"EVID_DISENGAGED" => "6", 
			"EVID_ENGAGED" => "6", 
			"EVID_ENTEREDAREA" => "6", 
			"EVID_HOSTILE_MOVED" => "6", 
			"EVID_ITEM_GIVEN" => "6", 
			"EVID_LEFTAREA" => "6", 
			"EVID_MERCHANT_BOUGHT" => "6", 
			"EVID_MERCHANT_SOLD" => "6", 
			"EVID_OPPONENT_MOVED" => "6", 
			"EVID_SPEECH" => "6", 
			"FONT_BOLD" => "6", 
			"FONT_BOLD_SHAD" => "6", 
			"FONT_COLOR" => "6", 
			"FONT_GOTHIC" => "6", 
			"FONT_ITALIC" => "6", 
			"FONT_MAX" => "6", 
			"FONT_MIN" => "6", 
			"FONT_NORMAL" => "6", 
			"FONT_RUNE" => "6", 
			"FONT_SHADOW" => "6", 
			"FONT_SMALL_DARK" => "6", 
			"FONT_SMALL_LIGHT" => "6", 
			"FX_BLADES" => "6", 
			"FX_BLADES_EMERGE" => "6", 
			"FX_BLESS_EFFECT" => "6", 
			"FX_BLUEMOONSTART" => "6", 
			"FX_CURSE_EFFECT" => "6", 
			"FX_DEATH_FUNNEL" => "6", 
			"FX_ENERGY_BOLT" => "6", 
			"FX_ENERGY_F_EW" => "6", 
			"FX_ENERGY_F_NS" => "6", 
			"FX_EXPLODE_1" => "6", 
			"FX_EXPLODE_2" => "6", 
			"FX_EXPLODE_3" => "6", 
			"FX_EXPLODE_BALL" => "6", 
			"FX_FIREBALL" => "6", 
			"FX_FIRE_BOLT" => "6", 
			"FX_FIRE_F_EW" => "6", 
			"FX_FIRE_F_NS" => "6", 
			"FX_FLAMESTRIKE" => "6", 
			"FX_GLOW" => "6", 
			"FX_GLOW_SPIKE" => "6", 
			"FX_HEAL_EFFECT" => "6", 
			"FX_MAGIC_ARROW" => "6", 
			"FX_MARK_EFFECT" => "6", 
			"FX_PARA_F_EW" => "6", 
			"FX_PARA_F_NS" => "6", 
			"FX_POISON_F_EW" => "6", 
			"FX_POISON_F_NS" => "6", 
			"FX_SMOKE" => "6", 
			"FX_SPARK_EFFECT" => "6", 
			"FX_SPELL_FAIL" => "6", 
			"FX_SPLASH" => "6", 
			"FX_STATIC" => "6", 
			"FX_TELE_VANISH" => "6", 
			"LAYER_ARMS" => "6", 
			"LAYER_BANKBOX" => "6", 
			"LAYER_BEARD" => "6", 
			"LAYER_CAPE" => "6", 
			"LAYER_CHEST" => "6", 
			"LAYER_EARS" => "6", 
			"LAYER_GLOVES" => "6", 
			"LAYER_HAIR" => "6", 
			"LAYER_HAND1" => "6", 
			"LAYER_HAND2" => "6", 
			"LAYER_HELM" => "6", 
			"LAYER_LEGS" => "6", 
			"LAYER_MOUNT" => "6", 
			"LAYER_NECK" => "6", 
			"LAYER_NONE" => "6", 
			"LAYER_PACK" => "6", 
			"LAYER_PACK2" => "6", 
			"LAYER_PANTS" => "6", 
			"LAYER_RING" => "6", 
			"LAYER_ROBE" => "6", 
			"LAYER_SHIRT" => "6", 
			"LAYER_SHOES" => "6", 
			"LAYER_SKIRT" => "6", 
			"LAYER_TRADE" => "6", 
			"LAYER_TUNIC" => "6", 
			"LAYER_UNUSED9" => "6", 
			"LAYER_VENDORBUY" => "6", 
			"LAYER_VENDOREXTRA" => "6", 
			"LAYER_VENDORSTOCK" => "6", 
			"LAYER_WAIST" => "6", 
			"LAYER_WRIST" => "6", 
			"SFX_1" => "6", 
			"SFX_10" => "6", 
			"SFX_100" => "6", 
			"SFX_101" => "6", 
			"SFX_102" => "6", 
			"SFX_103" => "6", 
			"SFX_104" => "6", 
			"SFX_105" => "6", 
			"SFX_106" => "6", 
			"SFX_107" => "6", 
			"SFX_108" => "6", 
			"SFX_109" => "6", 
			"SFX_10A" => "6", 
			"SFX_10B" => "6", 
			"SFX_10C" => "6", 
			"SFX_10D" => "6", 
			"SFX_10E" => "6", 
			"SFX_10F" => "6", 
			"SFX_11" => "6", 
			"SFX_110" => "6", 
			"SFX_111" => "6", 
			"SFX_112" => "6", 
			"SFX_113" => "6", 
			"SFX_114" => "6", 
			"SFX_115" => "6", 
			"SFX_116" => "6", 
			"SFX_117" => "6", 
			"SFX_118" => "6", 
			"SFX_119" => "6", 
			"SFX_11A" => "6", 
			"SFX_11B" => "6", 
			"SFX_11C" => "6", 
			"SFX_11D" => "6", 
			"SFX_11E" => "6", 
			"SFX_11F" => "6", 
			"SFX_12" => "6", 
			"SFX_120" => "6", 
			"SFX_121" => "6", 
			"SFX_122" => "6", 
			"SFX_123" => "6", 
			"SFX_124" => "6", 
			"SFX_125" => "6", 
			"SFX_126" => "6", 
			"SFX_127" => "6", 
			"SFX_128" => "6", 
			"SFX_129" => "6", 
			"SFX_12A" => "6", 
			"SFX_12B" => "6", 
			"SFX_12C" => "6", 
			"SFX_12D" => "6", 
			"SFX_12E" => "6", 
			"SFX_12F" => "6", 
			"SFX_13" => "6", 
			"SFX_130" => "6", 
			"SFX_131" => "6", 
			"SFX_132" => "6", 
			"SFX_133" => "6", 
			"SFX_134" => "6", 
			"SFX_135" => "6", 
			"SFX_136" => "6", 
			"SFX_137" => "6", 
			"SFX_138" => "6", 
			"SFX_139" => "6", 
			"SFX_13A" => "6", 
			"SFX_13B" => "6", 
			"SFX_13C" => "6", 
			"SFX_13D" => "6", 
			"SFX_13E" => "6", 
			"SFX_13F" => "6", 
			"SFX_14" => "6", 
			"SFX_140" => "6", 
			"SFX_141" => "6", 
			"SFX_142" => "6", 
			"SFX_143" => "6", 
			"SFX_144" => "6", 
			"SFX_145" => "6", 
			"SFX_146" => "6", 
			"SFX_147" => "6", 
			"SFX_148" => "6", 
			"SFX_149" => "6", 
			"SFX_14A" => "6", 
			"SFX_14B" => "6", 
			"SFX_14C" => "6", 
			"SFX_14D" => "6", 
			"SFX_14E" => "6", 
			"SFX_14F" => "6", 
			"SFX_15" => "6", 
			"SFX_150" => "6", 
			"SFX_151" => "6", 
			"SFX_152" => "6", 
			"SFX_153" => "6", 
			"SFX_154" => "6", 
			"SFX_155" => "6", 
			"SFX_156" => "6", 
			"SFX_157" => "6", 
			"SFX_158" => "6", 
			"SFX_159" => "6", 
			"SFX_15A" => "6", 
			"SFX_15B" => "6", 
			"SFX_15C" => "6", 
			"SFX_15D" => "6", 
			"SFX_15E" => "6", 
			"SFX_15F" => "6", 
			"SFX_16" => "6", 
			"SFX_160" => "6", 
			"SFX_161" => "6", 
			"SFX_162" => "6", 
			"SFX_163" => "6", 
			"SFX_164" => "6", 
			"SFX_165" => "6", 
			"SFX_166" => "6", 
			"SFX_167" => "6", 
			"SFX_168" => "6", 
			"SFX_169" => "6", 
			"SFX_16A" => "6", 
			"SFX_16B" => "6", 
			"SFX_16C" => "6", 
			"SFX_16D" => "6", 
			"SFX_16E" => "6", 
			"SFX_16F" => "6", 
			"SFX_17" => "6", 
			"SFX_170" => "6", 
			"SFX_171" => "6", 
			"SFX_172" => "6", 
			"SFX_173" => "6", 
			"SFX_174" => "6", 
			"SFX_175" => "6", 
			"SFX_176" => "6", 
			"SFX_177" => "6", 
			"SFX_178" => "6", 
			"SFX_179" => "6", 
			"SFX_17A" => "6", 
			"SFX_17B" => "6", 
			"SFX_17C" => "6", 
			"SFX_17D" => "6", 
			"SFX_17E" => "6", 
			"SFX_17F" => "6", 
			"SFX_18" => "6", 
			"SFX_180" => "6", 
			"SFX_181" => "6", 
			"SFX_182" => "6", 
			"SFX_183" => "6", 
			"SFX_184" => "6", 
			"SFX_185" => "6", 
			"SFX_186" => "6", 
			"SFX_187" => "6", 
			"SFX_188" => "6", 
			"SFX_189" => "6", 
			"SFX_18A" => "6", 
			"SFX_18B" => "6", 
			"SFX_18C" => "6", 
			"SFX_18D" => "6", 
			"SFX_18E" => "6", 
			"SFX_18F" => "6", 
			"SFX_19" => "6", 
			"SFX_190" => "6", 
			"SFX_191" => "6", 
			"SFX_192" => "6", 
			"SFX_193" => "6", 
			"SFX_194" => "6", 
			"SFX_195" => "6", 
			"SFX_196" => "6", 
			"SFX_197" => "6", 
			"SFX_198" => "6", 
			"SFX_199" => "6", 
			"SFX_19A" => "6", 
			"SFX_19B" => "6", 
			"SFX_19C" => "6", 
			"SFX_19D" => "6", 
			"SFX_19E" => "6", 
			"SFX_19F" => "6", 
			"SFX_1A" => "6", 
			"SFX_1A0" => "6", 
			"SFX_1A1" => "6", 
			"SFX_1A2" => "6", 
			"SFX_1A3" => "6", 
			"SFX_1A4" => "6", 
			"SFX_1A5" => "6", 
			"SFX_1A6" => "6", 
			"SFX_1A7" => "6", 
			"SFX_1A8" => "6", 
			"SFX_1A9" => "6", 
			"SFX_1AA" => "6", 
			"SFX_1AB" => "6", 
			"SFX_1AC" => "6", 
			"SFX_1AD" => "6", 
			"SFX_1AE" => "6", 
			"SFX_1AF" => "6", 
			"SFX_1B" => "6", 
			"SFX_1B0" => "6", 
			"SFX_1B1" => "6", 
			"SFX_1B2" => "6", 
			"SFX_1B3" => "6", 
			"SFX_1B4" => "6", 
			"SFX_1B5" => "6", 
			"SFX_1B6" => "6", 
			"SFX_1B7" => "6", 
			"SFX_1B8" => "6", 
			"SFX_1B9" => "6", 
			"SFX_1BA" => "6", 
			"SFX_1BB" => "6", 
			"SFX_1BC" => "6", 
			"SFX_1BD" => "6", 
			"SFX_1BE" => "6", 
			"SFX_1BF" => "6", 
			"SFX_1C" => "6", 
			"SFX_1C0" => "6", 
			"SFX_1C1" => "6", 
			"SFX_1C2" => "6", 
			"SFX_1C3" => "6", 
			"SFX_1C4" => "6", 
			"SFX_1C5" => "6", 
			"SFX_1C6" => "6", 
			"SFX_1C7" => "6", 
			"SFX_1C8" => "6", 
			"SFX_1C9" => "6", 
			"SFX_1CA" => "6", 
			"SFX_1CB" => "6", 
			"SFX_1CC" => "6", 
			"SFX_1CD" => "6", 
			"SFX_1CE" => "6", 
			"SFX_1CF" => "6", 
			"SFX_1D" => "6", 
			"SFX_1D0" => "6", 
			"SFX_1D1" => "6", 
			"SFX_1D2" => "6", 
			"SFX_1D3" => "6", 
			"SFX_1D4" => "6", 
			"SFX_1D5" => "6", 
			"SFX_1D6" => "6", 
			"SFX_1D7" => "6", 
			"SFX_1D8" => "6", 
			"SFX_1D9" => "6", 
			"SFX_1DA" => "6", 
			"SFX_1DB" => "6", 
			"SFX_1DC" => "6", 
			"SFX_1DD" => "6", 
			"SFX_1DE" => "6", 
			"SFX_1DF" => "6", 
			"SFX_1E" => "6", 
			"SFX_1E0" => "6", 
			"SFX_1E1" => "6", 
			"SFX_1E2" => "6", 
			"SFX_1E3" => "6", 
			"SFX_1E4" => "6", 
			"SFX_1E5" => "6", 
			"SFX_1E6" => "6", 
			"SFX_1E7" => "6", 
			"SFX_1E8" => "6", 
			"SFX_1E9" => "6", 
			"SFX_1EA" => "6", 
			"SFX_1EB" => "6", 
			"SFX_1EC" => "6", 
			"SFX_1ED" => "6", 
			"SFX_1EE" => "6", 
			"SFX_1EF" => "6", 
			"SFX_1F" => "6", 
			"SFX_1F0" => "6", 
			"SFX_1F1" => "6", 
			"SFX_1F2" => "6", 
			"SFX_1F3" => "6", 
			"SFX_1F4" => "6", 
			"SFX_1F5" => "6", 
			"SFX_1F6" => "6", 
			"SFX_1F7" => "6", 
			"SFX_1F8" => "6", 
			"SFX_1F9" => "6", 
			"SFX_1FA" => "6", 
			"SFX_1FB" => "6", 
			"SFX_1FC" => "6", 
			"SFX_1FD" => "6", 
			"SFX_1FE" => "6", 
			"SFX_1FF" => "6", 
			"SFX_2" => "6", 
			"SFX_20" => "6", 
			"SFX_200" => "6", 
			"SFX_201" => "6", 
			"SFX_202" => "6", 
			"SFX_203" => "6", 
			"SFX_204" => "6", 
			"SFX_205" => "6", 
			"SFX_206" => "6", 
			"SFX_207" => "6", 
			"SFX_208" => "6", 
			"SFX_209" => "6", 
			"SFX_20A" => "6", 
			"SFX_20B" => "6", 
			"SFX_20C" => "6", 
			"SFX_20D" => "6", 
			"SFX_20E" => "6", 
			"SFX_20F" => "6", 
			"SFX_21" => "6", 
			"SFX_210" => "6", 
			"SFX_211" => "6", 
			"SFX_212" => "6", 
			"SFX_213" => "6", 
			"SFX_214" => "6", 
			"SFX_215" => "6", 
			"SFX_216" => "6", 
			"SFX_217" => "6", 
			"SFX_218" => "6", 
			"SFX_219" => "6", 
			"SFX_21A" => "6", 
			"SFX_21B" => "6", 
			"SFX_21C" => "6", 
			"SFX_21D" => "6", 
			"SFX_21E" => "6", 
			"SFX_21F" => "6", 
			"SFX_22" => "6", 
			"SFX_220" => "6", 
			"SFX_221" => "6", 
			"SFX_222" => "6", 
			"SFX_223" => "6", 
			"SFX_224" => "6", 
			"SFX_225" => "6", 
			"SFX_226" => "6", 
			"SFX_227" => "6", 
			"SFX_228" => "6", 
			"SFX_229" => "6", 
			"SFX_22A" => "6", 
			"SFX_22B" => "6", 
			"SFX_22C" => "6", 
			"SFX_22D" => "6", 
			"SFX_22E" => "6", 
			"SFX_22F" => "6", 
			"SFX_23" => "6", 
			"SFX_230" => "6", 
			"SFX_231" => "6", 
			"SFX_232" => "6", 
			"SFX_233" => "6", 
			"SFX_234" => "6", 
			"SFX_235" => "6", 
			"SFX_236" => "6", 
			"SFX_237" => "6", 
			"SFX_238" => "6", 
			"SFX_239" => "6", 
			"SFX_23A" => "6", 
			"SFX_23B" => "6", 
			"SFX_23C" => "6", 
			"SFX_23D" => "6", 
			"SFX_23E" => "6", 
			"SFX_23F" => "6", 
			"SFX_24" => "6", 
			"SFX_240" => "6", 
			"SFX_241" => "6", 
			"SFX_242" => "6", 
			"SFX_243" => "6", 
			"SFX_244" => "6", 
			"SFX_245" => "6", 
			"SFX_246" => "6", 
			"SFX_247" => "6", 
			"SFX_248" => "6", 
			"SFX_249" => "6", 
			"SFX_24A" => "6", 
			"SFX_24B" => "6", 
			"SFX_24C" => "6", 
			"SFX_24D" => "6", 
			"SFX_24E" => "6", 
			"SFX_24F" => "6", 
			"SFX_25" => "6", 
			"SFX_250" => "6", 
			"SFX_251" => "6", 
			"SFX_252" => "6", 
			"SFX_26" => "6", 
			"SFX_27" => "6", 
			"SFX_28" => "6", 
			"SFX_28E" => "6", 
			"SFX_29" => "6", 
			"SFX_2A" => "6", 
			"SFX_2B" => "6", 
			"SFX_2C" => "6", 
			"SFX_2D" => "6", 
			"SFX_2E" => "6", 
			"SFX_2F" => "6", 
			"SFX_3" => "6", 
			"SFX_30" => "6", 
			"SFX_31" => "6", 
			"SFX_32" => "6", 
			"SFX_33" => "6", 
			"SFX_34" => "6", 
			"SFX_35" => "6", 
			"SFX_36" => "6", 
			"SFX_37" => "6", 
			"SFX_38" => "6", 
			"SFX_39" => "6", 
			"SFX_3A" => "6", 
			"SFX_3B" => "6", 
			"SFX_3C" => "6", 
			"SFX_3D" => "6", 
			"SFX_3E" => "6", 
			"SFX_3F" => "6", 
			"SFX_4" => "6", 
			"SFX_40" => "6", 
			"SFX_41" => "6", 
			"SFX_42" => "6", 
			"SFX_43" => "6", 
			"SFX_44" => "6", 
			"SFX_45" => "6", 
			"SFX_46" => "6", 
			"SFX_47" => "6", 
			"SFX_48" => "6", 
			"SFX_49" => "6", 
			"SFX_4A" => "6", 
			"SFX_4B" => "6", 
			"SFX_4C" => "6", 
			"SFX_4D" => "6", 
			"SFX_4E" => "6", 
			"SFX_4F" => "6", 
			"SFX_5" => "6", 
			"SFX_50" => "6", 
			"SFX_51" => "6", 
			"SFX_52" => "6", 
			"SFX_53" => "6", 
			"SFX_54" => "6", 
			"SFX_55" => "6", 
			"SFX_56" => "6", 
			"SFX_57" => "6", 
			"SFX_58" => "6", 
			"SFX_59" => "6", 
			"SFX_5A" => "6", 
			"SFX_5B" => "6", 
			"SFX_5C" => "6", 
			"SFX_5D" => "6", 
			"SFX_5E" => "6", 
			"SFX_5F" => "6", 
			"SFX_6" => "6", 
			"SFX_60" => "6", 
			"SFX_61" => "6", 
			"SFX_62" => "6", 
			"SFX_63" => "6", 
			"SFX_64" => "6", 
			"SFX_65" => "6", 
			"SFX_66" => "6", 
			"SFX_67" => "6", 
			"SFX_68" => "6", 
			"SFX_69" => "6", 
			"SFX_6A" => "6", 
			"SFX_6B" => "6", 
			"SFX_6C" => "6", 
			"SFX_6D" => "6", 
			"SFX_6E" => "6", 
			"SFX_6F" => "6", 
			"SFX_7" => "6", 
			"SFX_70" => "6", 
			"SFX_71" => "6", 
			"SFX_72" => "6", 
			"SFX_73" => "6", 
			"SFX_74" => "6", 
			"SFX_75" => "6", 
			"SFX_76" => "6", 
			"SFX_77" => "6", 
			"SFX_78" => "6", 
			"SFX_79" => "6", 
			"SFX_7A" => "6", 
			"SFX_7B" => "6", 
			"SFX_7C" => "6", 
			"SFX_7D" => "6", 
			"SFX_7E" => "6", 
			"SFX_7F" => "6", 
			"SFX_8" => "6", 
			"SFX_80" => "6", 
			"SFX_81" => "6", 
			"SFX_82" => "6", 
			"SFX_83" => "6", 
			"SFX_84" => "6", 
			"SFX_85" => "6", 
			"SFX_86" => "6", 
			"SFX_87" => "6", 
			"SFX_88" => "6", 
			"SFX_89" => "6", 
			"SFX_8A" => "6", 
			"SFX_8B" => "6", 
			"SFX_8C" => "6", 
			"SFX_8D" => "6", 
			"SFX_8E" => "6", 
			"SFX_8F" => "6", 
			"SFX_9" => "6", 
			"SFX_90" => "6", 
			"SFX_91" => "6", 
			"SFX_92" => "6", 
			"SFX_93" => "6", 
			"SFX_94" => "6", 
			"SFX_95" => "6", 
			"SFX_96" => "6", 
			"SFX_97" => "6", 
			"SFX_98" => "6", 
			"SFX_99" => "6", 
			"SFX_9A" => "6", 
			"SFX_9B" => "6", 
			"SFX_9C" => "6", 
			"SFX_9D" => "6", 
			"SFX_9E" => "6", 
			"SFX_9F" => "6", 
			"SFX_A" => "6", 
			"SFX_A0" => "6", 
			"SFX_A1" => "6", 
			"SFX_A2" => "6", 
			"SFX_A3" => "6", 
			"SFX_A4" => "6", 
			"SFX_A5" => "6", 
			"SFX_A6" => "6", 
			"SFX_A7" => "6", 
			"SFX_A8" => "6", 
			"SFX_A9" => "6", 
			"SFX_AA" => "6", 
			"SFX_AB" => "6", 
			"SFX_AC" => "6", 
			"SFX_AD" => "6", 
			"SFX_AE" => "6", 
			"SFX_AF" => "6", 
			"SFX_ANVIL" => "6", 
			"SFX_B" => "6", 
			"SFX_B0" => "6", 
			"SFX_B1" => "6", 
			"SFX_B2" => "6", 
			"SFX_B3" => "6", 
			"SFX_B4" => "6", 
			"SFX_B5" => "6", 
			"SFX_B6" => "6", 
			"SFX_B7" => "6", 
			"SFX_B8" => "6", 
			"SFX_B9" => "6", 
			"SFX_BA" => "6", 
			"SFX_BB" => "6", 
			"SFX_BC" => "6", 
			"SFX_BD" => "6", 
			"SFX_BE" => "6", 
			"SFX_BF" => "6", 
			"SFX_C" => "6", 
			"SFX_C0" => "6", 
			"SFX_C1" => "6", 
			"SFX_C2" => "6", 
			"SFX_C3" => "6", 
			"SFX_C4" => "6", 
			"SFX_C5" => "6", 
			"SFX_C6" => "6", 
			"SFX_C7" => "6", 
			"SFX_C8" => "6", 
			"SFX_C9" => "6", 
			"SFX_CA" => "6", 
			"SFX_CB" => "6", 
			"SFX_CC" => "6", 
			"SFX_CD" => "6", 
			"SFX_CE" => "6", 
			"SFX_CF" => "6", 
			"SFX_CLOSE_METAL_DOOR" => "6", 
			"SFX_CLOSE_WOODEN_DOOR" => "6", 
			"SFX_D" => "6", 
			"SFX_D0" => "6", 
			"SFX_D1" => "6", 
			"SFX_D2" => "6", 
			"SFX_D3" => "6", 
			"SFX_D4" => "6", 
			"SFX_D5" => "6", 
			"SFX_D6" => "6", 
			"SFX_D7" => "6", 
			"SFX_D8" => "6", 
			"SFX_D9" => "6", 
			"SFX_DA" => "6", 
			"SFX_DB" => "6", 
			"SFX_DC" => "6", 
			"SFX_DD" => "6", 
			"SFX_DE" => "6", 
			"SFX_DF" => "6", 
			"SFX_DRUM_FAIL" => "6", 
			"SFX_DRUM_SUCC" => "6", 
			"SFX_E" => "6", 
			"SFX_E0" => "6", 
			"SFX_E1" => "6", 
			"SFX_E2" => "6", 
			"SFX_E3" => "6", 
			"SFX_E4" => "6", 
			"SFX_E5" => "6", 
			"SFX_E6" => "6", 
			"SFX_E7" => "6", 
			"SFX_E8" => "6", 
			"SFX_E9" => "6", 
			"SFX_EA" => "6", 
			"SFX_EB" => "6", 
			"SFX_EC" => "6", 
			"SFX_ED" => "6", 
			"SFX_EE" => "6", 
			"SFX_EF" => "6", 
			"SFX_F" => "6", 
			"SFX_F0" => "6", 
			"SFX_F1" => "6", 
			"SFX_F2" => "6", 
			"SFX_F3" => "6", 
			"SFX_F4" => "6", 
			"SFX_F5" => "6", 
			"SFX_F6" => "6", 
			"SFX_F7" => "6", 
			"SFX_F8" => "6", 
			"SFX_F9" => "6", 
			"SFX_FA" => "6", 
			"SFX_FB" => "6", 
			"SFX_FC" => "6", 
			"SFX_FD" => "6", 
			"SFX_FE" => "6", 
			"SFX_FF" => "6", 
			"SFX_GLASSBREAK4" => "6", 
			"SFX_HAMMER" => "6", 
			"SFX_HARP_FAIL" => "6", 
			"SFX_HARP_SUCC" => "6", 
			"SFX_LUTE_FAIL" => "6", 
			"SFX_LUTE_SUCC" => "6", 
			"SFX_MUSIC_DRUM_FAIL" => "6", 
			"SFX_MUSIC_DRUM_GOOD" => "6", 
			"SFX_MUSIC_HARP_LAP_FAIL" => "6", 
			"SFX_MUSIC_HARP_LAP_GOOD" => "6", 
			"SFX_MUSIC_HARP_LARGE_FAIL" => "6", 
			"SFX_MUSIC_HARP_LARGE_GOOD" => "6", 
			"SFX_MUSIC_LUTE_FAIL" => "6", 
			"SFX_MUSIC_LUTE_GOOD" => "6", 
			"SFX_MUSIC_TAMBORINE_FAIL" => "6", 
			"SFX_MUSIC_TAMBORINE_GOOD" => "6", 
			"SFX_OPEN_METAL_DOOR" => "6", 
			"SFX_OPEN_WOODEN_DOOR" => "6", 
			"SFX_PICK" => "6", 
			"SFX_SKILL_LUMBERJACK" => "6", 
			"SFX_SKILL_SPIRITSPEAK" => "6", 
			"SFX_SPELL_AGILITY" => "6", 
			"SFX_SPELL_ARCH_CURE" => "6", 
			"SFX_SPELL_ARCH_PROTECTION" => "6", 
			"SFX_SPELL_BLADE_SPIRITS" => "6", 
			"SFX_SPELL_BLESS" => "6", 
			"SFX_SPELL_CHAIN_LIGHTNING" => "6", 
			"SFX_SPELL_CLUMSY" => "6", 
			"SFX_SPELL_CREATE_FOOD" => "6", 
			"SFX_SPELL_CUNNING" => "6", 
			"SFX_SPELL_CURE" => "6", 
			"SFX_SPELL_CURSE" => "6", 
			"SFX_SPELL_DISPEL" => "6", 
			"SFX_SPELL_EARTHQUAKE" => "6", 
			"SFX_SPELL_ENERGY_BOLT" => "6", 
			"SFX_SPELL_ENERGY_FIELD" => "6", 
			"SFX_SPELL_ENERGY_VORTEX" => "6", 
			"SFX_SPELL_EXPLOSION" => "6", 
			"SFX_SPELL_FAIL" => "6", 
			"SFX_SPELL_FEEBLEMIND" => "6", 
			"SFX_SPELL_FIREBALL" => "6", 
			"SFX_SPELL_FIRE_FIELD" => "6", 
			"SFX_SPELL_FLAME_STRIKE" => "6", 
			"SFX_SPELL_GATE_TRAVEL" => "6", 
			"SFX_SPELL_GREATER_HEAL" => "6", 
			"SFX_SPELL_HARM" => "6", 
			"SFX_SPELL_HEAL" => "6", 
			"SFX_SPELL_INCOGNITO" => "6", 
			"SFX_SPELL_INVISIBILITY" => "6", 
			"SFX_SPELL_LIGHTNING" => "6", 
			"SFX_SPELL_MAGIC_ARROW" => "6", 
			"SFX_SPELL_MAGIC_LOCK" => "6", 
			"SFX_SPELL_MAGIC_REFLECTION" => "6", 
			"SFX_SPELL_MAGIC_TRAP" => "6", 
			"SFX_SPELL_MAGIC_UNTRAP" => "6", 
			"SFX_SPELL_MANA_DRAIN" => "6", 
			"SFX_SPELL_MANA_VAMPIRE" => "6", 
			"SFX_SPELL_MARK" => "6", 
			"SFX_SPELL_MASS_CURSE" => "6", 
			"SFX_SPELL_MASS_DISPEL" => "6", 
			"SFX_SPELL_METEOR_SWARM" => "6", 
			"SFX_SPELL_MIND_BLAST" => "6", 
			"SFX_SPELL_NECROMANTIC" => "6", 
			"SFX_SPELL_NIGHT_SIGHT" => "6", 
			"SFX_SPELL_PARALYZE" => "6", 
			"SFX_SPELL_PARALYZE_FIELD" => "6", 
			"SFX_SPELL_PARA_FIELD" => "6", 
			"SFX_SPELL_POISON" => "6", 
			"SFX_SPELL_POISON_FIELD" => "6", 
			"SFX_SPELL_POLYMORPH" => "6", 
			"SFX_SPELL_PROTECTION" => "6", 
			"SFX_SPELL_REACTIVE_ARMOR" => "6", 
			"SFX_SPELL_RECALL" => "6", 
			"SFX_SPELL_RESSURECTION" => "6", 
			"SFX_SPELL_REVEAL" => "6", 
			"SFX_SPELL_STRENGTH" => "6", 
			"SFX_SPELL_SUMMON_CREATURE" => "6", 
			"SFX_SPELL_SUMMON_DAEMON" => "6", 
			"SFX_SPELL_SUMMON_ELEMENTAL" => "6", 
			"SFX_SPELL_TELEKINESIS" => "6", 
			"SFX_SPELL_TELEPORT" => "6", 
			"SFX_SPELL_UNLOCK" => "6", 
			"SFX_SPELL_WALL_OF_STONE" => "6", 
			"SFX_SPELL_WEAKEN" => "6", 
			"SFX_TAMB_FAIL" => "6", 
			"SFX_TAMB_SUCC" => "6", 
			"SFX_TRAP_EXPLOSION" => "6", 
			"SFX_TRAP_NEEDLE" => "6", 
			"SFX_TRAP_POISON" => "6", 
			"SKILLID_ALCHEMY" => "6", 
			"SKILLID_ANATOMY" => "6", 
			"SKILLID_ANIMALLORE" => "6", 
			"SKILLID_ARCHERY" => "6", 
			"SKILLID_ARMSLORE" => "6", 
			"SKILLID_BATTLE_DEFENSE" => "6", 
			"SKILLID_BEGGING" => "6", 
			"SKILLID_BLACKSMITHY" => "6", 
			"SKILLID_BOWCRAFT" => "6", 
			"SKILLID_CAMPING" => "6", 
			"SKILLID_CARPENTRY" => "6", 
			"SKILLID_CARTOGRAPHY" => "6", 
			"SKILLID_COOKING" => "6", 
			"SKILLID_DETECTINGHIDDEN" => "6", 
			"SKILLID_ENTICEMENT" => "6", 
			"SKILLID_EVALINT" => "6", 
			"SKILLID_FENCING" => "6", 
			"SKILLID_FISHING" => "6", 
			"SKILLID_FORENSICS" => "6", 
			"SKILLID_HEALING" => "6", 
			"SKILLID_HERDING" => "6", 
			"SKILLID_HIDING" => "6", 
			"SKILLID_INSCRIPTION" => "6", 
			"SKILLID_ITEMID" => "6", 
			"SKILLID_LOCKPICKING" => "6", 
			"SKILLID_LUMBERJACKING" => "6", 
			"SKILLID_MACEFIGHTING" => "6", 
			"SKILLID_MAGERY" => "6", 
			"SKILLID_MAGICRESISTANCE" => "6", 
			"SKILLID_MEDITATION" => "6", 
			"SKILLID_MINING" => "6", 
			"SKILLID_MUSICIANSHIP" => "6", 
			"SKILLID_PEACEMAKING" => "6", 
			"SKILLID_POISONING" => "6", 
			"SKILLID_PROVOCATION" => "6", 
			"SKILLID_REMOVETRAP" => "6", 
			"SKILLID_SNOOPING" => "6", 
			"SKILLID_SPIRITSPEAK" => "6", 
			"SKILLID_STEALING" => "6", 
			"SKILLID_STEALTH" => "6", 
			"SKILLID_SWORDSMANSHIP" => "6", 
			"SKILLID_TACTICS" => "6", 
			"SKILLID_TAILORING" => "6", 
			"SKILLID_TAMING" => "6", 
			"SKILLID_TASTEID" => "6", 
			"SKILLID_TINKERING" => "6", 
			"SKILLID_TRACKING" => "6", 
			"SKILLID_VETERINARY" => "6", 
			"SKILLID_WRESTLING" => "6", 
			"SKILLID__HIGHEST" => "6", 
			"LH_FLAG_LOS" => "8", 
			"LH_FLAG_INCLUDE_HIDDEN" => "8", 
			"LISTEX_FLAG_GHOST" => "8", 
			"LISTEX_FLAG_HIDDEN" => "8", 
			"LISTEX_FLAG_NORMAL" => "8", 
			"MOVECHAR_FORCELOCATION" => "8", 
			"MOVEITEM_FORCELOCATION" => "8", 
			"MOVEITEM_NORMAL" => "8", 
			"SCRIPTOPT_DEBUG" => "8", 
			"SCRIPTOPT_NO_INTERRUPT" => "8", 
			"SCRIPTOPT_NO_RUNAWAY" => "8", 
			"TE_CANCEL_DISABLE" => "8", 
			"TE_CANCEL_ENABLE" => "8", 
			"TE_STYLE_DISABLE" => "8", 
			"TE_STYLE_NORMAL" => "8", 
			"TE_STYLE_NUMERICAL" => "8", 
			"TGTOPT_CHECK_LOS" => "8", 
			"TGTOPT_HARMFUL" => "8", 
			"TGTOPT_HELPFUL" => "8", 
			"TGTOPT_NEUTRAL" => "8", 
			"TGTOPT_NOCHECK_LOS" => "8");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"8" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
