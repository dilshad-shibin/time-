


jQuery(document).ready(function($) {
    $(".side-panel-btn").each(function(index, element) {
        var e = $(this),
            pane = e.data("panel") ? $(e.data("panel")) : ".side-panel",
            box = e.data("target") ? $(e.data("target")) : "body",
            c = e.data("class") ? e.data("class") : "";
        if (c) {
            $("html").addClass("side-panel-has")
        }

        pane.appendTo(box);
        e.on("click", function() {
            $("html").toggleClass(c);
            pane.toggleClass("side-panel-active");
            e.toggleClass("active");
            if (c) {
                $("html").addClass("overflow-x").delay(500).queue(function() {
                    $("html").removeClass("overflow-x");
                    $(this).dequeue();
                })
            }
        })
        pane.find(".close-panel").on("click", function() {
            $("html").toggleClass(c);
            pane.toggleClass("side-panel-active");
            e.toggleClass("active");
            if (c) {
                $("html").addClass("overflow-x").delay(500).queue(function() {
                    $("html").removeClass("overflow-x");
                    $(this).dequeue();
                })
            }
        })

    });

});



jQuery(document).ready(function($) {
    $(".side-panel-menu .dir").each(function() {
        var dropdown = $('<span class="dropdown-submenu"></span>');
        dropdown.prependTo($(this));
        dropdown.on("click", function() {
            $(this).siblings(".menuslide,.sub-menu").stop().slideToggle();
            $(this).toggleClass("active");
            if ($(this).hasClass("active")) {
                $(this).parent().siblings(".dir").children(".menuslide,.sub-menu").stop().slideUp();
                $(this).parent().siblings(".dir").children(".dropdown-submenu").removeClass("active");
            }
        })
    });

})
