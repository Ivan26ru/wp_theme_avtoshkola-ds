<div class="block_map">
	<div class="bm_wrap_map">

		<?php
		if (!isset($yandexMapNumber)) {//условие для вывода одинаковых карт на одной странице
			$yandexMapNumber = 1; ?>
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<?php
		} else {
			$yandexMapNumber++;
		}
		$yandexMapAttrId = "yandexmap" . $yandexMapNumber;
		$yandexMapInit = "init" . $yandexMapAttrId;
		?>

		<div id="<?php echo $yandexMapAttrId; ?>" style="width: 100%; height: 100%"></div>
		<script>
			function <?php echo $yandexMapInit ?>() {
				icon_fake_style = {
					preset: 'islands#blueCircleDotIconWithCaption',
					iconColor: 'rgba(115,81,132,0.84)'
				};
				var myMap = new ymaps.Map(<?php echo $yandexMapAttrId ?>, {
					center: [55.76, 37.40],
					zoom: 10
				}, {
					searchControlProvider: 'yandex#search'
				});

				// Создаем геообъект с типом геометрии "Точка".
				myMap.geoObjects

						.add(new ymaps.Placemark([55.7331601, 37.4309426], {
							// iconCaption: '1',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.7881601, 37.5409426], {
							// iconCaption: '2',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.7469135, 37.5376734], {
							// iconCaption: '3',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.7069135, 37.4076734], {
							// iconCaption: '4',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.7769135, 37.3576734], {
							// iconCaption: '5',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.8369135, 37.3776734], {
							// iconCaption: '6',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.7969135, 37.4676734], {
							// iconCaption: '7',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.8569135, 37.6676734], {
							// iconCaption: '8',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.7569135, 37.6876734], {
							// iconCaption: '9',
							//balloonContent: '//',
						}, icon_fake_style))
						.add(new ymaps.Placemark([55.8269135, 37.7676734], {
							// iconCaption: '10',
							//balloonContent: '//',
						}, icon_fake_style))

				<?php $args = array(
						'post_type' => 'avtoshkola',
						'nopaging'  => true,

				);
				$query = new WP_Query($args);

				// Цикл
				if ($query->have_posts()) {
				while ($query->have_posts()) {
				$query->the_post();?>
						.add(new ymaps.Placemark([<?php the_field('map_lat'); ?>, <?php the_field('map_lng'); ?>], {
							//balloonContent: '<?php //the_content(); ?>//',
							iconCaption: '<?php the_title(); ?>',
						}, {
							preset: 'islands#dotIcon',
							iconColor: '#735184'
						}))

				<?php }
				} // Постов не найдено

				// Возвращаем оригинальные данные поста. Сбрасываем $post.
				wp_reset_postdata();
				?>
			}// .function init

			ymaps.ready(<?php echo $yandexMapInit ?>);
		</script>

	</div>
	<div class="wrap pe-n">
		<div class="form_map">
			<div class="face">
				<div class="face__item">
					<p class="face__title">Поиск автошколы</p>
					<p class="face__text">Навигация по автошколам Москвы</p>
					<div class="face__cont">
						<?php echo do_shortcode('[contact-form-7 id="32" title="Главная форма"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>