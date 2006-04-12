<?php
 /*
   +----------------------------------------------------------------------------+
   | ILIAS open source                                                          |
   +----------------------------------------------------------------------------+
   | Copyright (c) 1998-2001 ILIAS open source, University of Cologne           |
   |                                                                            |
   | This program is free software; you can redistribute it and/or              |
   | modify it under the terms of the GNU General Public License                |
   | as published by the Free Software Foundation; either version 2             |
   | of the License, or (at your option) any later version.                     |
   |                                                                            |
   | This program is distributed in the hope that it will be useful,            |
   | but WITHOUT ANY WARRANTY; without even the implied warranty of             |
   | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              |
   | GNU General Public License for more details.                               |
   |                                                                            |
   | You should have received a copy of the GNU General Public License          |
   | along with this program; if not, write to the Free Software                |
   | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA. |
   +----------------------------------------------------------------------------+
*/
include_once "./assessment/classes/class.assQuestion.php";
include_once "./assessment/classes/inc.AssessmentConstants.php";

/**
* Class for text questions
*
* ASS_TextQuestion is a class for text questions
*
* @author		Helmut Schottmüller <helmut.schottmueller@mac.com>
* @version	$Id$
* @module   class.assTextQuestion.php
* @modulegroup   Assessment
*/
class ASS_TextQuestion extends ASS_Question
{
	/**
	* Question string
	*
	* The question string of the text question
	*
	* @var string
	*/
	var $question;

	/**
	* Maximum number of characters of the answertext
	*
	* Maximum number of characters of the answertext
	*
	* @var integer
	*/
	var $maxNumOfChars;

	/**
	* Keywords of the question
	*
	* If every keyword in $keywords is found in the question answer,
	* the question will be scored automatically with the maximum points
	*
	* @var string
	*/
	var $keywords;

	/**
	* The method which should be chosen for text comparisons
	*
	* The method which should be chosen for text comparisons
	*
	* @var string
	*/
	var $text_rating;

	/**
	* ASS_TextQuestion constructor
	*
	* The constructor takes possible arguments an creates an instance of the ASS_TextQuestion object.
	*
	* @param string $title A title string to describe the question
	* @param string $comment A comment string to describe the question
	* @param string $author A string containing the name of the questions author
	* @param integer $owner A numerical ID to identify the owner/creator
	* @param string $question The question string of the text question
	* @access public
	* @see ASS_Question:ASS_Question()
	*/
	function ASS_TextQuestion(
		$title = "",
		$comment = "",
		$author = "",
		$owner = -1,
		$question = ""
	  )
	{
		$this->ASS_Question($title, $comment, $author, $owner);
		$this->question = $question;
		$this->maxNumOfChars = 0;
		$this->points = 0;
		$this->keywords = "";
	}

	/**
	* Returns true, if a multiple choice question is complete for use
	*
	* Returns true, if a multiple choice question is complete for use
	*
	* @return boolean True, if the multiple choice question is complete for use, otherwise false
	* @access public
	*/
	function isComplete()
	{
		if (($this->title) and ($this->author) and ($this->question))
		{
			return true;
		}
			else
		{
			return false;
		}
	}

