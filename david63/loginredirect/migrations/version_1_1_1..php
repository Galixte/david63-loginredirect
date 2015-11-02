<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\loginredirect\migrations;

class version_1_1_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('david63\loginredirect\migrations\version_1_1_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('redirect_always', '0')),
			array('config.add', array('redirect_global', '0')),

			array('config.remove', array('version_loginredirect')),
		);
	}
}
