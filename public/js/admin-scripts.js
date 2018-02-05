// Make arrow appear/dissappear when menu item is clicked
var li = $(".sidebar-navigation-item");

li.each(function(){
	if($(this).next(".sub-menu").length > 0) {
		$(this).on("click", function(){
			$(this).find(".arrow").toggle();
			$(this).next(".sub-menu").slideToggle();
		});
	};
});


   $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

				let sideBarStuff = $('#sidebar, #content')
				let collapseIn = $('.collapse.in')
				let aria = $('a[aria-expanded=true]')

                $('#sidebarCollapse').on('click', function () {
                    sideBarStuff.toggleClass('active');
                    collapseIn.toggleClass('in');
                    aria.attr('aria-expanded', 'false');
                });
            });
