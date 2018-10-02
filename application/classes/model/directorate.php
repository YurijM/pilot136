<?php defined('SYSPATH') or die('No direct script access.');

class Model_Directorate extends Model {
  // Состав правления
  public function load()
  {
    return array(
      'staff' => array(
        array(
          'post' => 'Председатель',
          'family' => 'Беланова Алла Кузьминична',
        ),
        array(
          'post' => 'Бухгалтер',
          'family' => 'Шведова Светлана Сергеевна',
        ),
        array(
          'post' => 'Кассир',
          'family' => 'Попова Наталья Николаевна',
        ),
      ),

      'board_of_directors' => array(
        array(
          'family' => 'Константиненко Валентина Владимировна',
        ),
        array(
          'family' => 'Дибижев Георгий Савельевич',
        ),
        array(
          'family' => 'Глебова Любовь Васильевна',
        ),
        array(
          'family' => 'Калашников Григорий Михайлович',
        ),
        array(
          'family' => 'Иванова Евгения Егоровна',
        ),
        array(
          'family' => 'Коляда Татьяна Александровна',
        ),
        array(
          'family' => 'Трепачко Михаил Васильевич',
        ),
        array(
          'family' => 'Недолуга Сергей Васильевич',
        ),
				array(
					'family' => 'Власенко Ольга',
				),
				array(
					'family' => 'Горовая Ирина Николаевна',
				),
				array(
					'family' => 'Беланова Алла Кузьминична',
				),
      ),
      'audit_committee' => array(
        array(
          'family' => 'Калмыкова Евгения',
        ),
        array(
          'family' => 'Батурина Нина Федоровна',
        ),
        array(
          'family' => 'Моисеева Юлия Ивановна',
        ),
      ),
    );
  }
}