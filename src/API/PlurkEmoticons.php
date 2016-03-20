<?php
/**
 * @file
 * The classes of EternalPlurk.\n
 * Copyright (C) 2011 Cary Chow\n
 * License: http://creativecommons.org/licenses/by-sa/3.0/\n
 * Website: http://www.plurk.com/carychow
 *
 * @package		EternalPlurk
 * @author		Cary Chow <carychowhk@gmail.com>
 * @version		2.0
 * @since		1.0
 */

require_once(dirname(__FILE__) . '/../Setting/PlurkEmoticonsSetting.php');
require_once('PlurkOAuth.php');

/**
 * Emoticons resources of Plurk API.
 *
 * @link	http://www.plurk.com/API#emoticons
 */
class PlurkEmoticons extends PlurkOAuth
{
	// ------------------------------------------------------------------------------------------ //
	
	public function __construct(PlurkEmoticonsSetting $setting)
	{
		parent::__construct($setting);
	}
	
	public function execute()
	{
		switch($this->_setting->type)
		{
			case PlurkEmoticonsSetting::TYPE_GET:	return $this->get();
			case PlurkEmoticonsSetting::TYPE_ADD:	return $this->addFromURL();
			case PlurkEmoticonsSetting::TYPE_DELETE:	return $this->delete();
			default:								return false;
		}		
	}
	
	// ------------------------------------------------------------------------------------------ //

	/**
	 * Emoticons are a big part of Plurk since they make it easy to express feelings.
	 *
	 * @return	mixed	Returns a PlurkEmoticonsInfo object on success or FALSE on failure.
	 * @link	http://www.plurk.com/Help/extraSmilies
	 */
	public function get()
	{
		$url = sprintf('%sEmoticons/get', self::HTTP_URL);

		$this->setResultType(PlurkResponseParser::RESULT_EMOTICONS);
		return $this->sendRequest($url);
	}

	// ------------------------------------------------------------------------------------------ //


	/**
	 * 
	 * @return	mixed	Returns a PlurkEmoticonsInfo object on success or FALSE on failure.
	 * @link	http://www.plurk.com/Help/extraSmilies
	 */
	public function addFromURL()
	{
		$args = array(
			'url' 			=> $this->_setting->url
		);

		if(!empty($this->_setting->keyword))
		{
			$args['keyword'] = $this->_setting->keyword;
		}

		$url = sprintf('%sEmoticons/addFromURL', self::HTTP_URL);

		$this->setResultType(PlurkResponseParser::RESULT_SUCCESS_TEXT);
		return $this->sendRequest($url);
	}

	// ------------------------------------------------------------------------------------------ //
	

	// ------------------------------------------------------------------------------------------ //


	/**
	 * 
	 * @return	mixed	Returns a PlurkEmoticonsInfo object on success or FALSE on failure.
	 * @link	http://www.plurk.com/Help/extraSmilies
	 */
	public function delete()
	{
		$args = array(
			'url' 			=> $this->_setting->url
		);

		$url = sprintf('%sEmoticons/delete', self::HTTP_URL);

		$this->setResultType(PlurkResponseParser::RESULT_SUCCESS_TEXT);
		return $this->sendRequest($url);
	}

	// ------------------------------------------------------------------------------------------ //
}
?>