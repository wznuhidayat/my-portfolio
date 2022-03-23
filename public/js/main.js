//navbar
function Menu(e) {
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close", list.classList.add('top-navbar'), list.classList.add('opacity-navbar')) : (e.name = "menu", list.classList.remove('top-navbar'), list.classList.remove('opacity-navbar'))
}
//paralax
$(window).scroll(function () {
    var wScroll = $(this).scrollTop();
    if (wScroll < $(this).height()) {
        $("#web").css("transform", "translateY(" + wScroll * 2 + "px" + ")");
    } else {
        $("#web").css("transform", "translateY(0px)");
    }
    $("#hello").css("transform", "translateY(-" + wScroll * 0.5 + "px" + ")");


    if (wScroll < 480) {
        $("#btn-contact-hero").css("margin-left", "" + wScroll * 1.5 + "px"+"");
    } else {
        $("#btn-contact-hero").css("margin-left", "0px");
    }
    
}); 

  