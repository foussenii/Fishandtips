// $(window).scroll(function() {
//     if ($(this).scrollTop() > 1) {
//         $('header').addClass("sticky");
//     } else {
//         $('header').removeClass("sticky");
//     }
// });
(function($){
  $('.selector').click(function(){
    $(this).toggleClass('active');
    $('.menu-items').toggleClass('show');
  });
})(jQuery);
