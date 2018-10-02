<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Base {
	public function action_index()
	{
    $main = View::factory('v_main');

    $settings = Kohana::$config->load('settings');
    $main->title = $settings->site_description;
    
    $main->directorate = Model::factory('directorate')->load();
    $main->props = Model::factory('props')->load();

    // Вывод в шаблон
    $this->template->page_title = 'Главная';
    $this->template->main = array($main);
  }
}