	/**
	* Returns a QTI xml representation of the question
	*
	* Returns a QTI xml representation of the question and sets the internal
	* domxml variable with the DOM XML representation of the QTI xml representation
	*
	* @return string The QTI xml representation of the question
	* @access public
	*/
	function to_xml($a_include_header = true, $a_include_binary = true, $a_shuffle = false, $test_output = false, $force_image_references = false)
	{
		include_once("./classes/class.ilXmlWriter.php");
		$a_xml_writer = new ilXmlWriter;
		// set xml header
		$a_xml_writer->xmlHeader();
		$a_xml_writer->xmlStartTag("questestinterop");
		$attrs = array(
			"ident" => "il_".IL_INST_ID."_qst_".$this->getId(),
			"title" => $this->getTitle()
		);
		$a_xml_writer->xmlStartTag("item", $attrs);
		// add question description
		$a_xml_writer->xmlElement("qticomment", NULL, $this->getComment());
		// add estimated working time
		$workingtime = $this->getEstimatedWorkingTime();
		$duration = sprintf("P0Y0M0DT%dH%dM%dS", $workingtime["h"], $workingtime["m"], $workingtime["s"]);
		$a_xml_writer->xmlElement("duration", NULL, $duration);
		// add ILIAS specific metadata
		$a_xml_writer->xmlStartTag("itemmetadata");
		$a_xml_writer->xmlStartTag("qtimetadata");
		$a_xml_writer->xmlStartTag("qtimetadatafield");
		$a_xml_writer->xmlElement("fieldlabel", NULL, "ILIAS_VERSION");
		$a_xml_writer->xmlElement("fieldentry", NULL, $this->ilias->getSetting("ilias_version"));
		$a_xml_writer->xmlEndTag("qtimetadatafield");
		$a_xml_writer->xmlStartTag("qtimetadatafield");
		$a_xml_writer->xmlElement("fieldlabel", NULL, "QUESTIONTYPE");
		$a_xml_writer->xmlElement("fieldentry", NULL, TEXT_QUESTION_IDENTIFIER);
		$a_xml_writer->xmlEndTag("qtimetadatafield");
		$a_xml_writer->xmlStartTag("qtimetadatafield");
		$a_xml_writer->xmlElement("fieldlabel", NULL, "AUTHOR");
		$a_xml_writer->xmlElement("fieldentry", NULL, $this->getAuthor());
		$a_xml_writer->xmlEndTag("qtimetadatafield");
		$a_xml_writer->xmlEndTag("qtimetadata");
		$a_xml_writer->xmlEndTag("itemmetadata");

		// PART I: qti presentation
		$attrs = array(
			"label" => $this->getTitle()
		);
		$a_xml_writer->xmlStartTag("presentation", $attrs);
		// add flow to presentation
		$a_xml_writer->xmlStartTag("flow");
		// add material with question text to presentation
		$a_xml_writer->xmlStartTag("material");
		$a_xml_writer->xmlElement("mattext", NULL, $this->getQuestion());
		$a_xml_writer->xmlEndTag("material");
		// add information on response rendering
		$attrs = array(
			"ident" => "TEXT",
			"rcardinality" => "Ordered"
		);
		$a_xml_writer->xmlStartTag("response_str", $attrs);
		$attrs = array(
			"fibtype" => "String",
			"prompt" => "Box"
		);
		if ($this->getMaxNumOfChars() > 0)
		{
			$attrs["maxchars"] = $this->getMaxNumOfChars();
		}
		$a_xml_writer->xmlStartTag("render_fib", $attrs);
		$attrs = array(
			"ident" => "A"
		);
		$a_xml_writer->xmlStartTag("response_label", $attrs);
		$a_xml_writer->xmlEndTag("response_label");
		$a_xml_writer->xmlEndTag("render_fib");

		$solution = $this->getSuggestedSolution(0);
		if (count($solution))
		{
			if (preg_match("/il_(\d*?)_(\w+)_(\d+)/", $solution["internal_link"], $matches))
			{
				$a_xml_writer->xmlStartTag("material");
				$intlink = "il_" . IL_INST_ID . "_" . $matches[2] . "_" . $matches[3];
				if (strcmp($matches[1], "") != 0)
				{
					$intlink = $solution["internal_link"];
				}
				$attrs = array(
					"label" => "suggested_solution"
				);
				$a_xml_writer->xmlElement("mattext", $attrs, $intlink);
				$a_xml_writer->xmlEndTag("material");
			}
		}
		$a_xml_writer->xmlEndTag("response_str");
		$a_xml_writer->xmlEndTag("flow");
		$a_xml_writer->xmlEndTag("presentation");

		// PART II: qti resprocessing
		$attrs = array(
			"scoremodel" => "HumanRater"
		);
		$a_xml_writer->xmlStartTag("resprocessing", $attrs);
		$a_xml_writer->xmlStartTag("outcomes");
		$attrs = array(
			"varname" => "WritingScore",
			"vartype" => "Integer",
			"minvalue" => "0",
			"maxvalue" => $this->getPoints()
		);
		$a_xml_writer->xmlStartTag("decvar", $attrs);
		$a_xml_writer->xmlEndTag("decvar");
		$a_xml_writer->xmlEndTag("outcomes");

		$a_xml_writer->xmlStartTag("respcondition");
		$a_xml_writer->xmlStartTag("conditionvar");
		$a_xml_writer->xmlElement("other", NULL, "tutor_rated");
		$a_xml_writer->xmlEndTag("conditionvar");
		$a_xml_writer->xmlEndTag("respcondition");
		$a_xml_writer->xmlEndTag("resprocessing");

		$a_xml_writer->xmlEndTag("item");
		$a_xml_writer->xmlEndTag("questestinterop");

		$xml = $a_xml_writer->xmlDumpMem(FALSE);
		if (!$a_include_header)
		{
			$pos = strpos($xml, "?>");
			$xml = substr($xml, $pos + 2);
		}
		return $xml;
	}

