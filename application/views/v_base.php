<!DOCTYPE html>
<html>
<head>
	<title><?= $site_name ?> - <?= $page_title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Скрипт для работы новых тэгов HTML5 в браузерах IE ниже версии 9 -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?
	foreach ($styles as $file_style):
		echo html::style($file_style);
	endforeach;
	foreach ($scripts as $file_script):
		echo html::script($file_script);
	endforeach;
	?>
	<noscript>
		<link rel="stylesheet" type="text/css" href="/media/css/noscript.css"/>
	</noscript>
</head>
<body>
<noscript>
	<div style="background-color: yellow; border: 1px solid black; height: 22px; padding: 2px;">
		Для полной функциональности этого сайта необходимо включить JavaScript.
		<a href="http://www.enable-javascript.com/ru/">Здесь</a> инструкции, как включить JavaScript в вашем браузере.
	</div>
</noscript>

<div class="wrapper container">

	<header class="row">
		<img class="img-responsive" alt="ТСЖ Пилот" src="<?= $dir_img ?>header.png">
	</header>

	<div class="middle row">

		<aside class="left-sidebar col-lg-2 col-md-2 col-sm-3 col-xs-4">
			<ul id='menu_left' class="nav nav-pills nav-stacked">
				<? foreach ($menu as $item): ?>
					<? if ($item['submenu']): ?>
						<li class="dropdown">
							<?= Html::anchor($item['link'], $item['item'] . '<span class="caret"></span>',
								array(
									'class' => 'dropdown-toggle',
									'data-toggle' => 'dropdown'
								)
							) ?>
							<ul class="dropdown-menu">
								<? $submenu = $item['submenu']; ?>
								<? foreach ($submenu as $subitem): ?>
									<li><?= Html::anchor($subitem['link'], $subitem['item']) ?></li>
								<? endforeach ?>
							</ul>
						</li>
					<? else: ?>
						<li><?= Html::anchor($item['link'], $item['item']) ?></li>
					<? endif ?>
				<? endforeach ?>
			</ul>

			<div class="meteo hidden-xs">
				<?= $meteo ?>
			</div>

			<div class="currency hidden-xs">
				<?= $currency ?>
			</div>
		</aside><!-- .left-sidebar -->

		<main class="content col-lg-10 col-md-10 col-sm-9 col-xs-8">
			<?
			if (isset($main)):
				foreach ($main as $block):
					echo $block;
				endforeach;
			endif;
			?>
		</main><!-- .content -->

	</div><!-- .middle-->

	<footer class="row">
		<strong><?= $site_description ?></strong>
		<hr>
		<div class="container-fluid" style="margin-top:5px">
			<? foreach ($menu as $item): ?>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<?= Html::anchor($item['link'], $item['item']) ?>
				</div>
			<? endforeach ?>
		</div>
	</footer>

</div><!-- .wrapper -->
</body>
<script>
  $(document).ready(function () {
    var controller = '<?=Request::current()->controller()?>';
    var param = '<?=Request::current()->param("type")?>';
    if (param !== '') {
      param = '/' + param;
    }

    if (controller !== 'main') {
      $('#menu_left > li').removeClass('active');
      //$('[href = ""]').parent().addClass('open');

      var current = $('[href = "/' + controller + param + '"]').parent('li');
      if (current.parent('ul.dropdown-menu').length > 0)
        current = current.parent('ul.dropdown-menu').parent();

      current.addClass('active');
    }
    else
      $('#menu_left > li:first').addClass('active');

  });
</script>
</html>

