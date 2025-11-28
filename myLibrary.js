(function ($) {

  // === Plugin 1: colorChanger ===
  $.fn.colorChanger = function (options) {
    var settings = $.extend({
      color: "red",
      fontSize: "20px"
    }, options);

    return this.each(function () {
      $(this).css({
        color: settings.color,
        fontSize: settings.fontSize
      });
    });
  };

  // === Plugin 2: blinkText ===
  $.fn.blinkText = function (speed) {
    var blinkSpeed = speed || 500;
    return this.each(function () {
      var $el = $(this);
      setInterval(function () {
        $el.fadeToggle(blinkSpeed);
      }, blinkSpeed);

      // $el.hover(function(){
      //    $el.stop(5000);
      // });
    });
  };

  // === Plugin 3: highlightOnHover ===
  $.fn.highlightOnHover = function (options) {
    var settings = $.extend({
      color: "red"
    }, options);

    return this.each(function () {
      var $el = $(this);
      var originalColor = $el.css("background-color");

      $el.hover(
        function () {
          $el.css("background-color", settings.color);
        },
        function () {
          $el.css("background-color", originalColor);
        }
      );
    });
  };





  $.fn.resizer=function(options){
    var settings=$.extend({
        width:"400px",
        height:"400px"
    },options);

    return this.each(function (){
        var $el=$(this);
        var ogWidth=$el.css("width");
        var ogHeight=$el.css("height");

        $el.hover(
        function(){
          $el.css({"width":settings.width,"height":settings.height});
        },
        function(){
          $el.css({"width":ogWidth,"height":ogHeight});
        }
    )
    });
  };

})(jQuery);