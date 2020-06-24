function initSlider() {
$('#owl-one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:7000,
    autoplayHoverPause:true,
    onInitialized: startProgressBar,
    onTranslate: resetProgressBar,
    onTranslated: startProgressBar,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})}
$('#owl-one.owl-carousel').on('changed.owl.carousel',function(property){
    var current = property.item.index;
    var src = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
    $(".left").attr("src", src);
    var tx = $(property.target).find(".owl-item").eq(current).next().find(".title").text();
    $(".small").text(tx);
});

initSlider();
function startProgressBar() {
    $(".progressBar").css({
        width: "100%",
        transition: "width 7000ms"
    });
    }
function resetProgressBar() {
    $(".progressBar").css({
        width: 0,
        transition: "width 0s"
    });
}

var owl = $('#owl-one.owl-carousel');
owl.owlCarousel();
$('.Next').click(function() {
    owl.trigger('next.owl.carousel');
})


$(document).ready(function(){
    $(window).scroll(function(){
        var scr=$(window).scrollTop();
        if(scr>350){
            $(".head_contact").css('margin-left', '-400px');
            $(".serv").css('margin-right', '-400px');
        }
        if(scr<350){
            $(".head_contact").css('margin-left', '0px');
            $(".serv").css('margin-right', '0px');
        }
        if(scr>350){
            $( ".top_head-border" ).addClass('top_head_hide');
            $('header').css('border-bottom', '1px solid #dde0ed');
        }
        else{
            $( ".top_head-border" ).removeClass('top_head_hide');
            $('header').css('border-bottom', 'none');
        }
    });
  });
  //select
  $(document).ready(function(){
    $('.customSelect').click(function(){
        $('.dropSelect').addClass('show_dropSelect');
            $('.geo').click(function(){
                $('.usa1').css('display','none');
                $('.geo1').css('display','block');
                $('.dropSelect').removeClass('show_dropSelect');
            });
            $('.usa').click(function(){
                $('.geo1').css('display','none');
                $('.usa1').css('display','block');
                $('.dropSelect').removeClass('show_dropSelect');
            });
        });
    });
  $(document).mouseup(function(e){
    {if ($(e.target).closest(".dropSelect").length === 0)
    $('.dropSelect').removeClass('show_dropSelect');
    }
});
//serach_form
$(document).ready(function(){
    $('#search').click(function(){
        $('.search').addClass('show_search');
    });
    $('#close').click(function(){
        $('.search').removeClass('show_search');
    });
    $( "#close" ).click(function( event ) {
        event.stopPropagation();
        event.preventDefault(); 
    });
});
//modal
$(document).ready(function(){
    $('.furniture_modal_icon').click(function(){
        $('.furniture_modal').addClass('show_modal');
    });
    $('.closeModal').click(function(){
        $('.furniture_modal').removeClass('show_modal');
    });
});
//second slider
$('.sold .owl-carousel').owlCarousel({
    //stagePadding: 100,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        }
    }
})
var owl_second1 = $('.sold .owl-carousel');
owl_second1.owlCarousel();
$('.next').click(function() {
    owl_second1.trigger('next.owl.carousel');
})
$('.prev').click(function() {
    owl_second1.trigger('prev.owl.carousel', [300]);
})

$(document).ready(function() {
    $(".add").click(function(){
        var counter = parseInt($(this).parents('.shop').find(".count").text());
        counter++;
        ($(this).parents('.shop').find(".count").text(counter));
    });
    $( ".add" ).click(function( event ) {
        event.stopPropagation();
    });
    $(".minus").click(function(){
        var counter = parseInt($(this).parents('.shop').find(".count").text());
        counter--;
        $(this).parents('.shop').find(".count").text(counter);
    });
    $( ".minus" ).click(function( event ) {
        event.stopPropagation();
    });
});
//mobile menu
$(document).ready(function(){
    $('.mobile_menuIcon').click(function(){
        $('.mobile_menu').addClass('active');
    });
    $(".mobile_menu_close").click(function(){
        $(".mobile_menu").removeClass('active');
    });
    $('.mob_drop').click(function(){
        $(this).find('.mob_product_drop').toggleClass('show_mob_drop');  
            $(this).toggleClass('drop_arrow');
        });
    });
    
