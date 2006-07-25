<?php
$BEAUT_PATH = realpath(".")."/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_zmud extends HFile{
   function HFile_zmud(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// zMUD Script
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "brown", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("#", "$", "%", "&", ",", ".", " ", "/", "(", ")", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", ":", ";", "<", "=", ">", "[", "\\", "]", "^", "_", "|", "~", "`", "@");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"ABORT" => "1", 
			"ACTION" => "1", 
			"ADD" => "1", 
			"ADDITEM" => "1", 
			"ADDKEY" => "1", 
			"ALARM" => "1", 
			"ALIAS" => "1", 
			"ALL" => "1", 
			"BACKUP" => "1", 
			"BEEP" => "1", 
			"BUTTON" => "1", 
			"C+" => "1", 
			"C-" => "1", 
			"CAPTURE" => "1", 
			"CASE" => "1", 
			"CHARACTER" => "1", 
			"CLASS" => "1", 
			"CLOSE" => "1", 
			"CLR" => "1", 
			"COLOR" => "1", 
			"CONFIGURE" => "1", 
			"CONNECT" => "1", 
			"CR" => "1", 
			"CW" => "1", 
			"DBCLOSE" => "1", 
			"DBFIRST" => "1", 
			"DBGET" => "1", 
			"DBLOAD" => "1", 
			"DBNEXT" => "1", 
			"DBOFFLINE" => "1", 
			"DBONLINE" => "1", 
			"DBPREV" => "1", 
			"DBPUT" => "1", 
			"DBRESET" => "1", 
			"DBSAVE" => "1", 
			"DDE" => "1", 
			"DEFAULT" => "1", 
			"DELCLASS" => "1", 
			"DELITEM" => "1", 
			"DELKEY" => "1", 
			"DELNITEM" => "1", 
			"DESCRIBE" => "1", 
			"DIR" => "1", 
			"DISCONNECT" => "1", 
			"DOOR" => "1", 
			"ECHO" => "1", 
			"ECHOPROMPT" => "1", 
			"ERASE" => "1", 
			"EVAL" => "1", 
			"EXEC" => "1", 
			"FILE" => "1", 
			"FIND" => "1", 
			"FORALL" => "1", 
			"FREEZE" => "1", 
			"FUNCTION" => "1", 
			"GAG" => "1", 
			"GAGBLOCK" => "1", 
			"GAGOFF" => "1", 
			"GAGON" => "1", 
			"H+" => "1", 
			"H-" => "1", 
			"HELP" => "1", 
			"HIGHLIGHT" => "1", 
			"HISTORY" => "1", 
			"HOST" => "1", 
			"IF" => "1", 
			"IGNORE" => "1", 
			"INPUT" => "1", 
			"KEY" => "1", 
			"KILLALL" => "1", 
			"LAUNCH" => "1", 
			"LMAP" => "1", 
			"LOAD" => "1", 
			"LOG" => "1", 
			"LOOK" => "1", 
			"LOOP" => "1", 
			"LOOPDB" => "1", 
			"LOOPVIEW" => "1", 
			"MAKEROOM" => "1", 
			"MAP" => "1", 
			"MARK" => "1", 
			"MATH" => "1", 
			"MEDIA" => "1", 
			"MENU" => "1", 
			"MERGE" => "1", 
			"MESSAGE" => "1", 
			"MOVE" => "1", 
			"NAME" => "1", 
			"NEW" => "1", 
			"NODEF" => "1", 
			"NODIR" => "1", 
			"NOMAP" => "1", 
			"NOOP" => "1", 
			"OK" => "1", 
			"PATH" => "1", 
			"PAUSE" => "1", 
			"PICK" => "1", 
			"PLAY" => "1", 
			"PLUGIN" => "1", 
			"PROMPT" => "1", 
			"PW" => "1", 
			"QUERY" => "1", 
			"READ" => "1", 
			"RECALL" => "1", 
			"RECORD" => "1", 
			"RENAME" => "1", 
			"RESET" => "1", 
			"RETRACE" => "1", 
			"SAVE" => "1", 
			"SAY" => "1", 
			"SAYPROMPT" => "1", 
			"SCROLL" => "1", 
			"SEND" => "1", 
			"SENDPROMPT" => "1", 
			"SESSION" => "1", 
			"SHOW" => "1", 
			"SHOWDB" => "1", 
			"SHOWPROMPT" => "1", 
			"SLOW" => "1", 
			"STATUS" => "1", 
			"STEP" => "1", 
			"STOP" => "1", 
			"STW" => "1", 
			"SUBSTITUTE" => "1", 
			"T+" => "1", 
			"T-" => "1", 
			"T?" => "1", 
			"TAB" => "1", 
			"TAG" => "1", 
			"TELEPORT" => "1", 
			"TEMP" => "1", 
			"TIMER" => "1", 
			"TRIGGER" => "1", 
			"TS" => "1", 
			"TYPE" => "1", 
			"TZ" => "1", 
			"UNALIAS" => "1", 
			"UNBUTTON" => "1", 
			"UNCLASS" => "1", 
			"UNDIR" => "1", 
			"UNGAG" => "1", 
			"UNKEY" => "1", 
			"UNMENU" => "1", 
			"UNTIL" => "1", 
			"UNTRIGGER" => "1", 
			"UNVAR" => "1", 
			"URL" => "1", 
			"VARIABLE" => "1", 
			"VERBATIM" => "1", 
			"VERSION" => "1", 
			"VIEW" => "1", 
			"WAIT" => "1", 
			"WALK" => "1", 
			"WHILE" => "1", 
			"WINDOW" => "1", 
			"WIZLIST" => "1", 
			"WRAP" => "1", 
			"WRITE" => "1", 
			"YESNO" => "1", 
			"#" => "1", 
			"abs" => "4", 
			"additem" => "4", 
			"addkey" => "4", 
			"alias" => "4", 
			"ansi" => "4", 
			"ascii" => "4", 
			"average" => "4", 
			"begins" => "4", 
			"bitand" => "4", 
			"bitnot" => "4", 
			"bitor" => "4", 
			"bitxor" => "4", 
			"btncol" => "4", 
			"btnimage" => "4", 
			"case" => "4", 
			"char" => "4", 
			"clip" => "4", 
			"color" => "4", 
			"concat" => "4", 
			"copy" => "4", 
			"count" => "4", 
			"countlist" => "4", 
			"db" => "4", 
			"dbget" => "4", 
			"dblist" => "4", 
			"dbmax" => "4", 
			"dbmin" => "4", 
			"dde" => "4", 
			"ddeclose" => "4", 
			"ddemacro" => "4", 
			"ddeopen" => "4", 
			"ddepoke" => "4", 
			"defined" => "4", 
			"delete" => "4", 
			"delitem" => "4", 
			"delkey" => "4", 
			"dice" => "4", 
			"diceavg" => "4", 
			"dicedev" => "4", 
			"dicemax" => "4", 
			"dicemin" => "4", 
			"dups" => "4", 
			"ends" => "4", 
			"eval" => "4", 
			"exec" => "4", 
			"expand" => "4", 
			"filesize" => "4", 
			"find" => "4", 
			"format" => "4", 
			"getglobal" => "4", 
			"grep" => "4", 
			"handle" => "4", 
			"if" => "4", 
			"insert" => "4", 
			"iskey" => "4", 
			"ismember" => "4", 
			"isnumber" => "4", 
			"item" => "4", 
			"lastdir" => "4", 
			"left" => "4", 
			"leftback" => "4", 
			"len" => "4", 
			"literal" => "4", 
			"look" => "4", 
			"lower" => "4", 
			"max" => "4", 
			"min" => "4", 
			"mod" => "4", 
			"null" => "4", 
			"number" => "4", 
			"numbuttons" => "4", 
			"numitems" => "4", 
			"numkeys" => "4", 
			"numparam" => "4", 
			"numrec" => "4", 
			"numrooms" => "4", 
			"numwords" => "4", 
			"numzones" => "4", 
			"param" => "4", 
			"pick" => "4", 
			"pos" => "4", 
			"prompt" => "4", 
			"proper" => "4", 
			"query" => "4", 
			"quote" => "4", 
			"random" => "4", 
			"read" => "4", 
			"remove" => "4", 
			"repeat" => "4", 
			"replace" => "4", 
			"right" => "4", 
			"rightback" => "4", 
			"roomcol" => "4", 
			"roomcom" => "4", 
			"roomcontents" => "4", 
			"roomcost" => "4", 
			"roomdesc" => "4", 
			"roomexit" => "4", 
			"roomflags" => "4", 
			"roomid" => "4", 
			"roomkind" => "4", 
			"roomlink" => "4", 
			"roomload" => "4", 
			"roomname" => "4", 
			"roomnote" => "4", 
			"roomnum" => "4", 
			"roomobj" => "4", 
			"roomportal" => "4", 
			"setglobal" => "4", 
			"sort" => "4", 
			"stdev" => "4", 
			"sum" => "4", 
			"time" => "4", 
			"trigger" => "4", 
			"trim" => "4", 
			"trimleft" => "4", 
			"trimright" => "4", 
			"upper" => "4", 
			"viewrec" => "4", 
			"walk" => "4", 
			"walkmode" => "4", 
			"window" => "4", 
			"word" => "4", 
			"write" => "4", 
			"yesno" => "4", 
			"zonename" => "4", 
			"zonenum" => "4", 
			"%" => "4", 
			"-" => "3", 
			"+" => "3", 
			"=" => "3", 
			"@" => "3");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"4" => "donothing", 
			"3" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
