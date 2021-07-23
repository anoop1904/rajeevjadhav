wow=new WOW({animateClass:'animated',offset:50,callback:function(box){console.log("WOW: animating <"+box.tagName.toLowerCase()+">")}});wow.init();

$('.hero-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:5000,
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
});

$('.featured-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});

$('.testimonials-slider').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:true,
    autoplay:false,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

//Schedule call page-----------

$("#custom-qa").keyup(function(){
    el = $(this);
    if(el.val().length >= 500){
        el.val( el.val().substr(0, 500) );
    } else {
        $("#charNum").text(500-el.val().length);
    }
});

$('#qaCount').text(' 0 ');
var fnUpdateCount = function() {
	var generallen = $("#QA-checkbox input[name='wpmm[]']:checked").length;
    console.log(generallen,$("#qaCount") )
	if (generallen > 0) {
		$("#qaCount").text('(' + generallen + ')');
	} else {
		$("#qaCount").text(' 0 ');
	}
};

$("#QA-checkbox input:checkbox").on("change", function() {
	fnUpdateCount();
});

$(function() {
    $('#row_name').hide(); 
    $('#type').change(function(){
        if($('#type').val() == 'spiritual') {
            $('#row_name').show(); 
        } else {
            $('#row_name').hide(); 
        } 
    });
});

$(function() {
        $('.other_question').hide();
        $(".other_que").click(function() {
        if($(this).is(":checked")) {
            $(".other_question").show(300);
        } else {
            $(".other_question").hide(200);
        }
    });
});

$("input[name='call-m']").click(function () {
    $('#payment-row').css('display', ($(this).val() === 'done') ? 'block':'none');
});

$("input[name='con-type']").click(function () {
    $('#as-a-guest').css('display', ($(this).val() === 'new-signup') ? 'block':'none');
});