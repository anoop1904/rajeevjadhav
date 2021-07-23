wow = new WOW({ animateClass: 'animated', offset: 50, callback: function(box) { console.log("WOW: animating <" + box.tagName.toLowerCase() + ">") } });
wow.init();

$('.hero-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.featured-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});

$('.testimonials-slider').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: false,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

//Schedule call page-----------

$("#custom-qa").keyup(function() {
    el = $(this);
    if (el.val().length >= 140) {
        el.val(el.val().substr(0, 140));
    } else {
        $("#charNum").text(140 - el.val().length);
    }
});

$('#qaCount').text(' 0 ');

var fnUpdateCount = function() {
    var generallen = $("#QA-checkbox input[name='question_check[]']:checked").length;
    // alert(generallen);
    // console.log(generallen, $("#qaCount"))
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
    $('#row_name_2').hide();

    $('#type').change(function() {
        $('#with_id').attr("disabled", true);
        $('#without_id').attr("disabled", true);
        $('#without_id_dummy').attr("disabled", true);
        if ($('#type').val() == '1') {
            $('#row_name').show();
            $('#row_name_2').hide();
            $('#without_id').hide();
            $('#without_id_dummy').show();
            $('#fname').attr("required", "true");
            $('#lname').attr("required", "true");
            $('#partner_fname').attr("required", "true");
            $('#partner_lname').attr("required", "true");
        } else {
            $('#row_name').hide();
            $('#row_name_2').show();
            $('#without_id').show();
            $('#fname').attr("required", false);
            $('#lname').attr("required", false);
            $('#partner_fname').attr("required", false);
            $('#partner_lname').attr("required", false);
            $('#without_id_dummy').hide();
        }
    });
});

$(function() {
    $('.other_question').hide();
    $(".other_que").click(function() {
        if ($(this).is(":checked")) {
            $(".other_question").show(300);
        } else {
            $(".other_question").hide(200);
        }
    });
});

$("input[name='call_m']").click(function() {
    // $('#payment-row').css('display', ($(this).val() === 'done') ? 'block' : 'none');
    $('#payment-row').slideToggle(1000);
});

$("input[value='yes']").click(function() {
    var base_url = window.location.origin;
    window.location.href = base_url + '/rajeevjadhav/discover_page';
});

$("input[name='customertype']").click(function() {
    $('#as-a-guest').css('display', ($(this).val() === 'new-signup') ? 'block' : 'none');
});

//---------Testimonials-----------------


var sync1 = $(".testi-slider");
var sync2 = $(".navigation-thumbs");

var thumbnailItemClass = '.owl-item';

var slides = sync1.owlCarousel({
    video: true,
    //startPosition: 12,
    items: 1,
    loop: false,
    margin: null,
    autoplay: false,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    nav: false,
    dots: false,
    autoHeight: true
}).on('changed.owl.carousel', syncPosition);

function syncPosition(el) {
    $owl_slider = $(this).data('owl.carousel');
    var loop = $owl_slider.options.loop;

    if (loop) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
    } else {
        var current = el.item.index;
    }

    var owl_thumbnail = sync2.data('owl.carousel');
    var itemClass = "." + owl_thumbnail.options.itemClass;


    var thumbnailCurrentItem = sync2
        .find(itemClass)
        .removeClass("synced")
        .eq(current);

    thumbnailCurrentItem.addClass('synced');

    if (!thumbnailCurrentItem.hasClass('active')) {
        var duration = 300;
        sync2.trigger('to.owl.carousel', [current, duration, true]);
    }
}
var thumbs = sync2.owlCarousel({
        //startPosition: 1,
        items: 7,
        loop: false,
        margin: null,
        autoplay: false,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 7
            }
        },
        onInitialized: function(e) {
            var thumbnailCurrentItem = $(e.target).find(thumbnailItemClass).eq(this._current);
            thumbnailCurrentItem.addClass('synced');
        },
    })
    .on('click', thumbnailItemClass, function(e) {
        e.preventDefault();
        var duration = 300;
        var itemIndex = $(e.target).parents(thumbnailItemClass).index();
        sync1.trigger('to.owl.carousel', [itemIndex, duration, true]);
    }).on("changed.owl.carousel", function(el) {
        var number = el.item.index;
        $owl_slider = sync1.data('owl.carousel');
        $owl_slider.to(number, 100, true);
    });