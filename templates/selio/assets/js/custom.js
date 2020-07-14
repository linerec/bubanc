document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
  var active = false;

  lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove("lazy");

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener("scroll", lazyLoad);
              window.removeEventListener("resize", lazyLoad);
              window.removeEventListener("orientationchange", lazyLoad);
            }
          }
        });

        active = false;
      }, 200);
    }
  };

  document.addEventListener("scroll", lazyLoad);
  window.addEventListener("resize", lazyLoad);
  window.addEventListener("orientationchange", lazyLoad);
});

$(document).ready(function(){
    
    /* Start Image gallery 
    *    use css/blueimp-gallery.min.css
    *    use js/blueimp-gallery.min.js
    *    Site https://github.com/blueimp/Gallery/blob/master/README.md#setup
    */
    if(!$('#blueimp-gallery').length){
        $('body').append('<div id="blueimp-gallery" class="blueimp-gallery">\n\
            <div class="slides"></div>\n\
            <h3 class="title"></h3>\n\
            <div class="description"></div>\n\
            <a class="prev">&lsaquo;</a>\n\
            <a class="next">&rsaquo;</a>\n\
            <a class="close">&times;</a>\n\
            <a class="play-pause"></a>\n\
            <ol class="indicator"></ol>\n\
            </div>')
    }
    
    $('.images-gallery a.preview').on('click', function(e){
        e.preventDefault();
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        var descriptions = new Array();
        var allImagesInGallery = $(this).parents('.images-gallery').find('a.preview');
        allImagesInGallery.each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;
            if (current === img_href)
                curIndex = i;
            descriptions[i] = $(this).attr('data-description') || '';
        });
        var options = {index: curIndex, onslide: function (index, slide) {
            $('#blueimp-gallery .description').html(descriptions[index]);
        }}
        blueimp.Gallery(myLinks, options);
        return false;
        });
    
    /* images gellary for listing preview images */
    $('.property-imgs .property-img img').bind("click", function()
    {
        var myLinks = new Array();
        var current = $(this).attr('data-fullsrc');
        var curIndex = 0;

        $('.property-imgs .property-img img').each(function (i) {
            if(!$(this).attr('data-fullsrc')) return true;
            var img_href = $(this).attr('data-fullsrc');
            myLinks[i] = img_href;
            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex}

        blueimp.Gallery(myLinks, options);

        return false;
    });
    /* end images gellary fro reviews images */
    
    $(".page_content p, .page_content br").each(function(){
         if( $.trim($(this).text()) == "" ){
             $(this).remove();
         }
    });    
        
    if(!$('.bootstrap-wrapper').length) {
        $('body').append('<div class="bootstrap-wrapper"></div>');
    }
    
    $(".login_popup_enabled").on("click", function(e) {
       if($(window).width()>768 && $("#sign-popup").length) {
           e.preventDefault();
           $("#sign-popup").toggleClass("active");
           $("body").addClass("overlay-bgg");
       }
   });
    
    $("html").on("click", function(){
        $("#sign-popup").removeClass("active");
        $("body").removeClass("overlay-bgg");
    });
    
    $(".login_popup_enabled, .popup").on("click", function(e) {
        e.stopPropagation();
    });
    
    
    $(".toggle").each(function(){
        $(this).find('.content').hide();
        $(this).find('h2:first').addClass('active').next().slideDown(500).parent().addClass("activate");
        $('h2', this).click(function() {
            if ($(this).next().is(':hidden')) {
                $(this).parent().parent().find("h2").removeClass('active').next().slideUp(500).removeClass('animated fadeInUp').parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).addClass('animated fadeInUp').parent().toggleClass("activate");
            }
        });
    });
    
    add_to_favorite();
    remove_from_favorites();

    $('.search-form').find('input[type="text"],input[type="mail"],input[type="password"],input[type="date"], select').change(function(){
        /* selectpicker */
        if($(this).hasClass('selectpicker')) {
            if($(this).val() != '') {
                $(this).parent().find('.btn').addClass('sel_class')
            } else {
                $(this).parent().find('.btn').removeClass('sel_class')
            }
            
        } else {
            if($(this).val() != '') {
                $(this).addClass('sel_class')
            } else {
                $(this).removeClass('sel_class')
            }
        }
    })
    
    // add calendar for all inputs with class .field_datepicker (required unique id)
    $('.field_datepicker').each(function(){
        $(this).datepicker({
            place: function(){
                    var element = this.component ? this.component : this.element;
                    element.after(this.picker);
		},   
            pickTime: false
        });
    })
    
    $('.rating-lst input[name="stars"]').on('change', function(){
        $('#review_star_input').val($(this).val());
    })
    
})

function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function support_history_api()
{
    return !!(window.history && history.pushState);
}

/* End Image gallery script. Big Image */ 

function custom_number_format(val)
{
    return val.toFixed(2);
}

function encodeHTML(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}

function cleanerHTML(s) {
    return s.replace(/&/g, '').replace(/</g, '').replace(/"/g, '');
}

// Array Remove - By John Resig (MIT Licensed)
Array.prototype.remove = function(from, to) {
  var rest = this.slice((to || from) + 1 || this.length);
  this.length = from < 0 ? this.length + from : from;
  return this.push.apply(this, rest);
};

function array_move(arr, old_index, new_index) {
    if (new_index >= arr.length) {
        var k = new_index - arr.length + 1;
        while (k--) {
            arr.push(undefined);
        }
    }
    arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
    return arr; // for testing
};