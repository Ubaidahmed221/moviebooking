
$(".branch").click(function () {

    // var branch = parseInt($(this).val());
    var branch = parseInt($(this).attr("data-id"));
    var URL = "{{'/showes'}}";
    $.ajax({
        type: "POST",
        url: URL,
        data: {
            branch: branch
        },
        //data: "",
        success: function (response) {

            location.reload();
        }
    });
});

$(document).ready(function () {


    $(window).load(function () {
        // $("#branch").trigger("change");
        $("#coming").hide(1);
        $("#comingg").hide(1);
        $("#showingg").hide(1);
        // $("#showing").fadeIn(1);
    });

    $("#showbtn").on("click touch", function () {
        // $("#showbtn").addClass("active");
        // $("#comingbtn").removeClass("active");
        $("#coming").hide(1);
        // $("#showing").show(1);


        $("#showing").removeClass("hidden");
        $("#coming").addClass("hidden");

    });

    $("#comingbtn").on("click touch", function () {
        sameHeight();
        // $("#comingbtn").addClass("active");
        // $("#showbtn").removeClass("active");
        // $("#showing").hide(1);
        $("#coming").show(1);
        $("#showing").addClass("hidden");
        $("#coming").removeClass("hidden");
    });


    $("#branch").on("change touch", function () {
        $("#show").addClass("overlay");
        $('#divLoading').show();
        var branch = parseInt($(this).val());
        $('#dateShowCinema').html('');
        var URL = 'https://www.nueplex.com/branch';
        $.ajax({
            type: "POST",
            url: URL,
            data: {
                branch: branch
            },
            //data: "",
            success: function (response) {
                // var res = JSON.parse(response);
                location.reload();

                // var html ='';
                //       html += (' <option value="All"> All Cinemas</option>');
                //   $.each( res['movieCinema'], function( key, val ) {
                //       html += (' <option value="'+val['cinemaId']+'">'+val['cinema']+'</option>');
                //   });

                // $('#dateShowCinema').html(html);

                // $("#show").removeClass("overlay");
                $('#divLoading').hide();
            }
        });
    });

    $("#dateShowTime").on("change touch", function () {
        var qryStr = generateQueryStr();
        $("#show").addClass("overlay");
        $('#divLoading').show();


        var URL = 'https://www.nueplex.com/showtime.html';
        $.ajax({
            type: "POST",
            url: URL,
            data: qryStr,
            //data: "",
            success: function (response) {
                var res = response;
                $("#show").removeClass("overlay");
                $('#divLoading').hide();
                $('#show').html(res);
            }
        });
    });

    $("#dateShowMovie").on("change touch", function () {
        var qryStr = generateQueryStr();
        $("#show").addClass("overlay");
        $('#divLoading').show();
        var URL = 'https://www.nueplex.com/showtime.html';

        $.ajax({
            type: "POST",
            url: URL,
            data: qryStr,
            //data: "",
            success: function (response) {
                var res = response;
                $("#show").removeClass("overlay");
                $('#divLoading').hide();
                $('#show').html(res);
            }
        });
    });

    $("#dateShowCinema").on("change touch", function () {
        var qryStr = generateQueryStr();
        $("#show").addClass("overlay");
        $('#divLoading').show();
        var URL = 'https://www.nueplex.com/showtime.html';

        $.ajax({
            type: "POST",
            url: URL,
            data: qryStr,
            success: function (response) {
                var res = response;
                $("#show").removeClass("overlay");
                $('#divLoading').hide();
                $('#show').html(res);
            }
        });
    });
    $("#dateShowTime").trigger("change");

});

function generateQueryStr() {
    var dtime = $('#dateShowTime').val();
    var showMovie = $('#dateShowMovie').val();
    var showCinema = $('#dateShowCinema').val();
    var qryStr = "showDateTime=" + dtime + "&showMovie=" + showMovie + "&showCinema=" + showCinema;
    return qryStr;

}


function getMovieDetails(movieURL) {
    var type = 'popup';

    //        $('#fb_comments_div').html('');
    $('#myModal').html('');
    //
    $('#popupdivLoading').show();
    $('#myModal').html(
        '<div id="popupdivLoading" style=""><img src="https://www.nueplex.com/logo/loading.gif" alt="" /></div>'
    );


    $.ajax({
        type: "POST",
        url: 'https://www.nueplex.com/movie/' + movieURL,
        data: {
            type: type
        },
        //data: "",
        success: function (response) {
            var res = response;
            $('#popupdivLoading').hide();
            $('#myModal').html(res);
        }
    });

}

// 
$(document).ready(function () {
    $("#searchIcon").click(function () {
        if ($('#search').val() != '') {
            $('#searchForm').submit();
        }
    });
});

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 100) {
        document.getElementById("nav-ul").style.margin = "-15px";
        document.getElementById("logo").style.width = "160px";
    } else {
        document.getElementById("nav-ul").style.margin = "7px";
        document.getElementById("logo").style.width = "400px";
    }
}
$(document).ready(function () {
    $('#search').keypress(function (e) {
        if (e.which == 13) {
            if ($('#search').val() == '') {
                return false;
            }

            //Call your function here, or trigger the button click.
        }
    });

    $('.accordion').parent().css({
        'color': 'red'
    });
});
$(window).load(function () {
    $('body').addClass('loaded');
    $('h1').css('color', '#222222');
})

$('.desktop-slider').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    responsiveClass: true,
    items: 1,
    dots: true,
    nav: false,
    //navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
})

$('.mobile-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    responsiveClass: true,
    items: 1,
    dots: true,
    //nav: true,
    //navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
})

$('.pages-sliders').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    responsiveClass: true,
    items: 1,
    dots: true,
    nav: false,
    singleItem: true

    //navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
})

$(window).load(function () {
    $('#select-ticket-site').modal('show');
});
$(".shows p a").on("click", function () {
    $("a").removeClass("active");
    $(this).addClass("active");
});
