(function($) {
  $.fn.slideMaster = function(options){
    var setting = $.extend({
      "animateIn":"fadeInRight",
      "animateOut":"fadeOutLeft",
      "targetItem":"",
      "timing":3500
    }, options);
    //add hidden class
    $(this).find(setting.targetItem).each(function(){
      $(this).addClass("hidden-slide");
    })
    //
    $(this).find(setting.targetItem+":nth-child(1)").addClass("active-slide "+setting.animateIn);
    count=$(this).find(setting.targetItem).length;
    console.log(count);
    var n=0;
    function o(){
      if(n===count){
        n=1;
      }else{
        n=n+1;
      }
        $(setting.targetItem+":nth-child("+ n +")").fadeIn().addClass("active-slide "+setting.animateIn).removeClass(setting.animateOut).removeClass("hidden-slide");
        var animatedur=$(".active-slide").css("animation-duration").split("s");
        caldur=animatedur[0]*1000;
        function m(){
          $(setting.targetItem+":nth-child("+ n +")").removeClass(setting.animateIn).addClass(setting.animateOut).fadeOut(caldur/2);
        }
        setTimeout(function(){m()},setting.timing);
        console.log(n);
    }
    setInterval(function(){o();},setting.timing+500);
  }
})(jQuery);
