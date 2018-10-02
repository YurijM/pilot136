<?php defined('SYSPATH') or die('No direct script access.');

class Model_Menu extends Model {
  // Меню
  public function load()
  {
    return array(
      array(
        'item' => 'Главная',
        'link' => '/',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Свидетельства и паспорта',
        'link' => 'docs/certificate',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Финансы',
        'link' => 'docs/finance',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Договоры',
        'link' => 'docs/contract',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Акты',
        'link' => 'docs/act',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Протоколы',
        'link' => 'docs/protocol',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Капитальный ремонт',
        'link' => 'docs/overhaul',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Объявления',
        'link' => 'notices',
        'submenu' => NULL,
      ),
      array(
        'item' => 'Фотографии',
        'link' => 'photo',
        'submenu' => NULL,
      )
    );
  }
}