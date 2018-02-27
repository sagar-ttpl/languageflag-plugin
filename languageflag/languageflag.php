<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  User.welcomenote
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\Utilities\ArrayHelper;

/**
 * An example custom profile plugin.
 *
 * @since  1.6
 */
class PlgContentLanguageflag extends JPlugin
{
	/**
	 * Runs on content preparation
	 *
	 * @param   object  $context   The context set
	 *
	 * @param   object  &$article  The article set (by reference)
	 *
	 * @param   object  &$param    The parameter set (by reference)
	 *
	 * @param   int     $page      The value of page set
	 *
	 * @return  boolean  $page     The page set
	 *
	 * @since   1.6
	 */
	public function onContentPrepare($context, &$article, &$param, $page = 0)
	{
		$article->text = str_replace("{en}", '<img src="media/mod_languages/images/en.gif" alt="en" />', $article->text);
		$article->text = str_replace("{fr}", '<img src="media/mod_languages/images/fr.gif" alt="fr" />', $article->text);

		return true;
	}
}
