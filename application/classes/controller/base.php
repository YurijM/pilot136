<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
  public $template = 'v_base';  // Базовый шаблон
  protected $widgets_folder = 'widgets';  // Папка для контроллеров виджетов  

  public function before()
  {
    parent::before();

    $settings = Kohana::$config->load('settings');
    
    // Вывод в шаблон
    $this->template->site_name = $settings->site_name;
    $this->template->site_description = $settings->site_description;
//    $this->template->phone = $settings->phone;
//    $this->template->email = $settings->email;

    $dir_css = $settings->dir_css;
    $dir_js = $settings->dir_js;

    $this->template->page_title = NULL;
    $this->template->dir_img = $settings->dir_img;

    // Подключение стилей и скриптов
    $this->template->styles = array(
//      $dir_css.'menu.css',
//      $dir_css.'slider.css',
      $dir_css.'colorbox.css',
      $dir_css.'bootstrap.min.css',
      $dir_css.'template.css'
    );
    $this->template->scripts = array(
      $dir_js.'jquery.min.js',
//      $dir_js.'jquery.eislideshow.js',
//      $dir_js.'jquery.easing.1.3.js',
//      $dir_js.'jquery.validate.min.js',
//      $dir_js.'messages_ru.min.js',
      $dir_js.'jquery.colorbox-min.js',
      $dir_js.'jquery.colorbox-ru.js',
      $dir_js.'bootstrap.min.js',
      $dir_js.'holder.min.js'
    );
    
    $this->template->menu = Model::factory('menu')->load();

    // Подключение меню:
    //$this->template->menu_left = $this->widget_load('menuleft'); //левое меню
    //$this->template->menu_bottom = $this->widget_load('menu_bottom'); //нижнее меню

    //Подключение метео-информера
    $this->template->meteo = $this->widget_load('meteo');
    //Подключение информера курса валют
    $this->template->currency = $this->widget_load('currency');

    // Подключение блоков
    $this->template->main = NULL;
  }

  public function widget_load($widget)
  {
    return Request::factory($this->widgets_folder.'/'.$widget)->execute();
  }
}
