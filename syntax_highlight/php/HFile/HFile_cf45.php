<?php
$BEAUT_PATH = realpath(".")."/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_cf45 extends HFile{
   function HFile_cf45(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Cold Fusion 4.5
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "brown", "gray", "blue", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("\"");
$this->delimiters        	= array("\"", "#", "~", "!", "@", "%", "^", "&", "*", "(", ")", "+", "|", "\\", "{", "}", "[", "]", ":", ";", "<", ">", " ", ",", "	", ".");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("<!-");
$this->blockcommentoff   	= array("-->");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"AElig" => "1", 
			"Aacute" => "1", 
			"Agrave" => "1", 
			"Atilde" => "1", 
			"Auml" => "1", 
			"<A" => "1", 
			"</A>" => "1", 
			"<ABBR>" => "1", 
			"<ABBR" => "1", 
			"</ABBR>" => "1", 
			"<ABOVE>" => "1", 
			"<ACRONYM>" => "1", 
			"<ACRONYM" => "1", 
			"</ACRONYM>" => "1", 
			"<ADDRESS>" => "1", 
			"<ADDRESS" => "1", 
			"</ADDRESS>" => "1", 
			"<APPLET" => "1", 
			"</APPLET>" => "1", 
			"<ARRAY>" => "1", 
			"<AREA" => "1", 
			"</AREA" => "1", 
			"<B>" => "1", 
			"<B" => "1", 
			"</B>" => "1", 
			"<BASE" => "1", 
			"<BASEFONT" => "1", 
			"<BDO>" => "1", 
			"<BDO" => "1", 
			"</BDO>" => "1", 
			"<BGSOUND" => "1", 
			"<BIG>" => "1", 
			"<BIG" => "1", 
			"</BIG>" => "1", 
			"<BLINK>" => "1", 
			"</BLINK>" => "1", 
			"<BLOCKQUOTE>" => "1", 
			"<BLOCKQUOTE" => "1", 
			"</BLOCKQUOTE>" => "1", 
			"<BODY" => "1", 
			"<BODY>" => "1", 
			"</BODY>" => "1", 
			"<BOX>" => "1", 
			"<BR" => "1", 
			"<BR>" => "1", 
			"<BLINK" => "1", 
			"<BUTTON>" => "1", 
			"</BUTTON>" => "1", 
			"<CAPTION>" => "1", 
			"<CAPTION" => "1", 
			"</CAPTION>" => "1", 
			"<CENTER>" => "1", 
			"<CENTER" => "1", 
			"</CENTER>" => "1", 
			"<CITE>" => "1", 
			"<CITE" => "1", 
			"</CITE>" => "1", 
			"<CODE>" => "1", 
			"<CODE" => "1", 
			"</CODE>" => "1", 
			"<COL>" => "1", 
			"</COL>" => "1", 
			"<COLGROUP>" => "1", 
			"</COLGROUP>" => "1", 
			"<COMMENT>" => "1", 
			"</COMMENT>" => "1", 
			"<DD>" => "1", 
			"<DD" => "1", 
			"</DD>" => "1", 
			"<DEL>" => "1", 
			"<DEL" => "1", 
			"</DEL>" => "1", 
			"<DFN>" => "1", 
			"<DFN" => "1", 
			"</DFN>" => "1", 
			"<DIR>" => "1", 
			"<DIR" => "1", 
			"</DIR>" => "1", 
			"<DIV>" => "1", 
			"<DIV" => "1", 
			"</DIV>" => "1", 
			"<DL>" => "1", 
			"<DL" => "1", 
			"</DL>" => "1", 
			"<DT>" => "1", 
			"<DT" => "1", 
			"</DT>" => "1", 
			"ETH" => "1", 
			"Eacute" => "1", 
			"Ecirc" => "1", 
			"Egrave" => "1", 
			"Euml" => "1", 
			"<EM>" => "1", 
			"<EM" => "1", 
			"</EM>" => "1", 
			"<EMBED" => "1", 
			"<FIELDSET>" => "1", 
			"<FIELDSET" => "1", 
			"</FIELDSET>" => "1", 
			"<FIG>" => "1", 
			"<FONT" => "1", 
			"</FONT>" => "1", 
			"<FORM>" => "1", 
			"<FORM" => "1", 
			"</FORM>" => "1", 
			"<FRAME" => "1", 
			"<FRAMESET" => "1", 
			"</FRAMESET>" => "1", 
			"<H1>" => "1", 
			"<H1" => "1", 
			"</H1>" => "1", 
			"<H2>" => "1", 
			"<H2" => "1", 
			"</H2>" => "1", 
			"<H3>" => "1", 
			"<H3" => "1", 
			"</H3>" => "1", 
			"<H4>" => "1", 
			"<H4" => "1", 
			"</H4>" => "1", 
			"<H5>" => "1", 
			"<H5" => "1", 
			"</H5>" => "1", 
			"<H6>" => "1", 
			"<H6" => "1", 
			"</H6>" => "1", 
			"<HEAD>" => "1", 
			"<HEAD" => "1", 
			"</HEAD>" => "1", 
			"<HR>" => "1", 
			"<HR" => "1", 
			"<HTML>" => "1", 
			"<HTML" => "1", 
			"</HTML>" => "1", 
			"<I>" => "1", 
			"<I" => "1", 
			"</I>" => "1", 
			"<IFRAME>" => "1", 
			"</IFRAME>" => "1", 
			"<ILAYER>" => "1", 
			"</ILAYER>" => "1", 
			"<IMG" => "1", 
			"<INPUT>" => "1", 
			"<INPUT" => "1", 
			"<INS>" => "1", 
			"<INS" => "1", 
			"</INS>" => "1", 
			"<ISINDEX>" => "1", 
			"<ISINDEX" => "1", 
			"<KBD>" => "1", 
			"<KBD" => "1", 
			"</KBD>" => "1", 
			"<LABEL>" => "1", 
			"<LABEL" => "1", 
			"</LABEL>" => "1", 
			"<LAYER>" => "1", 
			"<LEGEND>" => "1", 
			"<LEGEND" => "1", 
			"</LEGEND>" => "1", 
			"<LI>" => "1", 
			"<LI" => "1", 
			"</LI>" => "1", 
			"<LINK" => "1", 
			"<LISTING>" => "1", 
			"</LISTING>" => "1", 
			"<MAP" => "1", 
			"</MAP>" => "1", 
			"<MARQUEE" => "1", 
			"</MARQUEE>" => "1", 
			"<MENU>" => "1", 
			"<MENU" => "1", 
			"</MENU>" => "1", 
			"<META" => "1", 
			"<MULTICOL>" => "1", 
			"</MULTICOL>" => "1", 
			"<NEXTID" => "1", 
			"<NOBR>" => "1", 
			"</NOBR>" => "1", 
			"<NOFRAMES>" => "1", 
			"</NOFRAMES>" => "1", 
			"<NOLAYER>" => "1", 
			"</NOLAYER>" => "1", 
			"<NOTE>" => "1", 
			"</NOTE>" => "1", 
			"<NOSCRIPT>" => "1", 
			"</NOSCRIPT>" => "1", 
			"<OBJECT>" => "1", 
			"<OBJECT" => "1", 
			"<OL>" => "1", 
			"<OL" => "1", 
			"</OL>" => "1", 
			"<OPTION>" => "1", 
			"<OPTION" => "1", 
			"</OPTION>" => "1", 
			"<OPTGROUP>" => "1", 
			"<OPTGROUP" => "1", 
			"</OPTGROUP>" => "1", 
			"<P" => "1", 
			"<P>" => "1", 
			"</P>" => "1", 
			"<PARAM" => "1", 
			"<PRE>" => "1", 
			"<PRE" => "1", 
			"</PRE>" => "1", 
			"<Q>" => "1", 
			"<Q" => "1", 
			"</Q>" => "1", 
			"<QUOTE>" => "1", 
			"<RANGE>" => "1", 
			"<ROOT>" => "1", 
			"<S>" => "1", 
			"<S" => "1", 
			"</S>" => "1", 
			"<SAMP>" => "1", 
			"<SAMP" => "1", 
			"</SAMP>" => "1", 
			"<SCRIPT" => "1", 
			"<SCRIPT>" => "1", 
			"</SCRIPT>" => "1", 
			"<SELECT" => "1", 
			"</SELECT>" => "1", 
			"<SMALL>" => "1", 
			"<SMALL" => "1", 
			"</SMALL>" => "1", 
			"<SOUND" => "1", 
			"<SPACER>" => "1", 
			"<SPAN>" => "1", 
			"<SPAN" => "1", 
			"</SPAN>" => "1", 
			"<SQRT>" => "1", 
			"<STRIKE>" => "1", 
			"<STRIKE" => "1", 
			"</STRIKE>" => "1", 
			"<STRONG>" => "1", 
			"<STRONG" => "1", 
			"</STRONG>" => "1", 
			"<STYLE>" => "1", 
			"<STYLE" => "1", 
			"</STYLE>" => "1", 
			"<SUB>" => "1", 
			"<SUB" => "1", 
			"</SUB>" => "1", 
			"<SUP>" => "1", 
			"<SUP" => "1", 
			"</SUP>" => "1", 
			"<TABLE>" => "1", 
			"<TABLE" => "1", 
			"</TABLE>" => "1", 
			"<TBODY>" => "1", 
			"<TBODY" => "1", 
			"</TBODY>" => "1", 
			"<TD" => "1", 
			"<TD>" => "1", 
			"</TD>" => "1", 
			"<TEXT>" => "1", 
			"<TEXTAREA" => "1", 
			"<TEXTAREA>" => "1", 
			"</TEXTAREA>" => "1", 
			"<TFOOT>" => "1", 
			"<TFOOT" => "1", 
			"</TFOOT>" => "1", 
			"<TH" => "1", 
			"<TH>" => "1", 
			"</TH>" => "1", 
			"<THEAD>" => "1", 
			"<THEAD" => "1", 
			"</THEAD>" => "1", 
			"<TITLE>" => "1", 
			"</TITLE>" => "1", 
			"<TR" => "1", 
			"<TR>" => "1", 
			"</TR>" => "1", 
			"<TT>" => "1", 
			"</TT>" => "1", 
			"<TT" => "1", 
			"<U>" => "1", 
			"<U" => "1", 
			"</U>" => "1", 
			"<UL>" => "1", 
			"<UL" => "1", 
			"</UL>" => "1", 
			"<VAR>" => "1", 
			"</VAR>" => "1", 
			"<VAR" => "1", 
			"<WBR>" => "1", 
			"<XMP>" => "1", 
			"</XMP>" => "1", 
			"<CFABORT>" => "2", 
			"<CFABORT" => "2", 
			"<CFAPPLET>" => "2", 
			"<CFAPPLET" => "2", 
			"<CFAPPLICATION>" => "2", 
			"<CFAPPLICATION" => "2", 
			"<CFASSOCIATE>" => "2", 
			"<CFASSOCIATE" => "2", 
			"<CFAUTHENTICATE>" => "2", 
			"<CFAUTHENTICATE" => "2", 
			"<CFBREAK>" => "2", 
			"<CFBREAK" => "2", 
			"<CFCACHE>" => "2", 
			"<CFCACHE" => "2", 
			"<CFCASE>" => "2", 
			"<CFCASE" => "2", 
			"</CFCASE>" => "2", 
			"<CFCATCH>" => "2", 
			"<CFCATCH" => "2", 
			"</CFCATCH>" => "2", 
			"<CFCOL>" => "2", 
			"<CFCOL" => "2", 
			"<CFCOLLECTION>" => "2", 
			"<CFCOLLECTION" => "2", 
			"<CFCONTENT>" => "2", 
			"<CFCONTENT" => "2", 
			"<CFCOOKIE>" => "2", 
			"<CFCOOKIE" => "2", 
			"<CFDEFAULTCASE>" => "2", 
			"<CFDEFAULTCASE" => "2", 
			"<CFDIRECTORY>" => "2", 
			"<CFDIRECTORY" => "2", 
			"<CFELSE>" => "2", 
			"<CFELSE" => "2", 
			"<CFELSEIF>" => "2", 
			"<CFELSEIF" => "2", 
			"<CFERROR>" => "2", 
			"<CFERROR" => "2", 
			"<CFEXECUTE" => "2", 
			">" => "2", 
			"<CFEXIT>" => "2", 
			"<CFEXIT" => "2", 
			"<CFFILE>" => "2", 
			"<CFFILE" => "2", 
			"<CFFORM>" => "2", 
			"<CFFORM" => "2", 
			"</CFFORM>" => "2", 
			"<CFFTP>" => "2", 
			"<CFFTP" => "2", 
			"<CFGRID>" => "2", 
			"<CFGRID" => "2", 
			"</CFGRID>" => "2", 
			"<CFGRIDCOLUMN>" => "2", 
			"<CFGRIDCOLUMN" => "2", 
			"<CFGRIDROW>" => "2", 
			"<CFGRIDROW" => "2", 
			"<CFGRIDUPDATE>" => "2", 
			"<CFGRIDUPDATE" => "2", 
			"<CFHEADER>" => "2", 
			"<CFHEADER" => "2", 
			"<CFHTMLHEAD>" => "2", 
			"<CFHTMLHEAD" => "2", 
			"<CFHTTP>" => "2", 
			"<CFHTTP" => "2", 
			"</CFHTTP>" => "2", 
			"<CFHTTPPARAM>" => "2", 
			"<CFHTTPPARAM" => "2", 
			"<CFIF>" => "2", 
			"<CFIF" => "2", 
			"</CFIF>" => "2", 
			"<CFIMPERSONATE>" => "2", 
			"<CFIMPERSONATE" => "2", 
			"<CFINCLUDE>" => "2", 
			"<CFINCLUDE" => "2", 
			"<CFINDEX>" => "2", 
			"<CFINDEX" => "2", 
			"<CFINPUT>" => "2", 
			"<CFINPUT" => "2", 
			"<CFINSERT>" => "2", 
			"<CFINSERT" => "2", 
			"<CFLDAP>" => "2", 
			"<CFLDAP" => "2", 
			"<CFLOCATION>" => "2", 
			"<CFLOCATION" => "2", 
			"<CFLOCK>" => "2", 
			"<CFLOCK" => "2", 
			"<CFLOOP>" => "2", 
			"<CFLOOP" => "2", 
			"</CFLOOP>" => "2", 
			"<CFMAIL>" => "2", 
			"<CFMAIL" => "2", 
			"</CFMAIL><CFMAILPARAM>" => "2", 
			"<CFMAILPARAM" => "2", 
			"<CFMODULE>" => "2", 
			"<CFMODULE" => "2", 
			"<CFOBJECT>" => "2", 
			"<CFOBJECT" => "2", 
			"<CFOUTPUT>" => "2", 
			"<CFOUTPUT" => "2", 
			"</CFOUTPUT>" => "2", 
			"<CFPARAM>" => "2", 
			"<CFPARAM" => "2", 
			"<CFPOP>" => "2", 
			"<CFPOP" => "2", 
			"<CFPROCESSINGDIRECTIVE>" => "2", 
			"<CFPROCESSINGDIRECTIVE" => "2", 
			"</CFPROCESSINGDIRECTIVE>" => "2", 
			"<CFPROCPARAM>" => "2", 
			"<CFPROCPARAM" => "2", 
			"<CFPROCRESULT>" => "2", 
			"<CFPROCRESULT" => "2", 
			"<CFQUERY>" => "2", 
			"<CFQUERY" => "2", 
			"</CFQUERY>" => "2", 
			"<CFQUERYPARAM>" => "2", 
			"<CFQUERYPARAM" => "2", 
			"<CFREGISTRY>" => "2", 
			"<CFREGISTRY" => "2", 
			"<CFREPORT>" => "2", 
			"<CFREPORT" => "2", 
			"</CFREPORT>" => "2", 
			"<CFRETHROW>" => "2", 
			"<CFRETHROW" => "2", 
			"<CFSCHEDULE>" => "2", 
			"<CFSCHEDULE" => "2", 
			"<CFSCRIPT>" => "2", 
			"<CFSCRIPT" => "2", 
			"</CFSCRIPT>" => "2", 
			"<CFSEARCH>" => "2", 
			"<CFSEARCH" => "2", 
			"<CFSELECT>" => "2", 
			"<CFSELECT" => "2", 
			"</CFSELECT>" => "2", 
			"<CFSERVLET>" => "2", 
			"<CFSERVLET" => "2", 
			"</CFSERVLET>" => "2", 
			"<CFSERVLETPARAM" => "2", 
			"<CFSET>" => "2", 
			"<CFSET" => "2", 
			"<CFSETTING>" => "2", 
			"<CFSETTING" => "2", 
			"<CFSILENT>" => "2", 
			"<CFSILENT" => "2", 
			"<CFSLIDER>" => "2", 
			"<CFSLIDER" => "2", 
			"<CFSTOREDPROC>" => "2", 
			"<CFSTOREDPROC" => "2", 
			"<CFSWITCH>" => "2", 
			"<CFSWITCH" => "2", 
			"</CFSWITCH>" => "2", 
			"<CFTABLE>" => "2", 
			"<CFTABLE" => "2", 
			"</CFTABLE>" => "2", 
			"<CFTEXTINPUT>" => "2", 
			"<CFTEXTINPUT" => "2", 
			"<CFTHROW>" => "2", 
			"<CFTHROW" => "2", 
			"<CFTRANSACTION>" => "2", 
			"<CFTRANSACTION" => "2", 
			"</CFTRANSACTION>" => "2", 
			"<CFTREE>" => "2", 
			"<CFTREE" => "2", 
			"</CFTREE>" => "2", 
			"<CFTREEITEM>" => "2", 
			"<CFTREEITEM" => "2", 
			"<CFTRY>" => "2", 
			"<CFTRY" => "2", 
			"</CFTRY>" => "2", 
			"<CFUPDATE" => "2", 
			"<CFWDDX>" => "2", 
			"<CFWDDX" => "2", 
			"ACCEPT=" => "4", 
			"ACTION=" => "4", 
			"ADDTOKEN=" => "3", 
			"AGENTNAME=" => "3", 
			"ALIGN=" => "4", 
			"APPENDKEY=" => "3", 
			"APPLETSOURCE=" => "3", 
			"APPLICATIONTIMEOUT=" => "3", 
			"ARGUMENTS=" => "3", 
			"ATTACHMENTPATH=" => "3", 
			"ATTRIBUTE=" => "3", 
			"ATTRIBUTES=" => "3", 
			"AbsBottom=" => "3", 
			"AbsMiddle=" => "3", 
			"BASETAG=" => "3", 
			"BGCOLOR=" => "4", 
			"BLOCKFACTOR=" => "3", 
			"BODY=" => "3", 
			"BORDER=" => "4", 
			"Baseline=" => "3", 
			"Bottom=" => "3", 
			"CACHE=" => "3", 
			"CACHEDIRECTORY=" => "3", 
			"CATCHEXCEPTIONSBYPATTERN=" => "3", 
			"CC=" => "3", 
			"CFML2JS" => "3", 
			"CFML2WDDX" => "3", 
			"CFSQLTYPE" => "3", 
			"CHECKED=" => "3", 
			"CLASS=" => "4", 
			"CLIENTCACHE=" => "3", 
			"CLIENTMANAGEMENT=" => "3", 
			"CODE=" => "4", 
			"COLHEADERALIGN=" => "3", 
			"COLHEADERBOLD=" => "3", 
			"COLHEADERFONT=" => "3", 
			"COLHEADERFONTSIZE=" => "3", 
			"COLHEADERITALIC=" => "3", 
			"COLHEADERS=" => "3", 
			"COLLECTION=" => "3", 
			"COLSPACING=" => "3", 
			"COLUMNS=" => "3", 
			"COMPLETEPATH" => "3", 
			"CONNECTION=" => "3", 
			"CONTEXT=" => "3", 
			"CRITERIA=" => "3", 
			"DATA=" => "4", 
			"DATAALIGN=" => "3", 
			"DATACOLLECTION=" => "3", 
			"DATASOURCE=" => "3", 
			"DBNAME=" => "3", 
			"DBSERVER=" => "3", 
			"DBVARNAME=" => "3", 
			"DEBUG=" => "3", 
			"DEFAULT=" => "3", 
			"DELETE=" => "3", 
			"DELETEBUTTON=" => "3", 
			"DELETEFILE=" => "3", 
			"DELIMITER=" => "3", 
			"DELIMITERS=" => "3", 
			"DESTINATION=" => "3", 
			"DETAIL" => "3", 
			"DIRECTORY=" => "3", 
			"DISPLAY=" => "3", 
			"DN=" => "3", 
			"DOMAIN=" => "3", 
			"ENABLECAB=" => "3", 
			"ENABLECFOUTPUTONLY=" => "3", 
			"ENDDATE=" => "3", 
			"ENDTIME=" => "3", 
			"ERRORCODE=" => "3", 
			"EXPAND=" => "3", 
			"EXPIRES=" => "3", 
			"EXPIREURL=" => "3", 
			"EXPRESSION=" => "3", 
			"EXTENDEDINFO=" => "3", 
			"EXTENSIONS=" => "3", 
			"EXTERNAL=" => "3", 
			"FILE=" => "3", 
			"FILEFIELD=" => "3", 
			"FILTER=" => "3", 
			"FLUSH=" => "3", 
			"FONT=" => "3", 
			"FONTSIZE=" => "3", 
			"FORMFIELDS=" => "3", 
			"FROM=" => "3", 
			"GRID=" => "3", 
			"GRIDDATAALIGN=" => "3", 
			"GRIDLINES=" => "3", 
			"GROOVECOLOR=" => "3", 
			"GROUP=" => "3", 
			"HEADER=" => "3", 
			"HEADERALIGN=" => "3", 
			"HEADERBOLD=" => "3", 
			"HEADERFONT=" => "3", 
			"HEADERFONTSIZE=" => "3", 
			"HEADERITALIC=" => "3", 
			"HEADERLINES" => "3", 
			"HEIGHT=" => "4", 
			"HIGHLIGHTHREF=" => "3", 
			"HREF=" => "4", 
			"HREFKEY=" => "3", 
			"HSCROLL=" => "3", 
			"HSPACE=" => "4", 
			"HTMLTABLE=" => "3", 
			"IMG=" => "3", 
			"IMGOPEN=" => "3", 
			"IMGSTYLE=" => "3", 
			"INDEX=" => "3", 
			"INPUT=" => "3", 
			"INSERT=" => "3", 
			"INSERTBUTTON=" => "3", 
			"INTERVAL=" => "3", 
			"ISOLATION=" => "3", 
			"ITALIC=" => "3", 
			"JRUNPROXY=" => "3", 
			"KEY=" => "3", 
			"KEYONLY=" => "3", 
			"LABEL=" => "4", 
			"LANGUAGE=" => "4", 
			"LIST=" => "3", 
			"Left=" => "3", 
			"MAILTO=" => "4", 
			"MAXLENGTH=" => "4", 
			"MAXROWS=" => "3", 
			"MESSAGE=" => "3", 
			"MESSAGENUMBER=" => "3", 
			"METHOD=" => "4", 
			"MIMEATTACH=" => "3", 
			"MODE=" => "3", 
			"MULTIPLE=" => "3", 
			"Middle=" => "3", 
			"NAME=" => "4", 
			"NAMECONFLICT=" => "3", 
			"NEWDIRECTORY=" => "3", 
			"NOTSUPPORTED=" => "3", 
			"NULL=" => "3", 
			"NUMBERFORMAT=" => "3", 
			"ONERROR=" => "3", 
			"ONSUBMIT=" => "4", 
			"ONVALIDATE=" => "3", 
			"OPERATION=" => "3", 
			"OPTIMAL=" => "3", 
			"ORDERBY=" => "3", 
			"OUTPUT=" => "3", 
			"OUTPUTFILE=" => "3", 
			"PARENT=" => "3", 
			"PASSWORD=" => "3", 
			"PATH=" => "3", 
			"PICTUREBAR=" => "3", 
			"PORT=" => "3", 
			"PROCEDURE=" => "3", 
			"PROTOCOL=" => "3", 
			"PROVIDER=" => "3", 
			"PROVIDERDSN=" => "3", 
			"PROXYSERVER=" => "3", 
			"PUBLISH=" => "3", 
			"QUERY=" => "3", 
			"QUERYASROOT=" => "3", 
			"RANGE=" => "3", 
			"RECURSE=" => "3", 
			"REFRESHLABEL=" => "3", 
			"REPORT=" => "3", 
			"REQUESTTIMEOUT=" => "3", 
			"REQUIRED=" => "3", 
			"RESOLVEURL=" => "3", 
			"RESULTSET=" => "3", 
			"RETRYCOUNT=" => "3", 
			"RETURNCODE=" => "3", 
			"ROWHEADER=" => "3", 
			"ROWHEADERALIGN=" => "3", 
			"ROWHEADERBOLD=" => "3", 
			"ROWHEADERFONT=" => "3", 
			"ROWHEADERFONTSIZE=" => "3", 
			"ROWHEADERITALIC=" => "3", 
			"ROWHEADERWIDTH=" => "3", 
			"ROWHEIGHT=" => "3", 
			"Right=" => "3", 
			"SCALE=" => "3", 
			"SCOPE=" => "4", 
			"SECURE=" => "3", 
			"SECURITYCONTEXT=" => "3", 
			"SELECT=" => "3", 
			"SELECTCOLOR=" => "3", 
			"SELECTED" => "4", 
			"SELECTMODE=" => "3", 
			"SERVER=" => "3", 
			"SESSIONMANAGEMENT=" => "3", 
			"SESSIONTIMEOUT=" => "3", 
			"SETCOOKIE=" => "3", 
			"SHOWDEBUGOUTPUT=" => "3", 
			"SHOWERROR=" => "3", 
			"SIZE=" => "4", 
			"SORT=" => "3", 
			"SORTDESCENDINGBUTTON=" => "3", 
			"SOURCE=" => "3", 
			"START=" => "4", 
			"STARTDATE=" => "3", 
			"STARTROW=" => "3", 
			"STARTTIME=" => "3", 
			"STEP=" => "3", 
			"STOPONERROR=" => "3", 
			"SUBJECT=" => "3", 
			"SUPPRESSWHITESPACE=" => "3", 
			"TABLENAME=" => "3", 
			"TABLEOWNER=" => "3", 
			"TABLEQUALIFIER=" => "3", 
			"TARGET=" => "4", 
			"TASK=" => "3", 
			"TEMPLATE=" => "3", 
			"TEXT=" => "4", 
			"TEXTCOLOR=" => "3", 
			"TEXTQUALIFIER=" => "3", 
			"THROWONFAILURE=" => "3", 
			"THROWONTIMEOUT=" => "3", 
			"TIMEOUT=" => "3", 
			"TITLE=" => "4", 
			"TO=" => "3", 
			"TOPLEVELVARIABLE=" => "3", 
			"TYPE=" => "4", 
			"TextTop=" => "3", 
			"Top=" => "3", 
			"URL=" => "4", 
			"URLPATH=" => "3", 
			"USERNAME=" => "3", 
			"USETIMEZONEINFO=" => "3", 
			"VALIDATE=" => "3", 
			"VALUE=" => "4", 
			"VARIABLE=" => "3", 
			"VSCROLL=" => "3", 
			"VSPACE=" => "4", 
			"WDDX2CFML" => "3", 
			"WDDX2JS" => "3", 
			"WIDTH=" => "4", 
			"WRITEOUTPUT=" => "3", 
			"ABBR=" => "4", 
			"ACCEPT-CHARSET=" => "4", 
			"ACCESSKEY=" => "4", 
			"ALINK=" => "4", 
			"ALT=" => "4", 
			"ARCHIVE=" => "4", 
			"AXIS=" => "4", 
			"amp" => "4", 
			"aacute" => "4", 
			"acirc" => "4", 
			"acute" => "4", 
			"aelig" => "4", 
			"agrave" => "4", 
			"aring" => "4", 
			"atilde" => "4", 
			"auml" => "4", 
			"BACKGROUND=" => "4", 
			"BEHAVIOR" => "4", 
			"BELOW" => "4", 
			"brvbar" => "4", 
			"ccedil" => "4", 
			"cedil" => "4", 
			"circ" => "4", 
			"Ccedil" => "4", 
			"copy" => "4", 
			"curren" => "4", 
			"CELLPADDING=" => "4", 
			"CELLSPACING=" => "4", 
			"CHAR=" => "4", 
			"CHAROFF=" => "4", 
			"CHARSET=" => "4", 
			"CHECKED" => "4", 
			"CITE=" => "4", 
			"CLASSID=" => "4", 
			"CLEAR=" => "4", 
			"CODEBASE=" => "4", 
			"CODETYPE=" => "4", 
			"COLOR=" => "4", 
			"COLS=" => "4", 
			"COLSPAN=" => "4", 
			"COMPACT" => "4", 
			"CONTENT=" => "4", 
			"COORDS=" => "4", 
			"cent" => "4", 
			"deg" => "4", 
			"DATETIME=" => "4", 
			"DECLARE" => "4", 
			"DEFER" => "4", 
			"DIR=" => "4", 
			"DISABLED" => "4", 
			"divide" => "4", 
			"ENCTYPE=" => "4", 
			"eacute" => "4", 
			"ecirc" => "4", 
			"egrave" => "4", 
			"euml" => "4", 
			"FACE=" => "4", 
			"FOR=" => "4", 
			"FRAME=" => "4", 
			"FRAMEBORDER=" => "4", 
			"FRAMESPACING=" => "4", 
			"frac12" => "4", 
			"frac14" => "4", 
			"frac34" => "4", 
			"gt" => "4", 
			"HEADERS=" => "4", 
			"HIDDEN=" => "4", 
			"HREFLANG=" => "4", 
			"HTTP-EQUIV=" => "4", 
			"ID=" => "4", 
			"ISMAP=" => "4", 
			"iexcl" => "4", 
			"Iacute" => "4", 
			"Icirc" => "4", 
			"Igrave" => "4", 
			"Iuml" => "4", 
			"iacute" => "4", 
			"icirc" => "4", 
			"ieth" => "4", 
			"igrave" => "4", 
			"iquest" => "4", 
			"iuml" => "4", 
			"LANG=" => "4", 
			"LINK=" => "4", 
			"LOOP=" => "4", 
			"LONGDESC=" => "4", 
			"lt" => "4", 
			"laquo" => "4", 
			"leftmargin=" => "4", 
			"MARGINHEIGHT=" => "4", 
			"MARGINWIDTH=" => "4", 
			"MEDIA=" => "4", 
			"MULTIPLE" => "4", 
			"macr" => "4", 
			"micro" => "4", 
			"middot" => "4", 
			"NOHREF" => "4", 
			"NORESIZE" => "4", 
			"NOSHADE" => "4", 
			"nbsp" => "4", 
			"not" => "4", 
			"Ntilde" => "4", 
			"ntilde" => "4", 
			"oacute" => "4", 
			"ocirc" => "4", 
			"ograve" => "4", 
			"ordm" => "4", 
			"oslash" => "4", 
			"otilde" => "4", 
			"ouml" => "4", 
			"Oacute" => "4", 
			"Ocirc" => "4", 
			"Ograve" => "4", 
			"Oslash" => "4", 
			"Otilde" => "4", 
			"Ouml" => "4", 
			"ordf" => "4", 
			"OBJECT=" => "4", 
			"ONBLUR=" => "4", 
			"ONCHANGE=" => "4", 
			"ONFOCUS=" => "4", 
			"ONKEYDOWN=" => "4", 
			"ONKEYPRESS=" => "4", 
			"ONKEYUP=" => "4", 
			"ONLOAD=" => "4", 
			"ONRESET=" => "4", 
			"ONSELECT=" => "4", 
			"ONUNLOAD=" => "4", 
			"ONCLICK=" => "4", 
			"ONDBLCLICK=" => "4", 
			"ONMOUSEDOWN=" => "4", 
			"ONMOUSEMOVE=" => "4", 
			"ONMOUSEOUT=" => "4", 
			"ONMOUSEOVER=" => "4", 
			"ONMOUSEUP=" => "4", 
			"pound" => "4", 
			"quot" => "4", 
			"PROFILE=" => "4", 
			"PROMPT=" => "4", 
			"plusmn" => "4", 
			"para" => "4", 
			"READONLY" => "4", 
			"REL=" => "4", 
			"REV=" => "4", 
			"ROWS=" => "4", 
			"ROWSPAN=" => "4", 
			"RULES=" => "4", 
			"reg" => "4", 
			"raquo" => "4", 
			"ring" => "4", 
			"sup1" => "4", 
			"szlig" => "4", 
			"shy" => "4", 
			"SCHEME=" => "4", 
			"SCROLLING=" => "4", 
			"SHAPE=" => "4", 
			"SPAN=" => "4", 
			"SRC=" => "4", 
			"STANDBY=" => "4", 
			"STYLE=" => "4", 
			"SUMMARY=" => "4", 
			"sect" => "4", 
			"sup2" => "4", 
			"sup3" => "4", 
			"thorn" => "4", 
			"times" => "4", 
			"THORN" => "4", 
			"TABINDEX=" => "4", 
			"TOPMARGIN=" => "4", 
			"uacute" => "4", 
			"ucirc" => "4", 
			"ugrave" => "4", 
			"uuml" => "4", 
			"Uacute" => "4", 
			"Ucirc" => "4", 
			"Ugrave" => "4", 
			"Uuml" => "4", 
			"USEMAP=" => "4", 
			"uml" => "4", 
			"VALIGN=" => "4", 
			"VALUETYPE=" => "4", 
			"VERSION=" => "4", 
			"VLINK=" => "4", 
			"yen" => "4", 
			"Yacute" => "4", 
			"yacute" => "4", 
			"yuml" => "4", 
			"Abs" => "5", 
			"ACos" => "5", 
			"ArrayAppend" => "5", 
			"ArrayAvg" => "5", 
			"ArrayClear" => "5", 
			"ArrayDeleteAt" => "5", 
			"ArrayInsertAt" => "5", 
			"ArrayIsEmpty" => "5", 
			"ArrayLen" => "5", 
			"ArrayMax" => "5", 
			"ArrayMin" => "5", 
			"ArrayNew" => "5", 
			"ArrayPrepend" => "5", 
			"ArrayResize" => "5", 
			"ArraySet" => "5", 
			"ArraySort" => "5", 
			"ArraySum" => "5", 
			"ArraySwap" => "5", 
			"ArrayToList" => "5", 
			"Asc" => "5", 
			"ASin" => "5", 
			"Atn" => "5", 
			"AuthenticatedContext" => "5", 
			"AuthenticatedUser" => "5", 
			"BitAnd" => "5", 
			"BitMaskClear" => "5", 
			"BitMaskRead" => "5", 
			"BitMaskSet" => "5", 
			"BitNot" => "5", 
			"BitOr" => "5", 
			"BitSHLN" => "5", 
			"BitSHRN" => "5", 
			"BitXor" => "5", 
			"Ceiling" => "5", 
			"Chr" => "5", 
			"CJustify" => "5", 
			"Compare" => "5", 
			"CompareNoCase" => "5", 
			"Cos" => "5", 
			"CreateDate" => "5", 
			"CreateDateTime" => "5", 
			"CreateObject" => "5", 
			"CreateODBCDate" => "5", 
			"CreateODBCDateTime" => "5", 
			"CreateODBCTime" => "5", 
			"CreateTime" => "5", 
			"CreateTimeSpan" => "5", 
			"CreateUUID" => "5", 
			"DateAdd" => "5", 
			"DateCompare" => "5", 
			"DateConvert" => "5", 
			"DateDiff" => "5", 
			"DateFormat" => "5", 
			"DatePart" => "5", 
			"Day" => "5", 
			"DayOfWeek" => "5", 
			"DayOfWeekAsString" => "5", 
			"DayOfYear" => "5", 
			"DaysInMonth" => "5", 
			"DaysInYear" => "5", 
			"DecimalFormat" => "5", 
			"DecrementValue" => "5", 
			"Decrypt" => "5", 
			"DeleteClientVariable" => "5", 
			"DirectoryExists" => "5", 
			"DollarFormat" => "5", 
			"Encrypt" => "5", 
			"Evaluate" => "5", 
			"Exp" => "5", 
			"ExpandPath" => "5", 
			"FileExists" => "5", 
			"Find" => "5", 
			"FindNoCase" => "5", 
			"FindOneOf" => "5", 
			"FirstDayOfMonth" => "5", 
			"Fix" => "5", 
			"FormatBaseN" => "5", 
			"GetBaseTagData" => "5", 
			"GetBaseTagList" => "5", 
			"GetBaseTemplatePath" => "5", 
			"GetClientVariablesList" => "5", 
			"GetCurrentTemplatePath" => "5", 
			"GetDirectoryFromPath" => "5", 
			"GetFileFromPath" => "5", 
			"GetFunctionList" => "5", 
			"GetLocale" => "5", 
			"GetMetricData" => "5", 
			"GetProfileString" => "5", 
			"GetTempDirectory" => "5", 
			"GetTempFile" => "5", 
			"GetTemplatePath" => "5", 
			"GetTickCount" => "5", 
			"GetTimeZoneInfo" => "5", 
			"GetToken" => "5", 
			"Hour" => "5", 
			"HTMLCodeFormat" => "5", 
			"HTMLEditFormat" => "5", 
			"IIf" => "5", 
			"IncrementValue" => "5", 
			"InputBaseN" => "5", 
			"Insert" => "5", 
			"Int" => "5", 
			"IsArray" => "5", 
			"IsAuthenticated" => "5", 
			"IsAuthorized" => "5", 
			"IsBinary" => "5", 
			"IsBoolean" => "5", 
			"IsDate" => "5", 
			"IsDebugMode" => "5", 
			"IsDefined" => "5", 
			"IsLeapYear" => "5", 
			"IsNumeric" => "5", 
			"IsNumericDate" => "5", 
			"IsProtected" => "5", 
			"IsQuery" => "5", 
			"IsSimpleValue" => "5", 
			"IsStruct" => "5", 
			"JSStringFormat" => "5", 
			"LCase" => "5", 
			"Left" => "5", 
			"Len" => "5", 
			"ListAppend" => "5", 
			"ListChangeDelims" => "5", 
			"ListContains" => "5", 
			"ListContainsNoCase" => "5", 
			"ListDeleteAt" => "5", 
			"ListFind" => "5", 
			"ListFindNoCase" => "5", 
			"ListFirst" => "5", 
			"ListGetAt" => "5", 
			"ListInsertAt" => "5", 
			"ListLast" => "5", 
			"ListLen" => "5", 
			"ListPrepend" => "5", 
			"ListQualify" => "5", 
			"ListRest" => "5", 
			"ListSetAt" => "5", 
			"ListSort" => "5", 
			"ListToArray" => "5", 
			"ListValueCount" => "5", 
			"ListValueCountNoCase" => "5", 
			"LJustify" => "5", 
			"Log" => "5", 
			"Log10" => "5", 
			"LSCurrencyFormat" => "5", 
			"LSDateFormat" => "5", 
			"LSEuroCurrencyFormat" => "5", 
			"LSIsCurrency" => "5", 
			"LSIsDate" => "5", 
			"LSIsNumeric" => "5", 
			"LSNumberFormat" => "5", 
			"LSParseCurrency" => "5", 
			"LSParseDateTime" => "5", 
			"LSParseEuroCurrency" => "5", 
			"LSParseNumber" => "5", 
			"LSTimeFormat" => "5", 
			"LTrim" => "5", 
			"Max" => "5", 
			"Mid" => "5", 
			"Min" => "5", 
			"Minute" => "5", 
			"Month" => "5", 
			"MonthAsString" => "5", 
			"Now" => "5", 
			"NumberFormat" => "5", 
			"ParagraphFormat" => "5", 
			"ParameterExists" => "5", 
			"ParseDateTime" => "5", 
			"PreserveSingleQuotes" => "5", 
			"Quarter" => "5", 
			"QueryAddColumn" => "5", 
			"QueryAddRow" => "5", 
			"QueryNew" => "5", 
			"QuerySetCell" => "5", 
			"QuotedValueList" => "5", 
			"Rand" => "5", 
			"Randomize" => "5", 
			"RandRange" => "5", 
			"REFind" => "5", 
			"REFindNoCase" => "5", 
			"RemoveChars" => "5", 
			"RepeatString" => "5", 
			"Replace" => "5", 
			"ReplaceList" => "5", 
			"ReplaceNoCase" => "5", 
			"REReplace" => "5", 
			"REReplaceNoCase" => "5", 
			"Reverse" => "5", 
			"Right" => "5", 
			"RJustify" => "5", 
			"Round" => "5", 
			"RTrim" => "5", 
			"Second" => "5", 
			"SetLocale" => "5", 
			"SetProfileString" => "5", 
			"SetVariable" => "5", 
			"Sgn" => "5", 
			"Sin" => "5", 
			"SpanExcluding" => "5", 
			"SpanIncluding" => "5", 
			"Sqr" => "5", 
			"StripCR" => "5", 
			"StructClear" => "5", 
			"StructCopy" => "5", 
			"StructCount" => "5", 
			"StructDelete" => "5", 
			"StructFind" => "5", 
			"StructInsert" => "5", 
			"StructIsEmpty" => "5", 
			"StructKeyArray" => "5", 
			"StructKeyExists" => "5", 
			"StructKeyList" => "5", 
			"StructNew" => "5", 
			"StructUpdate" => "5", 
			"Tan" => "5", 
			"TimeFormat" => "5", 
			"ToBase64" => "5", 
			"ToBinary" => "5", 
			"ToString" => "5", 
			"Trim" => "5", 
			"UCase" => "5", 
			"URLDecode" => "5", 
			"URLEncodedFormat" => "5", 
			"Val" => "5", 
			"ValueList" => "5", 
			"Week" => "5", 
			"WriteOutput" => "5", 
			"XMLFormat" => "5", 
			"Year" => "5", 
			"YesNoFormat" => "5", 
			"AND" => "6", 
			"EQ" => "6", 
			"EQV" => "6", 
			"GT" => "6", 
			"GTE" => "6", 
			"GE" => "6", 
			"IMP" => "6", 
			"LESS" => "6", 
			"LT" => "6", 
			"NEQ" => "6", 
			"NOT" => "6", 
			"OR" => "6", 
			"XOR" => "6");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"4" => "donothing", 
			"3" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
