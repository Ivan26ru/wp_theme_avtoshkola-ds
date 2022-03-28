
document.addEventListener( 'wpcf7invalid', function( event ) {
  SPU.show(3031);
}, false );


// Автошколы Москвы slider
$('.responsive').slick({
  infinite: false,
  speed: 300,
  rows: 2,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1220,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// Лицензии slider
$('.license__cont').slick({
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1220,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 768,
      dots: true,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// Инструкторы slider
$('.instru__cont').slick({
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1220,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 768,
      dots: true,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.menu__burger').click(function() {
  $('.menu__list').toggleClass('d-block');
  $('.menu__burger span').toggleClass('active');
})

//Отзывы
$('.feedback__cont').slick({
  infinite: false,
  rows: 2,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1220,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 768,
      dots: true,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// Pop-up close

$('.wpcf7-response-output').click(function(){
  $('.wpcf7-response-output').addClass('close')
});


/*
*  new_map
*
*  Эта функция рендерит Google карту внутри выбранного jQuery элемента
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $el (jQuery элемент)
*  @return  n/a
*/

function new_map( $el ) {
  
  // Переменные
  var $markers = $el.find('.marker');
  
  
  // Переменные
  var args = {
    zoom    : 4,
    center    : new google.maps.LatLng(0, 0),
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };
  
  
  // Создаем карту            
  var map = new google.maps.Map( $el[0], args);
  
  
  // Создаем заготовку массива маркеров
  map.markers = [];
  
  
  // Добавляем маркеры
  $markers.each(function(){
    
      add_marker( $(this), map );
    
  });
  
  
  // Центрируем карту
  center_map( map );
  
  
  // Возвращаем данные
  return map;
  
}

/*
*  add_marker
*
*  Эта функция добавляет маркер на Google карту
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $marker (jQuery элемент)
*  @param map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

  // Переменные
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // Создаем маркер
  var marker = new google.maps.Marker({
    position  : latlng,
    icon: {
           url: 'https://avtoshkola-ds.ru/wp-content/themes/right/img/y-2.svg',
           labelOrigin: new google.maps.Point(40, 40) },
    map     : map
  });

  // Добавляем маркер в массив
  map.markers.push( marker );

  // Если маркер содержит HTML, добавим его в infoWindow
  if( $marker.html() )
  {
    // оздаем info window
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });

    // Показываем info window при нажатии на маркер
    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }

}

/*
*  center_map
*
*  Эта функция центрирует карту и показывает все маркеры, прикрепленные к карте
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param map (Google Map object)
*  @return  n/a
*/

function center_map( map ) {

  // Переменные
  var bounds = new google.maps.LatLngBounds();

  // Перебираем все маркеры и создаем bounds
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  // Только 1 маркер?
  if( map.markers.length == 1 )
  {
    // Центрируем карту
      map.setCenter( bounds.getCenter() );
      map.setZoom( 20 );
  }
  else
  {
    // fit to bounds
    map.fitBounds( bounds );
  }

}

/*
*  document ready
*
*  Эта функция рендерит каждую карту когда страница загружена
*
*  @type  function
*  @date  8/11/2013
*  @since 5.0.0
*
*  @param n/a
*  @return  n/a
*/
// global var
var map = null;

$(document).ready(function(){

  $('.acf-map').each(function(){

    // Создаем карту
    map = new_map( $(this) );

  });

});



// Slidebars

Array.prototype.slice.call(document.querySelectorAll('#sidebar-two-fixed,#sidebar-fixed')).forEach(function(a) {  // селекторы блоков, которые будут фиксироваться. Может быть как один блок, так два и более
  var b = null, P = 80;
  window.addEventListener('scroll', Ascroll, false);
  document.body.addEventListener('scroll', Ascroll, false);
  function Ascroll() {
    if (b == null) {
      var Sa = getComputedStyle(a, ''), s = '';
      for (var i = 0; i < Sa.length; i++) {
        if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
          s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
        }
      }
      b = document.createElement('div');
      b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
      a.insertBefore(b, a.firstChild);
      var l = a.childNodes.length;
      for (var i = 1; i < l; i++) {
        b.appendChild(a.childNodes[1]);
      }
      a.style.height = b.getBoundingClientRect().height + 'px';
      a.style.padding = '0';
      a.style.border = '0';
    }
    var Ra = a.getBoundingClientRect(),
        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#about').getBoundingClientRect().bottom + 0);
    if ((Ra.top - P) <= 0) {
      if ((Ra.top - P) <= R) {
        b.className = 'stop';
        b.style.top = - R +'px';
        b.style.left = 0;
      } else {
        b.className = 'sticky';
        b.style.top = P + 'px';
        b.style.left = Ra.left + 'px';
      }
    } else {
      b.className = '';
      b.style.top = '';
      b.style.left = '';
    }
    window.addEventListener('resize', function() {
      a.children[0].style.width = getComputedStyle(a, '').width;
      b.style.left = (b.className == 'sticky' ? (a.getBoundingClientRect().left + 'px') : '0');
    }, false);
  }
})