	/**
	* Saves a ASS_TextQuestion object to a database
	*
	* Saves a ASS_TextQuestion object to a database
	*
	* @param object $db A pear DB object
	* @access public
	*/
	function saveToDb($original_id = "")
	{
		global $ilias;

		$complete = 0;
		if ($this->isComplete())
		{
			$complete = 1;
		}
		$db = & $ilias->db;

		$estw_time = $this->getEstimatedWorkingTime();
		$estw_time = sprintf("%02d:%02d:%02d", $estw_time['h'], $estw_time['m'], $estw_time['s']);

		if ($original_id)
		{
			$original_id = $db->quote($original_id);
		}
		else
		{
			$original_id = "NULL";
		}

		if ($this->id == -1)
		{
			// Neuen Datensatz schreiben
			$now = getdate();
			$question_type = $this->getQuestionType();
			$created = sprintf("%04d%02d%02d%02d%02d%02d", $now['year'], $now['mon'], $now['mday'], $now['hours'], $now['minutes'], $now['seconds']);
			$query = sprintf("INSERT INTO qpl_questions (question_id, question_type_fi, obj_fi, title, comment, author, owner, points, question_text, working_time, maxNumOfChars, keywords, textgap_rating, complete, created, original_id, TIMESTAMP) VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, NULL)",
				$db->quote($question_type),
				$db->quote($this->obj_id),
				$db->quote($this->title),
				$db->quote($this->comment),
				$db->quote($this->author),
				$db->quote($this->owner),
				$db->quote($this->getPoints() . ""),
				$db->quote($this->question),
				$db->quote($estw_time),
				$db->quote($this->getMaxNumOfChars()),
				$db->quote($this->getKeywords() . ""),
				$db->quote($this->getTextRating() . ""),
				$db->quote("$complete"),
				$db->quote($created),
				$original_id
			);
			$result = $db->query($query);
			
			if ($result == DB_OK)
			{
				$this->id = $this->ilias->db->getLastInsertId();

				// create page object of question
				$this->createPageObject();

				// Falls die Frage in einen Test eingefügt werden soll, auch diese Verbindung erstellen
				if ($this->getTestId() > 0)
				{
					$this->insertIntoTest($this->getTestId());
				}
			}
		}
		else
		{
			// Vorhandenen Datensatz aktualisieren
			$query = sprintf("UPDATE qpl_questions SET obj_fi = %s, title = %s, comment = %s, author = %s, points = %s, question_text = %s, working_time=%s, maxNumOfChars = %s, keywords = %s, textgap_rating = %s, complete = %s WHERE question_id = %s",
				$db->quote($this->obj_id. ""),
				$db->quote($this->title),
				$db->quote($this->comment),
				$db->quote($this->author),
				$db->quote($this->getPoints() . ""),
				$db->quote($this->question),
				$db->quote($estw_time),
				$db->quote($this->getMaxNumOfChars()),
				$db->quote($this->getKeywords() . ""),
				$db->quote($this->getTextRating() . ""),
				$db->quote("$complete"),
				$db->quote($this->id)
			);
			$result = $db->query($query);
		}
		parent::saveToDb($original_id);
	}

