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
				var myMap = new ymaps.Map(<?php echo $yandexMapAttrId ?>, {
					center: [55.76, 37.64],
					zoom: 10
				}, {
					searchControlProvider: 'yandex#search'
				});

				// Создаем геообъект с типом геометрии "Точка".

				myMap.geoObjects

				<?php $args = array(
						'post_type' => 'avtoshkola',
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
				} else {
					// Постов не найдено
				}
				// Возвращаем оригинальные данные поста. Сбрасываем $post.
				wp_reset_postdata();
				?>
				;
			}

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