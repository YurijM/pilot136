<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Notices extends Controller_Base {
	public function action_index()
	{
    $notices = View::factory('v_notices');

    $settings = Kohana::$config->load('settings');
    $notices->img = $settings->dir_img;
    
    $notices->title = 'Объявления';
    
    $notices->notices = Model::factory('notice')->load();

    // Вывод в шаблон
    $this->template->page_title = $notices->title;
    $this->template->main = array($notices);
  }
} 
