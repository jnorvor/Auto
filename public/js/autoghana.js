var vehicle_url = "/vehicles/";
function sendRequest(u) {
    var obj = $.ajax({
        type: 'GET',
        url: u,
        async: false
    });
    var result = $.parseJSON(obj.responseText);
    console.warn(xhr.responseText);
    return result;
}


jQuery(document).ready(function() {
    
$(document).click(function (event) {            
    $('.wrapper-dropdown-5').removeClass('active');
});

$('.details-container').click(function (event) {            
     $('.details-container').removeClass('show');
});

$('.details-card').click(function(event) {
         event.stopPropagation();
       return false;
     });



    $('.wrapper-dropdown-5').click(function(event) {
            event.stopPropagation();
     
       $(this).toggleClass('active');
       $('.wrapper-dropdown-5').not(this).each(function(){
        $(this).removeClass('active');
       });
    return false;
     });

    $('.close-button').click(function(event) {
        $('.details-container').removeClass('show');
     });


    var index = 1;
    var testNum =1;
    var slideLen;

     var homeSlideIndex = 1;
      var homeslideLen = $('.home-slide').length;


    $("ul.thumbs").on("click", "li.slide-thumb", function(e)
    {
        slideLen = $('.slide-container').length;
        var slideNum = $(this).attr('data-slide');
        var el = $('.slide-container[data-slide=' + slideNum + ']');
        index = slideNum;

        $(el).addClass('show-slide');
        $(el).siblings('.slide-container').removeClass('show-slide');
        $(this).siblings('.slide-thumb').removeClass('show-slide-thumb');
        $(this).addClass('show-slide-thumb');
    });


    function changeBannerSlide(slide){
           var slideNum = $(slide).attr('data-slide');
        var el = $('.home-slide[data-slide='+ slideNum +']');
        index = slideNum;

        $(el).addClass('slide-active');
        $(el).siblings('.home-slide').removeClass('slide-active');
        $(slide).siblings('.slide-indicator').removeClass('active-indicator');
        $(slide).addClass('active-indicator');
      }

      
      $('.slide-indicator').click(function(event) {

        changeBannerSlide(this);
       });


    function autoSlide() {
        timer = setInterval(function () {
            if (index >= slideLen) {
                index = 0;
            }
            else{
            $('.slide-thumb[data-slide=' + ++index + ']').click();
            }

            if(homeSlideIndex >= homeslideLen){
              homeSlideIndex = 0;
            }
            else{
              changeBannerSlide('.slide-indicator[data-slide='+ ++homeSlideIndex +']');
            }

        }, 6000);
    }
    autoSlide();

    $('.option-make').click(function(event) {
       var select =  $(this).parents('.wrapper-dropdown-5');
       var link = $(this).find('a');
       var val = $(link).html();
       $(select).find('.placeholder').html(val);
            $('.wrapper-dropdown-5[tabindex=2]').find('.placeholder').html("select model");
            var strUrl = vehicle_url + val;
            var obj = sendRequest(strUrl);
            $('.wrapper-dropdown-5[tabindex=2]').removeClass('inactive');
            var make = document.getElementById("vehicle_model");
            $(make).empty();
                for (var i = 0; i < obj.length; i++) {
                    $(make).append('<li class="option-model" id="test"> <a>'+ obj[i].model + '</a>'+'</li>');
                }
        $('.option-model').click(function(event) {
            var selects =  $(this).parents('.wrapper-dropdown-5');
            var links = $(this).find('a');
            var vale = $(links).html();
            $(selects).find('.placeholder').html(vale);
        });
    });

    $('.option').click(function(event) {
        var selects =  $(this).parents('.wrapper-dropdown-5');
        var links = $(this).find('a');
        var vale = $(links).html();
        $(selects).find('.placeholder').html(vale);
    });


});

function showDetails(elementID) {
    $('.details-container').addClass('show');
    var strUrlsS = "/vehicle/" + elementID;
    var strUrl = "/vehicle/" + elementID;
    var obj = sendRequest(strUrl);
    alert(obj[0].make);
    $('.top-section').find('#car_name').remove();
    $('.top-section').find('#car_price').remove();
    $('.top-section').append(
        '<span id="car_name" style="font-size:2em">' + obj[0].make + '</span>' +
        '<span id="car_price" style="float:right;font-size:2em;font-weight: bold;color:#23F4ED;" >' + '¢' + obj[0].price + '</span>'
    );

    $('.slide').find('.slide-container').remove();
    $('.slide').append
    (
        '<li class="slide-container show-slide" id="sl" data-slide="1"><div class="slide-image" style=" background:url(' + obj[0].image + '); background-repeat:no-repeat;background-size:cover;background-position:center;" alt="" ></div></li>'
        +
        '<li class="slide-container" data-slide="2"><div class="slide-image" style=" background:url('+obj[0].image2+'); background-repeat:no-repeat;background-size:cover;background-position:center;" alt="" ></div></li>'
        +
        '<li class="slide-container" id ="sl" data-slide="3"><div class="slide-image" style=" background:url('+obj[0].image3+'); background-repeat:no-repeat;background-size:cover;background-position:center;" alt="" ></div></li>'
        +
        '<li class="slide-container" id ="sl" data-slide="4"><div class="slide-image" style=" background:url('+obj[0].image4+'); background-repeat:no-repeat;background-size:cover;background-position:center;" alt="" ></div></li>'
        +
        '<li class="slide-container" data-slide="5"><div class="slide-image" style=" background:url(' + obj[0].image5 + '); background-repeat:no-repeat;background-size:cover;background-position:center;" alt="" ></div></li>'
    );

    $('.thumbs').find('.slide-thumb').remove();
    $('.thumbs').append
    (
        '<li class="slide-thumb show-slide-thumb" data-slide="1"><a ><img src="'+obj[0].image+'" /></a></li>'
        +
        '<li class="slide-thumb" data-slide="2"><a ><img src="'+obj[0].image2+'" /></a></li>'
        +
        '<li class="slide-thumb" id="st" data-slide="3"><a ><img src="'+obj[0].image3+'" /></a></li>'
        +
        '<li class="slide-thumb" id="st" data-slide="4"><a ><img src="'+obj[0].image3+'" /></a></li>'
        +
        '<li class="slide-thumb" data-slide="5"><a ><img src="' + obj[0].image4 + '" /></a></li>'

    );
}




