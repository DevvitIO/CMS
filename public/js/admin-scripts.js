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

                $('#sidebarCollapse').on('click', function () {
                    sideBarStuff.toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
