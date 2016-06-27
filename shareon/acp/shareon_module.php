<?php
/**
*
* Topics Descriptions extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vinny\shareon\acp;

class shareon_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		$this->config = $config;
		$this->request = $request;

		$user->add_lang('acp/common');
		$user->add_lang_ext('vinny/shareon', 'acp/info_acp_shareon');
		$this->tpl_name = 'acp_shareon';
		$this->page_title = $user->lang['SHARE_ON_MOD'];
		add_form_key('acp_shareon');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_shareon'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('so_status', $request->variable('so_status', true));
			$config->set('so_type', $request->variable('so_type', true));
			$config->set('so_facebook', $request->variable('so_facebook', true));
			$config->set('so_twitter', $request->variable('so_twitter', true));
			$config->set('so_tuenti', $request->variable('so_tuenti', true));
			$config->set('so_sonico', $request->variable('so_sonico', true));
			$config->set('so_friendfeed', $request->variable('so_friendfeed', true));
			$config->set('so_digg', $request->variable('so_digg', true));
			$config->set('so_reddit', $request->variable('so_reddit', true));
			$config->set('so_delicious', $request->variable('so_delicious', true));
			$config->set('so_vk', $request->variable('so_vk', true));
			$config->set('so_tumblr', $request->variable('so_tumblr', true));
			$config->set('so_google', $request->variable('so_google', true));
			$config->set('so_ok', $request->variable('so_ok', true));
			$config->set('so_mymail', $request->variable('so_mymail', true));

			trigger_error($user->lang['SO_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'SO_STATUS'		=> (!empty($this->config['so_status'])) ? true : false,
			'SO_TYPE'		=> (!empty($this->config['so_type'])) ? true : false,
			'SO_FACEBOOK'	=> (!empty($this->config['so_facebook'])) ? true : false,
			'SO_TWITTER'	=> (!empty($this->config['so_twitter'])) ? true : false,
			'SO_TUENTI'		=> (!empty($this->config['so_tuenti'])) ? true : false,
			'SO_SONICO'		=> (!empty($this->config['so_sonico'])) ? true : false,
			'SO_FRIENDFEED'	=> (!empty($this->config['so_friendfeed'])) ? true : false,
			'SO_DIGG'		=> (!empty($this->config['so_digg'])) ? true : false,
			'SO_REDDIT'		=> (!empty($this->config['so_reddit'])) ? true : false,
			'SO_DELICIOUS'	=> (!empty($this->config['so_delicious'])) ? true : false,
			'SO_VK'			=> (!empty($this->config['so_vk'])) ? true : false,
			'SO_TUMBLR'		=> (!empty($this->config['so_tumblr'])) ? true : false,
			'SO_GOOGLE'		=> (!empty($this->config['so_google'])) ? true : false,
			'SO_OK'			=> (!empty($this->config['so_ok'])) ? true : false,
			'SO_MYMAIL'		=> (!empty($this->config['so_mymail'])) ? true : false,
			'U_ACTION'		=> $this->u_action,
		));
	}
}