//collection slider
$('#owl-three').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1.5
        },
        600:{
            items:2.5
        },
        800:{
            items:3
        },
        1000:{
            items:3.5
        },
        1200:{
            items:3.5
        },
        1500:{
            items:4.5
        },
        1800:{
            items:6.5
        }
    }
})
$(document).ready(function() {
    $(".Add").click(function(){
        var counter = parseInt($(this).parents('.collection_number').find(".theCount").text());
        counter++;
        console.log(counter);
        ($(this).parents('.collection_number').find(".theCount").text(counter));
    });
    $( ".Add" ).click(function( event ) {
        event.stopPropagation(); 
    });
    $(".Minus").click(function(){
        var counter = parseInt($(this).parents('.collection_number').find(".theCount").text());
        counter--;
        $(this).parents('.collection_number').find(".theCount").text(counter);
    });
    $( ".Minus" ).click(function( event ) {
        event.stopPropagation();
    });
});
    var owl_three = $('#owl-three.owl-carousel');
    owl_three.owlCarousel();
    $('.right_circle').click(function() {
        owl_three.trigger('next.owl.carousel');
    })
    $('.left_circle').click(function() {
        owl_three.trigger('prev.owl.carousel', [300]);
    })


//news
$('#owl-four').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        800:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:3
        }
    }
})
var owl_four = $('#owl-four.owl-carousel');
owl_four.owlCarousel();
$('.new_next').click(function() {
    owl_four.trigger('next.owl.carousel');
})
$('.new_prev').click(function() {
    owl_four.trigger('prev.owl.carousel', [300]);
})

//catalog
$('#owl-five').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        500:{
            items:1.5
        },
        600:{
            items:1.5
        },
        800:{
            items:1.5
        },
        1000:{
            items:3.5
        },
        1200:{
            items:4
        }
    }
})
var five = $('#owl-five.owl-carousel');
five.owlCarousel();
$('.catalog_next').click(function() {
    five.trigger('next.owl.carousel');
})
$('.catalog_prev').click(function() {
    five.trigger('prev.owl.carousel', [300]);
})
//product
$(document).ready(function(){
    $('.top_sort').click(function(){
        $(this).parents('.sort').find('.bottom_sort').toggleClass('bottom_sort_show');
        $(this).toggleClass('sort-content_arrow');
    });
    $('.content').click(function(){
        $(this).parents('.sort').find('.sort-content').text($(this).text());
    });
    $('.cat_title').click(function(){
        $(this).parent().find('.top_category').toggleClass('top_category_show'); 
        $(this).parents('.product_list').find('.plus').toggleClass('plus_show');
        $(this).toggleClass('cat_title_arrow');
    });
    $('.price_title').click(function(){
        $(this).parents('.product_list').find('.pricing').toggleClass('price_form_show'); 
        $(this).toggleClass('price_title_arrow');
    });
});
$(document).ready(function(){
    $('.chek').click(function(){
        $(this).parent().find('.bottom_category').toggleClass('bottom_category_show'); 
        $(this).parent().find('.top').toggleClass('top_category_shows'); 
        $(this).parent().find('.plus').toggleClass('plus_shows');
    });
    $('.list').click(function(){
        $(this).toggleClass('bottom_category_shows'); 
    });
});
$(function(){
    $( "#slider-range").slider({
      range: true,
      min: 100,
      max: 500,
      values: [100, 500],
      slide: function(event, ui){
        $("#amount").val(ui.values[0]);
        $("#amount2").val(ui.values[1]); 
      }
    });
    $("#amount").val($("#slider-range").slider("values", 0));
    $("#amount2").val($("#slider-range").slider("values", 1));
    $("#amount").change(function(){
        $('#slider-range').slider('values', 0, $(this).val());
    })
    $("#amount2").change(function(){
        $('#slider-range').slider('values', 1, $(this).val());
    })
 });

//detal page slider
$(document).ready(function() {

    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 5; 
    var syncedSecondary = true;
    sync1.owlCarousel({
      items : 1,
      slideSpeed : 5000,
      nav: true,
      autoplay: false,
      dots: false,
      loop: true,
      touchDrag  : false,
      mouseDrag  : true,
      
    }).on('changed.owl.carousel', syncPosition);
        $('.Next').click(function() {
            sync1.trigger('next.owl.carousel');
        })
        $('.Prev').click(function() {
            sync1.trigger('prev.owl.carousel', [300]);
        })
    
    sync2
      .on('initialized.owl.carousel', function () {
        sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
      items : slidesPerPage,
      dots: false,
      nav: true,
      smartSpeed: 200,
      slideSpeed : 500,
      touchDrag  : false,
      mouseDrag  : false,
      slideBy: slidesPerPage, 
      responsiveRefreshRate : 100
    }).on('changed.owl.carousel', syncPosition2);
    
    function syncPosition(el) {
      var count = el.item.count-1;
      var current = Math.round(el.item.index - (el.item.count/2) - .5);
      
      if(current < 0) {
        current = count;
      }
      if(current > count) {
        current = 0;
      }
      
      //end block
    
      sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = sync2.find('.owl-item.active').length - 1;
      var start = sync2.find('.owl-item.active').first().index();
      var end = sync2.find('.owl-item.active').last().index();
      
      if (current > end) {
        sync2.data('owl.carousel').to(current, 100, true);
      }
      if (current < start) {
        sync2.data('owl.carousel').to(current - onscreen, 100, true);
      }
    }
    
    function syncPosition2(el) {
      if(syncedSecondary) {
        var number = el.item.index;
        sync1.data('owl.carousel').to(number, 100, true);
      }
    }
    
    sync2.on("click", ".owl-item", function(e){
      e.preventDefault();
      var number = $(this).index();
      sync1.data('owl.carousel').to(number, 300, true);
    });
});

