jQuery.extend( jQuery.easing,{
    expoinout: function(x, t, b, c, d) {
        return jQuery.easing.easeInOutExpo(x, t, b, c, d);
    }
});

jQuery.fn.codaSlider = function (settings) {
    settings = jQuery.extend({
        easeFunc: "expoinout",
        easeTime: 750,
        toolTip: false
    }, settings);
    return this.each(function () {
        var container = jQuery(this);
        // Self-explanatory...
        container.removeClass("csw").addClass("stripViewer");
        // Get the width of a panel, set from CSS...
        var panelWidth = container.find("div.panel").width();
        // panelCount gives us a count of the panels in the container...
        var panelCount = container.find("div.panel").size();
        // Calculate the width of all the panels when lined up end-to-end...
        var stripViewerWidth = panelWidth * panelCount;
        // Use the above width to specify the CSS width for the panelContainer element...
        container.find("div.panelContainer").css("width", stripViewerWidth);
        // Set the navWidth as a multiple of panelCount to account for margin-right on each li
        var navWidth = panelCount * 2;

        // Create appropriate nav
        container.each(function (i) {

            jQuery("div#stripNav" + i + " a").each(function (z) {
                // Figure out the navWidth by adding up the width of each li
                navWidth += jQuery(this).parent().width();
                // What happens when a nav link is clicked
                jQuery(this).bind("click", function () {
                    jQuery(this).addClass("current").parent().parent().find("a").not(jQuery(this)).removeClass("current"); // wow!
                    jQuery(this).addClass("current").parent().parent().find("li.current").removeClass("current"); // wow!
                    jQuery(this).addClass("current").parent().addClass("current"); // wow!
                    var cnt = -(panelWidth * z);
                    cPanel = z + 1;
                    jQuery(this).parent().parent().parent().next().find("div.panelContainer").animate({
                        left: cnt
                    }, settings.easeTime, settings.easeFunc);
                });
            });
            jQuery("div#stripNav" + i + " a:eq(0)").addClass("current");
            jQuery("div#stripNav" + i + " li:eq(0)").addClass("current");
        });

    });
};


jQuery(function () {
    jQuery("div#slider1").codaSlider();
});

jQuery(function(){
    //program
    var options = {
        btn_next_class: '',
        btn_prev_class: '',
        obj_element: '.view_show_box .thumb-item',
        number_element:6,
        number_view: 6,
        obj_contan_element: '.view_show_box .contain-element',
        num_secon: 6
    }
    jQuery().slide_run(options);
});

jQuery.fn.slide_run = function(options) {
    var b_next = jQuery(options.btn_next_class);
    var b_prev = jQuery(options.btn_prev_class);
    var lst_item = jQuery(options.obj_element);
    var number = options.number_element;
    var number_view = options.number_view;
    var e = 0;
    var contain = jQuery(options.obj_contan_element);
    var g = false;
    var iTime = options.num_secon * 1000;
    var h = lst_item.eq(0).outerWidth() + parseInt(lst_item.eq(0).css('margin-right'))+ parseInt(lst_item.eq(0).css('margin-left'));
    setInterval(function() { 
        if (!g) {
            g = true;
            if (e >= lst_item.length - number_view) {
                e = 0;
                contain.animate({
                    left: 0
                }, 'slow', function () {
                    g = false
                })
            } else {
                e = e + number + number_view < lst_item.length ? e += number : lst_item.length - number_view;
                contain.animate({
                    left: '-' + e * h + 'px'
                }, 'slow', function () {
                    g = false
                });
            }
        }
    },  iTime);
    jQuery.next = function () {
        if (!g) {
            g = true;
            if (e >= lst_item.length - number_view) {
                e = 0;
                contain.animate({
                    left: 0
                }, 'slow', function () {
                    g = false
                })
            } else {
                e = e + number + number_view < lst_item.length ? e += number : lst_item.length - number_view;
                contain.animate({
                    left: '-' + e * h + 'px'
                }, 'slow', function () {
                    g = false
                })
            }
        }
    };
    jQuery.prev = function () {
        if (!g) {
            g = true;
            if (e <= 0) {
                e = lst_item.length - number_view;
                contain.animate({
                    left: '-' + e * h + 'px'
                }, 'slow', function () {
                    g = false
                })
            } else {
                e = e - number > 0 ? e -= number : 0;
                contain.animate({
                    left: '-' + e * h + 'px'
                }, 'slow', function () {
                    g = false
                })
            }
        }
    };
    b_next.click(jQuery.next);
    b_prev.click(jQuery.prev);
}


