$(window).on('load', function() {
    var options = {
        srcNode: 'img',             // grid items
        margin: '10px',             // margin in pixel
        width: '150px',             // grid item width in pixel
        max_width: '',              // dynamic gird item width
        resizable: true,            // re-layout if window resize
        transition: 'all 0.5s ease' // support transition for CSS3
    }
    $('.grid').gridify(options);
});