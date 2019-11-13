<?php defined('SYSPATH') or die('No direct script access.');

class Model_Docs extends Model {
  // Реквизиты
  public function load()
  {
    $settings = Kohana::$config->load('settings');

    $img_docs = $settings->dir_img_docs;
    $docs = $settings->dir_docs;
    
    return array(
      'certificate' => array(
        array(
          'title' => 'Свидетельство о государственной регистрации',
          'img' => $img_docs.'registration_certificate.jpg',
          'doc' => $docs.'registration_certificate.pdf',
        ),
        array(
          'title' => 'Свидетельство о постановке на учёт',
          'img' => $img_docs.'registration_certificate_1.jpg',
          'doc' => $docs.'registration_certificate_1.pdf',
        ),
        array(
          'title' => 'Кадастровый паспорт',
          'img' => $img_docs.'cadastral_passport.jpg',
          'doc' => $docs.'cadastral_passport.pdf',
        ),
        array(
          'title' => 'Кадастровый паспорт земельного участка',
          'img' => $img_docs.'cadastral_passport_ground.jpg',
          'doc' => $docs.'cadastral_passport_ground.pdf',
        ),
      ),
      'finance' => array(
				array(
					'title' => 'Финансовый отчёт за 3 квартал 2018г.',
					'img' => $img_docs.'financial_report_2018_3.jpg',
					'doc' => $docs.'financial_report_2018_3.pdf',
				),
				array(
					'title' => 'Финансовый отчёт за 2 квартал 2018г.',
					'img' => $img_docs.'financial_report_2018_2.jpg',
					'doc' => $docs.'financial_report_2018_2.pdf',
				),
				array(
					'title' => 'Отчёт по кассе за 1 полугодие 2018г.',
					'img' => $img_docs.'report_on_checkout_2018_1.jpg',
					'doc' => $docs.'report_on_checkout_2018_1.pdf',
				),
				array(
					'title' => 'Финансовый отчёт за 2017г.',
					'img' => $img_docs.'financial_report_2017.jpg',
					'doc' => $docs.'financial_report_2017.pdf',
				),
				array(
					'title' => 'Отчёт по кассе за 2017г.',
					'img' => $img_docs.'report_on_checkout_2017.jpg',
					'doc' => $docs.'report_on_checkout_2017.pdf',
				),
				array(
					'title' => 'Акт инвентаризации наличных денежных средств за 2017г.',
					'img' => $img_docs.'inventory_act_2017.jpg',
					'doc' => $docs.'inventory_act_2017.pdf',
				),
        array(
          'title' => 'Финансовый отчёт за 2016г.',
          'img' => $img_docs.'financial_report_2016.jpg',
          'doc' => $docs.'financial_report_2016.pdf',
        ),
        array(
          'title' => 'Акт инвентаризации наличных денежных средств',
          'img' => $img_docs.'inventory_act_2016_1.jpg',
          'doc' => $docs.'inventory_act_2016_1.pdf',
        ),
        array(
          'title' => 'Финансовый отчёт за 2 квартал 2016г.',
          'img' => $img_docs.'financial_report_2016_2.jpg',
          'doc' => $docs.'financial_report_2016_2.pdf',
        ),
        array(
          'title' => 'Отчёт по кассе за 2 квартал 2016г.',
          'img' => $img_docs.'report_on_checkout_2016_2.jpg',
          'doc' => $docs.'report_on_checkout_2016_2.pdf',
        ),
        array(
          'title' => 'Финансовый отчёт за 1 квартал 2016г.',
          'img' => $img_docs.'financial_report_2016_1.jpg',
          'doc' => $docs.'financial_report_2016_1.pdf',
        ),
        array(
          'title' => 'Отчёт по кассе за 1 квартал 2016г.',
          'img' => $img_docs.'report_on_checkout_2016_1.jpg',
          'doc' => $docs.'report_on_checkout_2016_1.pdf',
        ),
        array(
          'title' => 'Акт инвентаризации наличных денежных средств',
          'img' => $img_docs.'inventory_act_2015.jpg',
          'doc' => $docs.'inventory_act_2015.pdf',
        ),
        array(
          'title' => 'Финансовый отчёт за 2015г.',
          'img' => $img_docs.'financial_report_2015.jpg',
          'doc' => $docs.'financial_report_2015.pdf',
        ),
        array(
          'title' => 'Отчёт по кассе за 2015г.',
          'img' => $img_docs.'report_on_checkout_2015.jpg',
          'doc' => $docs.'report_on_checkout_2015.pdf',
        ),
        array(
          'title' => 'Финансовый отчёт за 1 квартал 2015г.',
          'img' => $img_docs.'financial_report_2015_1_quarter.jpg',
          'doc' => $docs.'financial_report_2015_1_quarter.pdf',
        ),
        array(
          'title' => 'Финансовый отчёт за 2014г.',
          'img' => $img_docs.'financial_report_2014.jpg',
          'doc' => $docs.'financial_report_2014.pdf',
        ),
      ),
      'contract' => array(
        array(
          'title' => 'Обслуживание вентиляции',
          'img' => $img_docs.'ventilation_2016.jpg',
          'doc' => $docs.'ventilation_2016.pdf',
        ),
        array(
          'title' => 'Аврийное обслуживание',
          'img' => $img_docs.'emergency_services_2018.jpg',
          'doc' => $docs.'emergency_services_2018.pdf',
        ),
        array(
          'title' => 'Вывоз опасных отходов',
          'img' => $img_docs.'export_hazardous_waste_2015.jpg',
          'doc' => $docs.'export_hazardous_waste_2015.pdf',
        ),
        array(
          'title' => 'Испытания системы отопления',
          'img' => $img_docs.'test_heating_systems_2014.jpg',
          'doc' => $docs.'test_heating_systems_2014.pdf',
        ),
        array(
          'title' => 'Оказание услуг учёта тепловой энергии',
          'img' => $img_docs.'keeping_heat_2014.jpg',
          'doc' => $docs.'keeping_heat_2014.pdf',
        ),
        array(
          'title' => 'Проектно-изыскательские работы',
          'img' => $img_docs.'design_work_2013.jpg',
          'doc' => $docs.'design_work_2013.pdf',
        ),
      ),
      'act' => array(
				array(
					'title' => 'Проверка готовности к осенне-зимнему периоду 2017-2018гг',
					'img' => $img_docs.'act_osen_zima_2017_2018.jpg',
					'doc' => $docs.'act_osen_zima_2017_2018.pdf',
				),
				array(
					'title' => 'Акт гидропневматической промывки 2017г.',
					'img' => $img_docs.'act_gidropromivki_2017.jpg',
					'doc' => $docs.'act_gidropromivki_2017.pdf',
				),
				array(
					'title' => 'Акт испытания системы отопления 2017г.',
					'img' => $img_docs.'act_gidravlicheskogo ispitaniya_2017.jpg',
					'doc' => $docs.'act_gidravlicheskogo ispitaniya_2017.pdf',
				),
        array(
          'title' => 'Акт проверки вентиляционных каналов (2014г.)',
          'img' => $img_docs.'act_ventilation_2014.jpg',
          'doc' => $docs.'act_ventilation_2014.pdf',
        )
      ),
      'protocol' => array(
				array(
					'title' => 'Протокол общего собрания от 02.10.2017г.',
					'img' => $img_docs.'protocol_20171002.jpg',
					'doc' => $docs.'protocol_20171002.pdf',
				),
				array(
					'title' => 'Протокол №6 общего собрания от 24.12.2014г.',
					'img' => $img_docs.'protocol_6_20141224.jpg',
					'doc' => $docs.'protocol_6_20141224.pdf',
				)
      ),
      'overhaul' => array(
        array(
          'title' => 'Счёт в Сбербанке',
          'img' => $img_docs.'bank_account.jpg',
          'doc' => $docs.'bank_account.pdf',
        ),
				array(
					'title' => 'Взнос на капремонт за октябрь 2019г.',
					'img' => $img_docs.'payment_201910.jpg',
					'doc' => $docs.'payment_201910.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за сентябрь 2019г.',
					'img' => $img_docs.'payment_201909.jpg',
					'doc' => $docs.'payment_201909.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за август 2019г.',
					'img' => $img_docs.'payment_201908.jpg',
					'doc' => $docs.'payment_201908.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за июль 2019г.',
					'img' => $img_docs.'payment_201907.jpg',
					'doc' => $docs.'payment_201907.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за июнь 2019г.',
					'img' => $img_docs.'payment_201906.jpg',
					'doc' => $docs.'payment_201906.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за май 2019г.',
					'img' => $img_docs.'payment_201905.jpg',
					'doc' => $docs.'payment_201905.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за апрель 2019г.',
					'img' => $img_docs.'payment_201904.jpg',
					'doc' => $docs.'payment_201904.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за март 2019г.',
					'img' => $img_docs.'payment_201903.jpg',
					'doc' => $docs.'payment_201903.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за февраль 2019г.',
					'img' => $img_docs.'payment_201902.jpg',
					'doc' => $docs.'payment_201902.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за январь 2019г.',
					'img' => $img_docs.'payment_201901.jpg',
					'doc' => $docs.'payment_201901.pdf',
				),
				array(
					'title' => 'Изменение размера взносов в фонд капремонта',
					'img' => $img_docs.'vznos.jpg',
					'doc' => $docs.'vznos.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за ноябрь 2018г.',
					'img' => $img_docs.'payment_201811.jpg',
					'doc' => $docs.'payment_201811.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за октябрь 2018г.',
					'img' => $img_docs.'payment_201810.jpg',
					'doc' => $docs.'payment_201810.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за сентябрь 2018г.',
					'img' => $img_docs.'payment_201809.jpg',
					'doc' => $docs.'payment_201809.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за август 2018г.',
					'img' => $img_docs.'payment_201808.jpg',
					'doc' => $docs.'payment_201808.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за июль 2018г.',
					'img' => $img_docs.'payment_201807.jpg',
					'doc' => $docs.'payment_201807.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за июнь 2018г.',
					'img' => $img_docs.'payment_201806.jpg',
					'doc' => $docs.'payment_201806.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за май 2018г.',
					'img' => $img_docs.'payment_201805.jpg',
					'doc' => $docs.'payment_201805.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за апрель 2018г.',
					'img' => $img_docs.'payment_201804.jpg',
					'doc' => $docs.'payment_201804.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за март 2018г.',
					'img' => $img_docs.'payment_201803.jpg',
					'doc' => $docs.'payment_201803.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за февраль 2018г.',
					'img' => $img_docs.'payment_201802.jpg',
					'doc' => $docs.'payment_201802.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за январь 2018г.',
					'img' => $img_docs.'payment_201801.jpg',
					'doc' => $docs.'payment_201801.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за декабрь 2017г.',
					'img' => $img_docs.'payment_201712.jpg',
					'doc' => $docs.'payment_201712.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за ноябрь 2017г.',
					'img' => $img_docs.'payment_201711.jpg',
					'doc' => $docs.'payment_201711.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за октябрь 2017г.',
					'img' => $img_docs.'payment_201710.jpg',
					'doc' => $docs.'payment_201710.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за сентябрь 2017г.',
					'img' => $img_docs.'payment_201709.jpg',
					'doc' => $docs.'payment_201709.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за август 2017г.',
					'img' => $img_docs.'payment_201708.jpg',
					'doc' => $docs.'payment_201708.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за июль 2017г.',
					'img' => $img_docs.'payment_201707.jpg',
					'doc' => $docs.'payment_201707.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за июнь 2017г.',
					'img' => $img_docs.'payment_201706.jpg',
					'doc' => $docs.'payment_201706.pdf',
				),
        array(
          'title' => 'Взнос на капремонт за май 2017г.',
          'img' => $img_docs.'payment_201705.jpg',
          'doc' => $docs.'payment_201705.pdf',
        ),
				array(
					'title' => 'Взнос на капремонт за апрель 2017г.',
					'img' => $img_docs.'payment_201704.jpg',
					'doc' => $docs.'payment_201704.pdf',
				),
				array(
					'title' => 'Взнос на капремонт за март 2017г.',
					'img' => $img_docs.'payment_201703.jpg',
					'doc' => $docs.'payment_201703.pdf',
				),
        array(
          'title' => 'Взнос на капремонт за февраль 2017г.',
          'img' => $img_docs.'payment_201702.jpg',
          'doc' => $docs.'payment_201702.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за январь 2017г.',
          'img' => $img_docs.'payment_201701.jpg',
          'doc' => $docs.'payment_201701.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за декабрь 2016г.',
          'img' => $img_docs.'payment_201612.jpg',
          'doc' => $docs.'payment_201612.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за ноябрь 2016г.',
          'img' => $img_docs.'payment_201611.jpg',
          'doc' => $docs.'payment_201611.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за октябрь 2016г.',
          'img' => $img_docs.'payment_201610.jpg',
          'doc' => $docs.'payment_201610.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за сентябрь 2016г.',
          'img' => $img_docs.'payment_201609.jpg',
          'doc' => $docs.'payment_201609.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за август 2016г.',
          'img' => $img_docs.'payment_201608.jpg',
          'doc' => $docs.'payment_201608.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за июль 2016г.',
          'img' => $img_docs.'payment_201607.jpg',
          'doc' => $docs.'payment_201607.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за июнь 2016г.',
          'img' => $img_docs.'payment_201606.jpg',
          'doc' => $docs.'payment_201606.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за май 2016г.',
          'img' => $img_docs.'payment_201605.jpg',
          'doc' => $docs.'payment_201605.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за апрель 2016г.',
          'img' => $img_docs.'payment_201604.jpg',
          'doc' => $docs.'payment_201604.pdf',
        ),
        array(
          'title' => 'Взнос на капремонт за 2015г., январь, февраль, март 2016г.',
          'img' => $img_docs.'payment_1_3_2016.jpg',
          'doc' => $docs.'payment_1_3_2016.pdf',
        )
      ),
    );
  }
}