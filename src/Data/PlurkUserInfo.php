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

class PlurkUserInfo
{
	// ------------------------------------------------------------------------------------------ //

	/**
	 * User's gender. (Male)
	 *
	 * @var	string
	 */
	const GENDER_MALE = 'male';

	/**
	 * User's gender. (Female)
	 *
	 * @var	string
	 */
	const GENDER_FEMALE = 'female';
	
	const BDAY_DONT_SHOW = 0;
	const BDAY_SHOW_MONTH_DAY = 1;
	const BDAY_SHOW_FULL = 2;

	const KEY_ABOUT = 'about';
	const KEY_AVATAR = 'avatar';
	const KEY_AVATAR_BIG = 'avatar_big';
	const KEY_AVATAR_MEDIUM = 'avatar_medium';
	const KEY_AVATAR_SMALL = 'avatar_small';
	const KEY_BDAY_PRIVACY = 'bday_privacy';
	const KEY_DATE_OF_BIRTH = 'date_of_birth';
	const KEY_DATE_FORMAT = 'dateformat';
	const KEY_DEFAULT_LANG = 'default_lang';
	const KEY_DISPLAY_NAME = 'display_name';
	const KEY_EMAIL_CONFIRMED = 'email_confirmed';
	const KEY_FANS_COUNT = 'fans_count';
	const KEY_FRIENDS_COUNT = 'friends_count';
	const KEY_FULL_NAME = 'full_name';
	const KEY_GENDER = 'gender';
	const KEY_HAS_PROFILE_IMAGE = 'has_profile_image';
	const KEY_ID = 'id';
	const KEY_IS_PREMIUM = 'is_premium';
	const KEY_KARMA = 'karma';
	const KEY_LOCATION = 'location';
	const KEY_NAME_COLOR = 'name_color';
	const KEY_NICK_NAME = 'nick_name';
	const KEY_PAGE_TITLE = 'page_title';
	const KEY_PLURKS_COUNT = 'plurks_count';
	const KEY_RECRUITED = 'recruited';
	const KEY_RELATIONSHIP = 'relationship';
	const KEY_TIMEZONE = 'timezone';
	const KEY_UID = 'uid';
	const KEY_VERIFIED_ACCOUNT = 'verified_account';
	

	public $about;
	public $avatar;
	public $avatarBig;
	public $avatarMedium;
	public $avatarSmall;
	public $bdayPrivacy;
	public $dateOfBirth;
	public $dateformat;
	public $defaultLang;
	public $displayName;
	public $emailConfirmed;
	public $fansCount;
	public $fullName;
	public $friendsCount;
	public $gender;//1 is male, 0 is female.
	public $hasProfileImage;
	public $id;
	public $isPremium;
	public $karma;
	public $location;
	public $nameColor;
	public $nickName;
	public $pageTitle;
	public $plurksCount;
	public $recruited;
	public $relationship;
	public $timezone;
	public $uid;
	public $verifiedAccount;
	
}
?>