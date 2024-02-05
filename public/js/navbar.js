$('document').ready( function () {
    $(".nav-item a").on("click", function () {  
        $(".nav-item.active").removeClass("active");  
        $(this).addClass("active");
    }).filter( function () {
        // console.log(window.location.href.indexOf($(this).attr('data-href').trim()) > -1);
        return window.location.href.indexOf($(this).attr('data-href').trim()) > -1;
    }).click();
});