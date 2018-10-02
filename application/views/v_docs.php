<h4><?=$title?></h4>

<div class="docs container-fluid">
  <? foreach ($docs as $doc): ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img data-src="holder.js/200x280" src="<?=$doc['img']?>" alt="<?=$doc['title']?>">
        <div class="caption">
          <?=$doc['title']?>
        </div>
        <a href="<?=$doc['doc']?>" class="btn btn-xs btn-primary" role="button" target="_blank">Просмотр</a>
      </div>
    </div>
  <? endforeach ?>
</div>