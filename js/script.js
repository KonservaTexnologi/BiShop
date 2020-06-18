// SLIDER

$('.rew_slider').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3
});

$('.gallery_slider').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3
});

// SLIDER

// КАЛЬКУЛЯТОР

function calc() {
	var l = document.getElementById('l1').value; // см
	var length = l / 100; // м
	var w = document.getElementById('w1').value; // см
	var width = w / 100; //  м
	var h = $('input[name=calc_radio]:checked').val(); // цена за мм

	var del = $('input[name=del_radio]:checked').val();

	var cost = length * width * h;
	var t = document.getElementById('cost');
	t.innerText = parseInt(cost.toFixed(2)) + parseInt(del) + 'руб.';
}

// КАЛЬКУЛЯТОР

// ЗАПРЕТ ВЫДЕЛЕНИЯ

//document.ondragstart = prohibit; //запрещаем перетаскивание
//document.onselectstart = prohibit; //запрещаем выделение
//document.oncontextmenu = prohibit; //запрещаем клик правой кнопкой
//function prohibit() {
//return false; //предотвращает все эти события
//}

// ЗАПРЕТ ВЫДЕЛЕНИЯ

// СКРОЛИНГ К ЯКОРЯМ

$('a[href^="#"], *[data-href^="#"]').on('click', function(e) {
	e.preventDefault();
	var t = 500;
	var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
	$('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
});

// СКРОЛИНГ К ЯКОРЯМ


// вкл выкл кнопки
//var i = 1;
//document.getElementById('we_need_disable_this').disabled = true;
// function able() {
//	 document.getElementById('we_need_disable_this').disabled = false;

	 
	 
  
//}
function agreeForm(f) {
	// Если поставлен флажок, снимаем блокирование кнопки
	if (f.agree.checked) f.we_need_disable_this.disabled = 0
	// В противном случае вновь блокируем кнопку
	else f.we_need_disable_this.disabled = 1
}