$(document).ready(function () {

    $("a.scroll_to_bottom").click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $("body, html").animate({ scrollTop: destination }, 600); 
        return false; 
    });
});
