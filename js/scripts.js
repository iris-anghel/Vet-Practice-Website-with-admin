$(document).ready(function(){

    //scroll button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('#scroll-button').fadeIn();
		} else {
			$('#scroll-button').fadeOut();
		}
	});

	$('#scroll-button').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

    //homepage text fade in
    $('div.jumbotron-text').fadeIn(3000);

    //smooth scroll to footer
    $('.book-now').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#footer1').offset().top
        }, 1000, 'linear');
    });

    //search owner form
    var $rows_o = $('#owner_table tbody tr');
    $('#owner_search').keyup(function () {
        var valO = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows_o.show().filter(function () {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(valO);
    }).hide();
    });

    //search pet form
    var $rows_p = $('#pet_table tbody tr');
    $('#pet_search').keyup(function () {
        var valP = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows_p.show().filter(function () {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(valP);
    }).hide();
    });

});

