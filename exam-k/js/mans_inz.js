var $grid = $('.grid').imagesLoaded( function() {
    $grid.isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        layoutMode: 'masonry'
    });
});