	/**
	* Loads a ASS_TextQuestion object from a database
	*
	* Loads a ASS_TextQuestion object from a database
	*
	* @param object $db A pear DB object
	* @param integer $question_id A unique key which defines the text question in the database
	* @access public
	*/
	function loadFromDb($question_id)
	{
		global $ilias;

		$db = & $ilias->db;
		$query = sprintf("SELECT * FROM qpl_questions WHERE question_id = %s",
		$db->quote($question_id));
		$result = $db->query($query);
		if (strcmp(strtolower(get_class($result)), db_result) == 0)
		{
			if ($result->numRows() == 1)
			{
				$data = $result->fetchRow(DB_FETCHMODE_OBJECT);
				$this->id = $question_id;
				$this->title = $data->title;
				$this->comment = $data->comment;
				$this->solution_hint = $data->solution_hint;
				$this->original_id = $data->original_id;
				$this->obj_id = $data->obj_fi;
				$this->author = $data->author;
				$this->owner = $data->owner;
				$this->question = $data->question_text;
				$this->maxNumOfChars = $data->maxNumOfChars;
				$this->keywords = $data->keywords;
				$this->text_rating = $data->textgap_rating;
				$this->points = $data->points;
				$this->setEstimatedWorkingTime(substr($data->working_time, 0, 2), substr($data->working_time, 3, 2), substr($data->working_time, 6, 2));
			}
		}
		parent::loadFromDb($question_id);
	}

	/**
	* Duplicates an ASS_TextQuestion
	*
	* Duplicates an ASS_TextQuestion
	*
	* @access public
	*/
	function duplicate($for_test = true, $title = "", $author = "", $owner = "")
	{
		if ($this->id <= 0)
		{
			// The question has not been saved. It cannot be duplicated
			return;
		}
		// duplicate the question in database
		$clone = $this;
		include_once ("./assessment/classes/class.assQuestion.php");
		$original_id = ASS_Question::_getOriginalId($this->id);
		$clone->id = -1;
		if ($title)
		{
			$clone->setTitle($title);
		}

		if ($author)
		{
			$clone->setAuthor($author);
		}
		if ($owner)
		{
			$clone->setOwner($owner);
		}

		if ($for_test)
		{
			$clone->saveToDb($original_id);
		}
		else
		{
			$clone->saveToDb();
		}

		// copy question page content
		$clone->copyPageOfQuestion($original_id);

		return $clone->id;
	}

	/**
	* Copies an ASS_TextQuestion object
	*
	* Copies an ASS_TextQuestion object
	*
	* @access public
	*/
	function copyObject($target_questionpool, $title = "")
	{
		if ($this->id <= 0)
		{
			// The question has not been saved. It cannot be duplicated
			return;
		}
		// duplicate the question in database
		$clone = $this;
		include_once ("./assessment/classes/class.assQuestion.php");
		$original_id = ASS_Question::_getOriginalId($this->id);
		$clone->id = -1;
		$source_questionpool = $this->getObjId();
		$clone->setObjId($target_questionpool);
		if ($title)
		{
			$clone->setTitle($title);
		}
		$clone->saveToDb();

		// copy question page content
		$clone->copyPageOfQuestion($original_id);

		return $clone->id;
	}
	
	/**
	* Gets the text question
	*
	* Gets the question string of the ASS_TextQuestion object
	*
	* @return string The question string of the ASS_TextQuestion object
	* @access public
	* @see $question
	*/
	function getQuestion()
	{
		return $this->question;
	}

	/**
	* Sets the text question
	*
	* Sets the question string of the ASS_TextQuestion object
	*
	* @param string $question A string containing the text question
	* @access public
	* @see $question
	*/
	function setQuestion($question = "")
	{
		$this->question = $question;
	}

	/**
	* Gets the maximum number of characters for the text solution
	*
	* Gets the maximum number of characters for the text solution
	*
	* @return integer The maximum number of characters for the text solution
	* @access public
	* @see $maxNumOfChars
	*/
	function getMaxNumOfChars()
	{
		if (strcmp($this->maxNumOfChars, "") == 0)
		{
			return 0;
		}
		else
		{
			return $this->maxNumOfChars;
		}
	}

	/**
	* Sets the maximum number of characters for the text solution
	*
	* Sets the maximum number of characters for the text solution
	*
	* @param integer $maxchars The maximum number of characters for the text solution
	* @access public
	* @see $maxNumOfChars
	*/
	function setMaxNumOfChars($maxchars = 0)
	{
		$this->maxNumOfChars = $maxchars;
	}

	/**
	* Returns the maximum points, a learner can reach answering the question
	*
	* Returns the maximum points, a learner can reach answering the question
	*
	* @access public
	* @see $points
	*/
	function getMaximumPoints()
	{
		return $this->points;
	}

