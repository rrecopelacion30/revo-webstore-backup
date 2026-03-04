// Nav Mega Menu
    $(".main_nav_list").on("click", ".main_nav_item_has_child", function() {
        $(".main_nav_list .main_nav_item_has_child").removeClass("active");
        $(this).addClass("active");
    });
    $(document).on("click", function(e) {
        if (!$(e.target).closest(".main_nav_list .main_nav_item_has_child").length) {
            $(".main_nav_list .main_nav_item_has_child").removeClass("active");
            $('.main_nav_mega_menu_wrapperViewAll').removeClass('active')
            $('.themeMainNavMegaNewViewAll').removeClass('active')
            $('.themeMainNavMegaListNew').removeClass('hideCard');
        }
    });