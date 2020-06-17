$(".rew_slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
});

$(".gallery_slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
});

function calc() {
  var l = document.getElementById("l1").value; // см
  var length = l / 100; // м
  var w = document.getElementById("w1").value; // см
  var width = w / 100; //  м
  var h = $("input[name=calc_radio]:checked").val(); // цена за мм

  var del = $("input[name=del_radio]:checked").val();

  var cost = length * width * h;
  var t = document.getElementById("cost");

  t.innerText = parseInt(cost.toFixed(2)) + parseInt(del) + "руб.";
}
