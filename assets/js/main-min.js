jQuery(function() {
    "use strict";
    var t;

    function e(t) {
        t.next().hasClass("show") || t.parents(".dropdown-menu").first().find(".show").removeClass("show");
        var e = t.next(".dropdown-menu");
        e.toggleClass("show"), e.parent().toggleClass("show")
    }
    jQuery('[data-toggle="offcanvas"]').on("click", function() {
        jQuery(".offcanvas-collapse").toggleClass("open")
    }), jQuery('.nav--has-sub-menu [data-toggle="dropdown"]').on("click", function() {
        return e(jQuery(this)), !1
    }), jQuery('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t) {
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
            var e = jQuery(this.hash);
            (e = e.length ? e : jQuery("[name=" + this.hash.slice(1) + "]")).length && (t.preventDefault(), jQuery("html, body").animate({
                scrollTop: e.offset().top
            }, 1e3, function() {
                var t = jQuery(e);
                if (t.focus(), t.is(":focus")) return !1;
                t.attr("tabindex", "-1"), t.focus()
            }))
        }
    });
    var n = jQuery(".btn-search-toggle"),
        o = jQuery(".search-bar"),
        a;
    n.click(function() {
        o.animate({
            width: "toggle"
        })
    });
});