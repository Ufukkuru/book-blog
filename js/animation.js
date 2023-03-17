var elem4 = $(".zoom-in");
function isScrolledIntoView(elem4) {
    var docViewTop = $(window).scrollTop() + 400;
    var docViewBottom = docViewTop + $(window).height() - 400;
	
    var elemTop = elem4.offset().top;
    var elemBottom = elemTop + elem4.height();
	
    return (docViewBottom <= elemBottom && elemTop <= docViewTop);
}
$(document).on("scroll", function () {
    if (isScrolledIntoView(elem4)) {
        elem4.addClass("zi");
				elem4.css('opacity', '1');
    }
});