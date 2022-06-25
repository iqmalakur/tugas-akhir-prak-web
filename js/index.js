$(".service-card")
    .mouseenter(function() {
        const circle = $($(this).children()[0])
        const line = $($(this).children()[3])

        circle.removeClass("bg-light")
        circle.addClass("bg-info")
        line.removeClass("bg-light")
        line.addClass("bg-info")
    })
    .mouseleave(function() {
        const circle = $($(this).children()[0])
        const line = $($(this).children()[3])

        circle.removeClass("bg-info")
        circle.addClass("bg-light")
        line.removeClass("bg-info")
        line.addClass("bg-light")
    })

$(".gallery-item")
    .mouseenter(function () {
        $($(this).children()[0]).addClass("gallery-active")
        $($(this).children()[1]).css("opacity", "1")
    })
    .mouseleave(function () {
        $($(this).children()[0]).removeClass("gallery-active");
        $($(this).children()[1]).css("opacity", "0");
    });

$("a.lightbox-trigger").click(function (e) {
    e.preventDefault();
    $("#lightbox").css("transform", "scale(1)");
    $("#lightbox").css("z-index", "9999");
    $("#lightbox img").attr("src", $(this).attr("href"));
});

$("#lightbox").click(function() {
    $(this).css("transform", "scale(0)");
    $(this).css("z-index", "-1");
})