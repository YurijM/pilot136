<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Docs extends Controller_Base {
	public function action_index()
	{
    $doc_type = $this->request->param('type');
    
    $docs = View::factory('v_docs');

		switch ($doc_type)
		{
			case 'certificate':
        $docs->title = 'Свидетельства и паспорта';
				break;
			case 'finance':
        $docs->title = 'Финансовые документы';
				break;
			case 'contract':
        $docs->title = 'Договоры';
				break;
			case 'act':
        $docs->title = 'Акты';
				break;
			case 'protocol':
        $docs->title = 'Протоколы';
				break;
			case 'overhaul':
        $docs->title = 'Капитальный ремонт';
				break;
		}
    
    $docs->docs = Model::factory('docs')->load();
    $docs->docs = $docs->docs[$doc_type];

    // Вывод в шаблон
    $this->template->page_title = $docs->title;
    $this->template->main = array($docs);
  }
} 
