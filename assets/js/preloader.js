function adjustHeightOfPage(pageNo) {
        var offset = 80;
        var pageContentHeight = 0;
        var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

        if (pageType != undefined && pageType == "gallery") {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
        } else {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height();
        }

        if ($(window).width() >= 992) { offset = 120; } else if ($(window).width() < 480) { offset = 40; }

        // Get the page height
        var totalPageHeight = 15 + $('.cd-slider-nav').height() +
            pageContentHeight + offset +
            $('.tm-footer').height();

        // Adjust layout based on page height and window height
        if (totalPageHeight > $(window).height()) {
            $('.cd-hero-slider').addClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
        } else {
            $('.cd-hero-slider').removeClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
        }
    }

    $(window).load(function() {
        $('body').addClass('loaded');
    });