	/**
	* Sets the points, a learner has reached answering the question
	*
	* Sets the points, a learner has reached answering the question
	*
	* @param integer $user_id The database ID of the learner
	* @param integer $test_id The database Id of the test containing the question
	* @param integer $points The points the user has reached answering the question
	* @return boolean true on success, otherwise false
	* @access public
	*/
	function setReachedPoints($user_id, $test_id, $points, $pass = NULL)
	{
		if (($points > 0) && ($points <= $this->getPoints()))
		{
			if (is_null($pass))
			{
				$pass = $this->getSolutionMaxPass($user_id, $test_id);
			}
			$query = sprintf("UPDATE tst_test_result SET points = %s WHERE user_fi = %s AND test_fi = %s AND question_fi = %s AND pass = %s",
				$this->ilias->db->quote($points . ""),
				$this->ilias->db->quote($user_id . ""),
				$this->ilias->db->quote($test_id . ""),
				$this->ilias->db->quote($this->getId() . ""),
				$this->ilias->db->quote($pass . "")
			);
			$result = $this->ilias->db->query($query);
			return true;
		}
			else
		{
			return false;
		}
	}

	/**
	* Sets the points, a learner has reached answering the question
	* Additionally objective results are updated
	*
	* Sets the points, a learner has reached answering the question
	*
	* @param integer $user_id The database ID of the learner
	* @param integer $test_id The database Id of the test containing the question
	* @param integer $points The points the user has reached answering the question
	* @return boolean true on success, otherwise false
	* @access public
	*/
	function _setReachedPoints($user_id, $test_id, $question_id, $points, $maxpoints, $pass = NULL)
	{
		global $ilDB;
		
		if ($points <= $maxpoints)
		{
			if (is_null($pass))
			{
				include_once "./assessment/classes/class.assQuestion.php";
				$pass = ASS_Question::_getSolutionMaxPass($question_id, $user_id, $test_id);
			}
			$query = sprintf("UPDATE tst_test_result SET points = %s WHERE user_fi = %s AND test_fi = %s AND question_fi = %s AND pass = %s",
				$ilDB->quote($points . ""),
				$ilDB->quote($user_id . ""),
				$ilDB->quote($test_id . ""),
				$ilDB->quote($question_id . ""),
				$ilDB->quote($pass . "")
			);
			$result = $this->ilias->db->query($query);

			// finally update objective result
			include_once 'course/classes/class.ilCourseObjectiveResult.php';
			ilCourseObjectiveResult::_updateUserResult($user_id,$question_id,$points);

			return true;
		}
			else
		{
			return false;
		}
	}
	
	/**
	* Checks if one of the keywords matches the answertext
	*
	* Checks if one of the keywords matches the answertext
	*
	* @param string $answertext The answertext of the user
	* @param string $a_keyword The keyword which should be checked
	* @return boolean TRUE if the keyword matches, FALSE otherwise
	* @access private
	*/
	function isKeywordMatching($answertext, $a_keyword)
	{
		$result = FALSE;
		$textrating = $this->getTextRating();
		switch ($textrating)
		{
			case TEXTGAP_RATING_CASEINSENSITIVE:
				if (strpos(strtolower(utf8_decode($a_original)), strtolower(utf8_decode($a_keyword))) !== false) return TRUE;
				break;
			case TEXTGAP_RATING_CASESENSITIVE:
				if (strpos(utf8_decode($a_original), utf8_decode($a_keyword)) !== false) return TRUE;
				break;
		}
		$answerwords = array();
		if (preg_match_all("/([^\s.]+)/", $answertext, $matches))
		{
			foreach ($matches[1] as $answerword)
			{
				array_push($answerwords, trim($answerword));
			}
		}
		foreach ($answerwords as $a_original)
		{
			switch ($textrating)
			{
				case TEXTGAP_RATING_LEVENSHTEIN1:
					if (levenshtein(utf8_decode($a_original), utf8_decode($a_keyword)) <= 1) return TRUE;
					break;
				case TEXTGAP_RATING_LEVENSHTEIN2:
					if (levenshtein(utf8_decode($a_original), utf8_decode($a_keyword)) <= 2) return TRUE;
					break;
				case TEXTGAP_RATING_LEVENSHTEIN3:
					if (levenshtein(utf8_decode($a_original), utf8_decode($a_keyword)) <= 3) return TRUE;
					break;
				case TEXTGAP_RATING_LEVENSHTEIN4:
					if (levenshtein(utf8_decode($a_original), utf8_decode($a_keyword)) <= 4) return TRUE;
					break;
				case TEXTGAP_RATING_LEVENSHTEIN5:
					if (levenshtein(utf8_decode($a_original), utf8_decode($a_keyword)) <= 5) return TRUE;
					break;
			}
		}
		return $result;
	}

