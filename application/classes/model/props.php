<?php defined('SYSPATH') or die('No direct script access.');

class Model_Props extends Model {
  // Реквизиты
  public function load()
  {
    return array(
      array(
        'props' => 'ИНН',
        'value' => '2630034901',
      ),
      array(
        'props' => 'КПП',
        'value' => '263001001',
      ),
      array(
        'props' => 'ОГРН',
        'value' => '1052601030360',
      ),
      array(
        'props' => 'ОКПО',
        'value' => '78182781',
      ),
      array(
        'props' => 'ОКОГУ',
        'value' => '49006',
      ),
      array(
        'props' => 'ОКАТО',
        'value' => '07421000000',
      ),
      array(
        'props' => 'ОКТМО',
        'value' => '07639101',
      ),
      array(
        'props' => 'ОКФС',
        'value' => '16',
      ),
      array(
        'props' => 'ОКОНФ',
        'value' => '94',
      ),
      array(
        'props' => 'ОКВЭД',
        'value' => '70.32.1',
      ),
    );
  }
}