<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Photo extends Controller_Base {
	public function action_index()
	{
    $photo = View::factory('v_photo');
    
    $photo->title = 'Фотографии';
    
    $settings = Kohana::$config->load('settings');
    $photo->path = $settings->dir_img_photo;
    $photo->count = $settings->photo_count;

    // Вывод в шаблон
    $this->template->page_title = $photo->title;
    $this->template->main = array($photo);
  }
} 