	/**
	* Returns the points, a learner has reached answering the question
	*
	* Returns the points, a learner has reached answering the question
	* The points are calculated from the given answers including checks
	* for all special scoring options in the test container.
	*
	* @param integer $user_id The database ID of the learner
	* @param integer $test_id The database Id of the test containing the question
	* @access public
	*/
	function calculateReachedPoints($user_id, $test_id, $pass = NULL)
	{
		global $ilDB;

		$points = 0;
		if (is_null($pass))
		{
			$pass = $this->getSolutionMaxPass($user_id, $test_id);
		}
		$query = sprintf("SELECT * FROM tst_solutions WHERE user_fi = %s AND test_fi = %s AND question_fi = %s AND pass = %s",
			$this->ilias->db->quote($user_id . ""),
			$this->ilias->db->quote($test_id . ""),
			$this->ilias->db->quote($this->getId() . ""),
			$this->ilias->db->quote($pass . "")
		);
		$result = $this->ilias->db->query($query);
		if ($result->numRows() == 1)
		{
			$row = $result->fetchRow(DB_FETCHMODE_ASSOC);
			if ($row["points"])
			{
				$points = $row["points"];
			}
			else
			{
				$keywords =& $this->getKeywordList();
				if (count($keywords))
				{
					$foundkeyword = false;
					foreach ($keywords as $keyword)
					{
						if (!$foundkeyword)
						{
							if ($this->isKeywordMatching($row["value1"], $keyword)) $foundkeyword = true;
						}
					}
					if ($foundkeyword) $points = $this->getMaximumPoints();
				}
			}
		}

		// check for special scoring options in test
		$query = sprintf("SELECT * FROM tst_tests WHERE test_id = %s",
			$ilDB->quote($test_id)
		);
		$result = $ilDB->query($query);
		if ($result->numRows() == 1)
		{
			$row = $result->fetchRow(DB_FETCHMODE_ASSOC);
			if ($row["count_system"] == 1)
			{
				if ($points != $this->getMaximumPoints())
				{
					$points = 0;
				}
			}
		}
		else
		{
			$points = 0;
		}
		return $points;
	}

	/**
	* Returns the evaluation data, a learner has entered to answer the question
	*
	* Returns the evaluation data, a learner has entered to answer the question
	*
	* @param integer $user_id The database ID of the learner
	* @param integer $test_id The database Id of the test containing the question
	* @access public
	*/
	function getReachedInformation($user_id, $test_id, $pass = NULL)
	{
		$found_values = array();
		$query = sprintf("SELECT * FROM tst_solutions WHERE user_fi = %s AND test_fi = %s AND question_fi = %s AND pass = %s",
			$this->ilias->db->quote($user_id . ""),
			$this->ilias->db->quote($test_id . ""),
			$this->ilias->db->quote($this->getId() . ""),
			$this->ilias->db->quote($pass . "")
		);
		$result = $this->ilias->db->query($query);
		$user_result = array();
		while ($data = $result->fetchRow(DB_FETCHMODE_OBJECT))
		{
			$user_result = array(
				"value" => $data->value1
			);
		}
		return $user_result;
	}

	/**
	* Saves the learners input of the question to the database
	*
	* Saves the learners input of the question to the database
	*
	* @param integer $test_id The database id of the test containing this question
  * @return boolean Indicates the save status (true if saved successful, false otherwise)
	* @access public
	* @see $answers
	*/
	function saveWorkingData($test_id, $pass = NULL)
	{
		global $ilDB;
		global $ilUser;

		$db =& $ilDB->db;

		include_once "./assessment/classes/class.ilObjTest.php";
		$activepass = ilObjTest::_getPass($ilUser->id, $test_id);
		
		$query = sprintf("DELETE FROM tst_solutions WHERE user_fi = %s AND test_fi = %s AND question_fi = %s AND pass = %s",
			$db->quote($ilUser->id . ""),
			$db->quote($test_id . ""),
			$db->quote($this->getId() . ""),
			$db->quote($activepass . "")
		);
		$result = $db->query($query);

		$text = ilUtil::stripSlashes($_POST["TEXT"]);
		if ($this->getMaxNumOfChars())
		{
			$text = substr($text, 0, $this->getMaxNumOfChars()); 
		}
		$query = sprintf("INSERT INTO tst_solutions (solution_id, user_fi, test_fi, question_fi, value1, value2, pass, TIMESTAMP) VALUES (NULL, %s, %s, %s, %s, NULL, %s, NULL)",
			$db->quote($ilUser->id . ""),
			$db->quote($test_id . ""),
			$db->quote($this->getId() . ""),
			$db->quote($text . ""),
			$db->quote($activepass . "")
		);
		$result = $db->query($query);
    parent::saveWorkingData($test_id, $pass);
		return true;
	}

