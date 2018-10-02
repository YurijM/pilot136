<h4><?=$title?></h4>

<div class="container-fluid">
  <? foreach ($notices as $notice): ?>
    <div class="notice col-lg-offset-1 col-lg-10 col-lg-offset-1
       col-md-offset-1 col-md-10 col-md-offset-10
       col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
      <div class="thumbtack col-lg-1 col-md-1 col-sm-1 col-xs-1">
        <?=Html::image($img.'thumbtack_l.png', array('class' => 'img-responsive'))?>
      </div>
      <div class="thumbtack col-lg-offset-10 col-lg-1 col-md-offset-10 col-md-1 col-sm-offset-10 col-sm-1 col-xs-offset-10 col-xs-1">
        <?=Html::image($img.'thumbtack_r.png', array('class' => 'img-responsive'))?>
      </div>
      <div class="text text-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?=$notice['text']?>
      </div>
      <hr class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
      <div class="sign text-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?=$notice['date'].'&nbsp;&nbsp;&nbsp;'.$notice['sign']?>
      </div>
    </div>
  <? endforeach ?>
</div>