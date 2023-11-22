$(document).ready(function(){
    $(".slide-one").owlCarousel({
      loop:true,
      margin:20,
      items:1,
      autoplay:true, 
      smartSpeed:1000,
      autoplayTimeout:3000, 
    });
    $(".slide-two").owlCarousel({
      loop:true,
      responsive : {
        0: {margin:0,stagePadding: 40,items:2},
        400:{margin:0,stagePadding: 80, items:2},
        650:{stagePadding: 60},
        800 : {stagePadding: 150},
        1024 : {margin: 30,stagePadding: 140},
        1140 :{margin:60,stagePadding: 280}},
      items:3,
      startPosition:1
    });
  });

window.onscroll = () => {
  let header = document.querySelector('.header')
  header.classList.toggle('stiky',window.scrollY > 500);
}

let openBox = document.querySelector('a[href="#box"]');
let addHidden = document.getElementById('hidden')
openBox.addEventListener('click', () => {
  $(addHidden).slideToggle(500);
  $(openBox).text(function(i, text){return text === "+ add more" ? "- hidden" : "+ add more";})
   
});