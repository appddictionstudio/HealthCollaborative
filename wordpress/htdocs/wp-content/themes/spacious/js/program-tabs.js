$(document).ready(function() {
    $('.tabs-container .tablink').on('click', function(e) {
        if (!$(this).parent('li').hasClass('active')) {
            var currentTabId = $(this).attr('href');

            // Change/Remove Current Tab to Active
            $(this).parent('li').addClass('active').siblings().removeClass('active');

            // Show/Hide Tab Content
            $(currentTabId).addClass('active').siblings().removeClass('active');

            $(this).blur();
            e.preventDefault();
        }

        $(this).blur();
        e.preventDefault();
    });
});