	function syncWithOriginal()
	{
		global $ilias;
		if ($this->original_id)
		{
			$complete = 0;
			if ($this->isComplete())
			{
				$complete = 1;
			}
			$db = & $ilias->db;
	
			$estw_time = $this->getEstimatedWorkingTime();
			$estw_time = sprintf("%02d:%02d:%02d", $estw_time['h'], $estw_time['m'], $estw_time['s']);
	
			$query = sprintf("UPDATE qpl_questions SET obj_fi = %s, title = %s, comment = %s, author = %s, question_text = %s, working_time=%s, maxNumOfChars = %s, keywords = %s, textgap_rating = %s, complete = %s WHERE question_id = %s",
				$db->quote($this->obj_id. ""),
				$db->quote($this->title. ""),
				$db->quote($this->comment. ""),
				$db->quote($this->author. ""),
				$db->quote($this->question. ""),
				$db->quote($estw_time. ""),
				$db->quote($this->maxNumOfChars. ""),
				$db->quote($this->getKeywords() . ""),
				$db->quote($this->getTextRating() . ""),
				$db->quote($complete. ""),
				$db->quote($this->original_id. "")
			);
			$result = $db->query($query);

			parent::syncWithOriginal();
		}
	}

	function createRandomSolution($test_id, $user_id)
	{
	}

	/**
	* Returns the question type of the question
	*
	* Returns the question type of the question
	*
	* @return integer The question type of the question
	* @access public
	*/
	function getQuestionType()
	{
		return 8;
	}
	
	/**
	* Returns the keywords of the question
	*
	* Returns the keywords of the question
	*
	* @return string The keywords of the question
	* @access public
	*/
	function getKeywords()
	{
		return $this->keywords;
	}
	
	/**
	* Sets the keywords of the question
	*
	* Sets the keywords of the question
	*
	* @param string $a_keywords The keywords of the question
	* @access public
	*/
	function setKeywords($a_keywords)
	{
		$this->keywords = $a_keywords;
	}
	
	/**
	* Returns the keywords of the question in an array
	*
	* Returns the keywords of the question in an array
	*
	* @return array The keywords of the question
	* @access public
	*/
	function &getKeywordList()
	{
		$keywords = array();
		if (preg_match_all("/([^\s]+)/", $this->keywords, $matches))
		{
			foreach ($matches[1] as $keyword)
			{
				array_push($keywords, trim($keyword));
			}
		}
		return $keywords;
	}

	/**
	* Returns the rating option for text comparisons
	*
	* Returns the rating option for text comparisons
	*
	* @return string The rating option for text comparisons
	* @see $text_rating
	* @access public
	*/
	function getTextRating()
	{
		return $this->text_rating;
	}
	
	/**
	* Sets the rating option for text comparisons
	*
	* Sets the rating option for text comparisons
	*
	* @param string $a_textgap_rating The rating option for text comparisons
	* @see $textgap_rating
	* @access public
	*/
	function setTextRating($a_text_rating)
	{
		switch ($a_text_rating)
		{
			case TEXTGAP_RATING_CASEINSENSITIVE:
			case TEXTGAP_RATING_CASESENSITIVE:
			case TEXTGAP_RATING_LEVENSHTEIN1:
			case TEXTGAP_RATING_LEVENSHTEIN2:
			case TEXTGAP_RATING_LEVENSHTEIN3:
			case TEXTGAP_RATING_LEVENSHTEIN4:
			case TEXTGAP_RATING_LEVENSHTEIN5:
				$this->text_rating = $a_text_rating;
				break;
			default:
				$this->text_rating = TEXTGAP_RATING_CASEINSENSITIVE;
				break;
		}
	}
	

}

?>
