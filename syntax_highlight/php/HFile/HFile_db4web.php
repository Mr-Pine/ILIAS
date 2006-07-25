<?php
$BEAUT_PATH = realpath(".")."/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_db4web extends HFile{
   function HFile_db4web(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// 
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "+", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"/L10" => "", 
			"\"DB4Web\"" => "", 
			"Line" => "", 
			"Comment" => "", 
			"=" => "", 
			"#" => "", 
			"Nocase" => "", 
			"Noquote" => "", 
			"HTML_LANG" => "", 
			"Block" => "", 
			"On" => "", 
			"<!--" => "", 
			"Off" => "", 
			"-->" => "", 
			"File" => "", 
			"Extensions" => "", 
			"HTM" => "", 
			"HTML" => "", 
			"JS" => "", 
			"DB4" => "", 
			"INC" => "", 
			"D4W" => "", 
			"\"*\"" => "", 
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
			"<LAYER" => "1", 
			"</LAYER>" => "1", 
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
			"ABBR=" => "2", 
			"ACCEPT-CHARSET=" => "2", 
			"ACCEPT=" => "2", 
			"ACCESSKEY=" => "2", 
			"ACTION=" => "2", 
			"ALIGN=" => "2", 
			"ALINK=" => "2", 
			"ALT=" => "2", 
			"ARCHIVE=" => "2", 
			"AXIS=" => "2", 
			"BACKGROUND=" => "2", 
			"BEHAVIOR" => "2", 
			"BELOW" => "2", 
			"BGCOLOR=" => "2", 
			"BORDER=" => "2", 
			"CELLPADDING=" => "2", 
			"CELLSPACING=" => "2", 
			"CHAR=" => "2", 
			"CHAROFF=" => "2", 
			"CHARSET=" => "2", 
			"CHECKED" => "2", 
			"CITE=" => "2", 
			"CLASS=" => "2", 
			"CLASSID=" => "2", 
			"CLEAR=" => "2", 
			"CODE=" => "2", 
			"CODEBASE=" => "2", 
			"CODETYPE=" => "2", 
			"COLOR=" => "2", 
			"COLS=" => "2", 
			"COLSPAN=" => "2", 
			"COMPACT" => "2", 
			"CONTENT=" => "2", 
			"COORDS=" => "2", 
			"DATA=" => "2", 
			"DATETIME=" => "2", 
			"DECLARE" => "2", 
			"DEFER" => "2", 
			"DIR=" => "2", 
			"DISABLED" => "2", 
			"ENCTYPE=" => "2", 
			"FACE=" => "2", 
			"FOR=" => "2", 
			"FRAME=" => "2", 
			"FRAMEBORDER=" => "2", 
			"FRAMESPACING=" => "2", 
			"HEADERS=" => "2", 
			"HEIGHT=" => "2", 
			"HIDDEN=" => "2", 
			"HREF=" => "2", 
			"HREFLANG=" => "2", 
			"HSPACE=" => "2", 
			"HTTP-EQUIV=" => "2", 
			"ID=" => "2", 
			"ISMAP=" => "2", 
			"LABEL=" => "2", 
			"LANG=" => "2", 
			"LANGUAGE=" => "2", 
			"LINK=" => "2", 
			"LOOP=" => "2", 
			"LONGDESC=" => "2", 
			"MAILTO=" => "2", 
			"MARGINHEIGHT=" => "2", 
			"MARGINWIDTH=" => "2", 
			"MAXLENGTH=" => "2", 
			"MEDIA=" => "2", 
			"METHOD=" => "2", 
			"MULTIPLE" => "2", 
			"NAME=" => "2", 
			"NOHREF" => "2", 
			"NORESIZE" => "2", 
			"NOSHADE" => "2", 
			"OBJECT=" => "2", 
			"ONBLUR=" => "2", 
			"ONCHANGE=" => "2", 
			"ONFOCUS=" => "2", 
			"ONKEYDOWN=" => "2", 
			"ONKEYPRESS=" => "2", 
			"ONKEYUP=" => "2", 
			"ONLOAD=" => "2", 
			"ONRESET=" => "2", 
			"ONSELECT=" => "2", 
			"ONSUBMIT=" => "2", 
			"ONUNLOAD=" => "2", 
			"ONCLICK=" => "2", 
			"ONDBLCLICK=" => "2", 
			"ONMOUSEDOWN=" => "2", 
			"ONMOUSEMOVE=" => "2", 
			"ONMOUSEOUT=" => "2", 
			"ONMOUSEOVER=" => "2", 
			"ONMOUSEUP=" => "2", 
			"PROFILE=" => "2", 
			"PROMPT=" => "2", 
			"READONLY" => "2", 
			"REL=" => "2", 
			"REV=" => "2", 
			"ROWS=" => "2", 
			"ROWSPAN=" => "2", 
			"RULES=" => "2", 
			"SCHEME=" => "2", 
			"SCOPE=" => "2", 
			"SCROLLING=" => "2", 
			"SELECTED" => "2", 
			"SHAPE=" => "2", 
			"SIZE=" => "2", 
			"SPAN=" => "2", 
			"SRC=" => "2", 
			"STANDBY=" => "2", 
			"START=" => "2", 
			"STYLE=" => "2", 
			"SUMMARY=" => "2", 
			"TABINDEX=" => "2", 
			"TARGET=" => "2", 
			"TEXT=" => "2", 
			"TITLE=" => "2", 
			"TOPMARGIN=" => "2", 
			"TYPE=" => "2", 
			"URL=" => "2", 
			"USEMAP=" => "2", 
			"VALIGN=" => "2", 
			"VALUE=" => "2", 
			"VALUETYPE=" => "2", 
			"VERSION=" => "2", 
			"VLINK=" => "2", 
			"VSPACE=" => "2", 
			"WIDTH=" => "2", 
			"AUTOCOMMITOFF" => "3", 
			"AUTOCOMMITON" => "3", 
			"COMMIT" => "3", 
			"CleanupIFR" => "3", 
			"ConnectObject" => "3", 
			"DATA" => "3", 
			"DEBUGOFF" => "3", 
			"DEBUGON" => "3", 
			"DISCONNECT" => "3", 
			"DO" => "3", 
			"DIRECTEXEC" => "3", 
			"ELSE" => "3", 
			"ENDDATA" => "3", 
			"ENDDOWHILE" => "3", 
			"ENDIF" => "3", 
			"ENDEXEC" => "3", 
			"ENDONERROR" => "3", 
			"ENDSQL" => "3", 
			"ENDSTATEMENT" => "3", 
			"ENDTRANSLATIONTABLE" => "3", 
			"ENDTRANSLATIONTABLEVAR" => "3", 
			"ENDWHILE" => "3", 
			"EXEC" => "3", 
			"EXIT" => "3", 
			"EXPORT" => "3", 
			"FETCH" => "3", 
			"function" => "3", 
			"for" => "3", 
			"FeedIDL" => "3", 
			"hexoperand" => "3", 
			"IF" => "3", 
			"include" => "3", 
			"intOperand" => "3", 
			"integerOperand" => "3", 
			"lineOperand" => "3", 
			"LOCKMODE" => "3", 
			"ONERROR" => "3", 
			"or" => "3", 
			"returnOperand" => "3", 
			"ROLLBACK" => "3", 
			"RUN" => "3", 
			"SET" => "3", 
			"SOFTFETCH" => "3", 
			"SQL" => "3", 
			"STARTFETCH" => "3", 
			"stringOperand" => "3", 
			"THEN" => "3", 
			"TRANSLATIONTABLE" => "3", 
			"TRANSLATIONTABLEVAR" => "3", 
			"true" => "3", 
			"UFETCH" => "3", 
			"var" => "3", 
			"WHILE" => "3", 
			"wordOperand" => "3", 
			"as" => "4", 
			"by" => "4", 
			"create" => "4", 
			"crypt" => "4", 
			"date" => "4", 
			"delete" => "4", 
			"describe" => "4", 
			"existfile" => "4", 
			"existvar" => "4", 
			"fak" => "4", 
			"fclose" => "4", 
			"fcmp" => "4", 
			"fdiff" => "4", 
			"fdiv" => "4", 
			"fgets" => "4", 
			"fgetline" => "4", 
			"fmult" => "4", 
			"fopen" => "4", 
			"fpow" => "4", 
			"fputs" => "4", 
			"fputline" => "4", 
			"from" => "4", 
			"fsum" => "4", 
			"group" => "4", 
			"having" => "4", 
			"hextoint" => "4", 
			"hexstrtostr" => "4", 
			"init_cap" => "4", 
			"inttohex" => "4", 
			"insert" => "4", 
			"in" => "4", 
			"into" => "4", 
			"like" => "4", 
			"ln" => "4", 
			"log" => "4", 
			"lower" => "4", 
			"ltrim" => "4", 
			"mtime" => "4", 
			"not" => "4", 
			"order" => "4", 
			"pow" => "4", 
			"random" => "4", 
			"reportevent" => "4", 
			"rtrim" => "4", 
			"select" => "4", 
			"sqrt" => "4", 
			"stackcreate" => "4", 
			"stacklevel" => "4", 
			"stackpull" => "4", 
			"stackpush" => "4", 
			"stackremove" => "4", 
			"strlen" => "4", 
			"strline" => "4", 
			"strpos" => "4", 
			"strrpos" => "4", 
			"strreplace" => "4", 
			"strsub" => "4", 
			"strtlc" => "4", 
			"strtoint" => "4", 
			"strtohexstr" => "4", 
			"strword" => "4", 
			"table" => "4", 
			"update" => "4", 
			"upper" => "4", 
			"values" => "4", 
			"where" => "4", 
			"_adabas_cBinaryFormat" => "5", 
			"_buildDate" => "5", 
			"_buildLevel" => "5", 
			"_buildOS" => "5", 
			"_buildVersion" => "5", 
			"_cacheDir" => "5", 
			"_cacheSize" => "5", 
			"_cacheTimeout" => "5", 
			"_cgi_" => "5", 
			"_colCount" => "5", 
			"_colName" => "5", 
			"_cryptKey" => "5", 
			"_data_" => "5", 
			"_dateFormat" => "5", 
			"_dateInput" => "5", 
			"_db4webHost" => "5", 
			"_debug" => "5", 
			"_decrypt_" => "5", 
			"_driverList" => "5", 
			"_downcase" => "5", 
			"_encrypt_" => "5", 
			"_errorMessage" => "5", 
			"_errorDb" => "5", 
			"_errorUser" => "5", 
			"_errorVendor" => "5", 
			"_execReturn" => "5", 
			"_fetchstatus" => "5", 
			"_filename" => "5", 
			"_floatFormat" => "5", 
			"_httpdAUTH_TYPE" => "5", 
			"_httpdGATEWAY_INTERFACE" => "5", 
			"_httpdHTTP_ACCEPT" => "5", 
			"_httpdHTTPS_CIPHER" => "5", 
			"_httpdHTTP_CONNECTION" => "5", 
			"_httpdHTTP_COOKIE" => "5", 
			"_httpdHTTP_FORWARDED" => "5", 
			"_httpdHTTP_HOST" => "5", 
			"_httpdHTTP_PROXY_CONNECTION" => "5", 
			"_httpdHTTP_REFERER" => "5", 
			"_httpdHTTP_TRANSONUID" => "5", 
			"_httpdHTTP_USER_AGENT" => "5", 
			"_httpdHTTPS" => "5", 
			"_httpdHTTPS_KEYSIZE" => "5", 
			"_httpdHTTPS_SECRETKEYSIZE" => "5", 
			"_httpdHTTPS_CHIPER" => "5", 
			"_httpdPATH_INFO" => "5", 
			"_httpdPATH_TRANSLATED" => "5", 
			"_httpdREFERER_URL" => "5", 
			"_httpdREMOTE_ADDR" => "5", 
			"_httpdREMOTE_HOST" => "5", 
			"_httpdREMOTE_IDENT" => "5", 
			"_httpdREMOTE_PORT" => "5", 
			"_httpdREMOTE_USER" => "5", 
			"_httpdREQUEST_METHOD" => "5", 
			"_httpdSCRIPT_NAME" => "5", 
			"_httpdSCRIPT_FILENAME" => "5", 
			"_httpdSERVER_NAME" => "5", 
			"_httpdSERVER_PORT" => "5", 
			"_httpdSERVER_PROTOCOL" => "5", 
			"_httpdSERVER_SOFTWARE" => "5", 
			"_httpdSSL_CIPHER" => "5", 
			"_httpdSSL_CIPHER_ALGKEYSIZE" => "5", 
			"_httpdSSL_CIPHER_EXPORT" => "5", 
			"_httpdSSL_CIPHER_USEKEYSIZE" => "5", 
			"_httpdSSL_CLIENT_I_DN" => "5", 
			"_httpdSSL_CLIENT_I_DN_C" => "5", 
			"_httpdSSL_CLIENT_I_DN_CN" => "5", 
			"_httpdSSL_CLIENT_I_DN_Email" => "5", 
			"_httpdSSL_CLIENT_I_DN_L" => "5", 
			"_httpdSSL_CLIENT_I_DN_O" => "5", 
			"_httpdSSL_CLIENT_I_DN_OU" => "5", 
			"_httpdSSL_CLIENT_I_DN_ST" => "5", 
			"_httpdSSL_CLIENT_M_SERIAL" => "5", 
			"_httpdSSL_CLIENT_M_VERSION" => "5", 
			"_httpdSSL_CLIENT_S_DN" => "5", 
			"_httpdSSL_CLIENT_S_DN_C" => "5", 
			"_httpdSSL_CLIENT_S_DN_CN" => "5", 
			"_httpdSSL_CLIENT_S_DN_Email" => "5", 
			"_httpdSSL_CLIENT_S_DN_L" => "5", 
			"_httpdSSL_CLIENT_S_DN_O" => "5", 
			"_httpdSSL_CLIENT_S_DN_OU" => "5", 
			"_httpdSSL_CLIENT_S_DN_ST" => "5", 
			"_httpdSSL_CLIENT_VERIFY" => "5", 
			"_httpdSSL_CLIENT_V_END" => "5", 
			"_httpdSSL_CLIENT_V_START" => "5", 
			"_httpdSSL_PROTOCOL" => "5", 
			"_httpdSSL_SERVER_M_SERIAL" => "5", 
			"_httpdSSL_SERVER_M_VERSION" => "5", 
			"_httpdSSL_SERVER_S_DN" => "5", 
			"_httpdSSL_SERVER_V_END" => "5", 
			"_httpdSSL_SERVER_V_START" => "5", 
			"_httpdSSL_SESSION_ID" => "5", 
			"_httpdSSL_VERSION_INTERFACE" => "5", 
			"_httpdSSL_VERSION_LIBRARY" => "5", 
			"_lang" => "5", 
			"_localfile" => "5", 
			"_method" => "5", 
			"_multi" => "5", 
			"_money_" => "5", 
			"_moneyFormat" => "5", 
			"_port" => "5", 
			"_quote_" => "5", 
			"_quoteFormat" => "5", 
			"_readfile_" => "5", 
			"_returnMessage" => "5", 
			"_returnStatus" => "5", 
			"_rowCount" => "5", 
			"_rowNum" => "5", 
			"_sqlPrecision" => "5", 
			"_sqlScale" => "5", 
			"_status" => "5", 
			"_statusText" => "5", 
			"_strlineSeparator" => "5", 
			"_strwordSeparator" => "5", 
			"_syntaxTrace" => "5", 
			"_syntaxVersion" => "5", 
			"_timeout" => "5", 
			"_timeoutDetected" => "5", 
			"_timeoutContinue" => "5", 
			"_trans_" => "5", 
			"_useCache" => "5", 
			"_utf8Decode_" => "5", 
			"_web" => "5", 
			"_webHost" => "5");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"" => "donothing", 
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