//product size
    $('.size-list .size').click(function(){
        $('.size-list .size').removeClass('active');
        var act = $(this).find('span').text();
        $(this).addClass('active');
        $('.active-size').find('span').text(act);
    });

//product count
$(document).ready(function() {
    $(".plus1").click(function(){
        var add = $(this).parents('.count').find(".final-value").val();
        add++;
        ($(this).parents('.count').find(".final-value").val(add));
    });
    $(".minus").click(function(){
        var minus = parseInt($(this).parents('.count').find(".final-value").val());
        minus--;
        console.log(minus);
        $(this).parents('.count').find(".final-value").val(minus);
    });
});

//describe
    $('.describe').click(function(){
        $(this).parent().find('.text').toggleClass('active');
    });

//zoom image
// function imageZoom(imgID, resultID) {
//     var img, lens, result, cx, cy;
//     img = document.getElementById(imgID);
//     result = document.getElementById(resultID);
//     /*create lens:*/
//     lens = document.createElement("DIV");
//     lens.setAttribute("class", "img-zoom-lens");
//     /*insert lens:*/
//     img.parentElement.insertBefore(lens, img);
//     /*calculate the ratio between result DIV and lens:*/
//     cx = result.offsetWidth / lens.offsetWidth;
//     cy = result.offsetHeight / lens.offsetHeight;
//     /*set background properties for the result DIV:*/
//     result.style.backgroundImage = "url('" + img.src + "')";
//     result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
//     /*execute a function when someone moves the cursor over the image, or the lens:*/
//     lens.addEventListener("mousemove", moveLens);
//     img.addEventListener("mousemove", moveLens);
//     /*and also for touch screens:*/
//     lens.addEventListener("touchmove", moveLens);
//     img.addEventListener("touchmove", moveLens);
//     function moveLens(e) {
//       var pos, x, y;
//       /*prevent any other actions that may occur when moving over the image:*/
//       e.preventDefault();
//       /*get the cursor's x and y positions:*/
//       pos = getCursorPos(e);
//       /*calculate the position of the lens:*/
//       x = pos.x - (lens.offsetWidth / 2);
//       y = pos.y - (lens.offsetHeight / 2);
//       /*prevent the lens from being positioned outside the image:*/
//       if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
//       if (x < 0) {x = 0;}
//       if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
//       if (y < 0) {y = 0;}
//       /*set the position of the lens:*/
//       lens.style.left = x + "px";
//       lens.style.top = y + "px";
//       /*display what the lens "sees":*/
//       result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
//     }
//     function getCursorPos(e) {
//       var a, x = 0, y = 0;
//       e = e || window.event;
//       /*get the x and y positions of the image:*/
//       a = img.getBoundingClientRect();
//       /*calculate the cursor's x and y coordinates, relative to the image:*/
//       x = e.pageX - a.left;
//       y = e.pageY - a.top;
//       /*consider any page scrolling:*/
//       x = x - window.pageXOffset;
//       y = y - window.pageYOffset;
//       return {x : x, y : y};
//     }
//   }

//   imageZoom("myimage", "myresult");





  





// $(document).ready(function() {
//     $('[data-id]').click(function(){
//         var tab_id = $(this).attr('data-id');
//             $('.sold').removeClass('show_category');
//             $(this).parents('.row').find(`.sold#${tab_id}`).addClass('show_category');
//     });
//     $( "[data-id]" ).click(function( event ) {
//         event.stopPropagation();
//         event.preventDefault();
//     });
// });



//$(this).parents('.sort').find('.top_sort[data-content="' + attr('data-id') + '"]').toggleClass('show_content');
{/* <script type="text/javascript"> $('.your-selector').owlCarousel({ items:1, stagePadding: 100, margin:10, loop:true, nav:false, dots:true, }); </script>


<style> .owl-stage { left: -100px; } </style> */}