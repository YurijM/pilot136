<div class="main container-fluid">
  <h4><?=$title?></h4>

  <p>
    <strong>Адрес:&nbsp</strong>357207 Ставропольский край, г.Минеральные Воды, ул.Анджиевского, д.136.
  </p>
  
  <strong>Штат:</strong>
  <dl class="dl-horizontal">
    <? foreach ($directorate['staff'] as $person): ?>
      <dt><?=$person['post']?></dt>
      <dd><?=$person['family']?></dd>
    <? endforeach ?>
  </dl>
  
  <strong>Члены правления:</strong>
  <dl class="dl-horizontal">
    <? foreach ($directorate['board_of_directors'] as $person): ?>
      <dd><?=$person['family']?></dd>
    <? endforeach ?>
  </dl>
  
  <strong>Ревизионная комиссия:</strong>
  <dl class="dl-horizontal">
    <? foreach ($directorate['audit_committee'] as $person): ?>
      <dd><?=$person['family']?></dd>
    <? endforeach ?>
  </dl>
  
  <hr>

  <p>
    <strong>ТСЖ "Пилот"</strong> зарегистрировано <strong>17 июня 2005 года</strong>.
  </p>
  <p>
    Благоустроенный <strong>5</strong>-этажный <strong>100</strong>-квартирный жилой дом. Построен в период с <strong>1985г.</strong> по <strong>1988г.</strong>
  </p>
  <p>
    Общая полезная площадь жилого дома составляет <strong>6127.3 кв.м</strong>, кроме того:
    <ul>
      <li>площадь лестничных клеток составляет <strong>629.2 кв.м</strong>,</li>
      <li>площадь подвального помещения (парикмахерская) - <strong>29.5 кв.м</strong>,</li>
      <li>площадь подвального помещения (магазин) - <strong>282.7 кв.м</strong>,</li>
      <li>площадь помещений, используемых под сараи - <strong>729.1 кв.м</strong>.</li>
    </ul>
    Общий объём жилого дома составляет <strong>32756.0 куб.м</strong>, в т.ч. подвальные помещения - <strong>5054 куб.м</strong>.
  </p>
  
  <hr>

  <p>
    <strong>Реквизиты:</strong>
  </p>
  <? foreach ($props as $prop): ?>
    <div class="property col-lg-1 col-md-1 col-sm-2 col-xs-5">
      <?=$prop['props']?>
    </div>
    <div class="value col-lg-3 col-md-3 col-sm-4 col-xs-7">
      <?=$prop['value']?>
    </div>
  <? endforeach ?>
</div>
