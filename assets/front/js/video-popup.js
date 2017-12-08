(function($) {
      $(document).ready(function(){
        $('#somevid').get(0).pause();
      });
    })(jQuery);

// Modal script
(function($) {
    $(function(){
        var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

            $('a[data-modal-id]').click(function(e) {
                e.preventDefault();
                $("body").append(appendthis);
                $(".modal-overlay").fadeTo(500, 0.9);
                //$(".js-modalbox").fadeIn(500);
                var modalBox = $(this).attr('data-modal-id');
                $('#'+modalBox).fadeIn($(this).data());
                // Show a specific class when opened
                $('#'+modalBox).addClass('opened');
          if (($('.modal-box.opened').find('video').attr('autoplay') === 'autoplay')) {
            $('.modal-box.opened').find('video').get(0).play();
          }
            });

        $(".js-modal-close, .modal-overlay").click(function() {
            $(".modal-box, .modal-overlay").fadeOut(500, function() {
                $(".modal-overlay").remove();
            });
            // Remove the specific class
            $('.modal-box').removeClass('opened');
            // Stop the video from playing
            $('.modal-box').find('video').each(function() {
                    $(this).get(0).pause();
            });
        });

        $(window).resize(function() {
            $(".modal-box").css({
                left: ($(window).width() - $(".modal-box").outerWidth()) / 2

            });
        });

        $(window).resize();

    });
})(jQuery);