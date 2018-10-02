<h4><?=$title?></h4>

<div class="photo container-fluid">
  <? for ($i = 1; $i <= $count; $i++): ?>
    <a class="hidden-xs cboxElement" href="<?=$path.'img_'.$i.'.jpg'?>">
      <img src="<?=$path.'img_'.$i.'_mini.jpg'?>?>" alt="ТСЖ 'Пилот'">
    </a>
  <img class="hidden-lg hidden-md hidden-sm" src="<?=$path.'img_'.$i.'_mini.jpg'?>?>" alt="ТСЖ 'Пилот'">
  <? endfor ?>
</div>

<script type="text/javascript">
	$(document).ready(function(){
    $(".cboxElement").colorbox({
      rel: true,
      slideshow: true,
      slideshowSpeed: 5000 //5сек
    });
	});
</script>
