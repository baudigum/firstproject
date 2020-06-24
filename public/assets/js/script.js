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
            items:1.5
        },
        600:{
            items:1.5
        },
        800:{
            items:1.5
        },
        1000:{
            items:1.5
        },
        1200:{
            items:2.5
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
    $('[data-id]').click(function(){
        var tab_id = $(this).attr('data-id');
            $('.sold').removeClass('show_category');
            $(this).parents('.row').find(`.sold#${tab_id}`).addClass('show_category');
    });
    $( "[data-id]" ).click(function( event ) {
        event.stopPropagation();
        event.preventDefault();
    });
});
$(document).ready(function() {
    $(".add").click(function(){
        var counter = parseInt($(this).parents('.shop').find(".count").text());
        counter++;
        console.log(counter);
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
            items:2.5
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
            items:1.5
        },
        1000:{
            items:2
        },
        1200:{
            items:2
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

//category mobile






















//$(this).parents('.sort').find('.top_sort[data-content="' + attr('data-id') + '"]').toggleClass('show_content');
{/* <script type="text/javascript"> $('.your-selector').owlCarousel({ items:1, stagePadding: 100, margin:10, loop:true, nav:false, dots:true, }); </script>


<style> .owl-stage { left: -100px; } </style> */}