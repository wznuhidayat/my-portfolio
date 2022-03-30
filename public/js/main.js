//navbar
function Menu(e) {
  let list = document.querySelector('ul');
  e.name === 'menu' ? (e.name = "close", list.classList.add('top-navbar'), list.classList.add('opacity-navbar')) : (e.name = "menu", list.classList.remove('top-navbar'), list.classList.remove('opacity-navbar'))
}
//paralax
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();
  if (wScroll < $(this).height() ) {
    $(".web").css("transform", "translateY(" + wScroll * 2 + "px" + ")");
  } else {
    $(".web").css("transform", "translateY(0px)");
  }
  $("#hello").css("transform", "translateY(-" + wScroll * 0.5 + "px" + ")");


  if (wScroll < 480 ) {
    $("#btn-contact-hero").css("margin-left", "" + wScroll * 1.5 + "px" + "");
  } else {
    $("#btn-contact-hero").css("margin-left", "0px");
  }
  if (wScroll < $(this).height()) {
    $(".sosmed").css("transform", "translateX(-" + wScroll * 2 + "px" + ")");
  } else {
    $(".sosmed").css("transform", "translateX(0px)");
  }
  // if (wScroll < $('#aboutme').offset) {

  // }
});


const callback = function (entries) {
  entries.forEach((entry) => {


    if (entry.isIntersecting) {
      entry.target.classList.add("animate-fade-in-up");
      entry.target.classList.remove("opacity-0");
    } else {
      entry.target.classList.add("opacity-0");
      entry.target.classList.remove("animate-fade-in-up");
    }
  });
};

const observer = new IntersectionObserver(callback);

const targets = document.querySelectorAll(".js-scroll-fade-up");
targets.forEach(function (target) {
  target.classList.add("opacity-0");
  observer.observe(target);
});

const callback1 = function (entries) {
  entries.forEach((entry) => {


    if (entry.isIntersecting) {
      entry.target.classList.add("animate-fade-in-right");
      entry.target.classList.remove("opacity-0");
    } else {
      entry.target.classList.add("opacity-0");
      entry.target.classList.remove("animate-fade-in-right");
    }
  });
};

const observer1 = new IntersectionObserver(callback1);

const target1 = document.querySelectorAll(".js-scroll-fade-right");
target1.forEach(function (target) {
  target.classList.add("opacity-0");
  observer1.observe(target);
});

const callback2 = function (entries) {
  entries.forEach((entry) => {


    if (entry.isIntersecting) {
      entry.target.classList.add("animate-fade-in-left");
      entry.target.classList.remove("opacity-0");
    } else {
      entry.target.classList.add("opacity-0");
      entry.target.classList.remove("animate-fade-in-left");
    }
  });
};

const observer2 = new IntersectionObserver(callback2);

const target2 = document.querySelectorAll(".js-scroll-fade-left");
target2.forEach(function (target) {
  target.classList.add("opacity-0");
  observer2.observe(target);
});

const callback4 = function (entries) {
  entries.forEach((entry) => {


    if (entry.isIntersecting) {
      entry.target.classList.add("animate-fade-in-down");
      entry.target.classList.remove("opacity-0");
    } else {
      entry.target.classList.add("opacity-0");
      entry.target.classList.remove("animate-fade-in-down");
    }
  });
};

const observer4 = new IntersectionObserver(callback4);

const target4 = document.querySelectorAll(".js-scroll-fade-down");
target4.forEach(function (target) {
  target.classList.add("opacity-0");
  observer4.observe(target);
});

const callback5 = function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {

      $.each(entry.target.children, function (i, val) {
        setTimeout(function () {
          val.classList.add("animate-fade-in-down");
          val.classList.remove("opacity-0");
        },300 * (i+1) );
      });
    } else {
      $.each(entry.target.children, function (i, val) {
        val.classList.add("opacity-0");
        val.classList.remove("animate-fade-in-down");
      });
    }
  });
};

const observer5 = new IntersectionObserver(callback5);

const target5 = document.querySelectorAll(".js-scroll-my-project");
target5.forEach(function (target) {
  observer5.observe(target);
});
const callback6 = function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {

      $.each(entry.target.children, function (i, val) {
        setTimeout(function () {
          val.classList.add("animate-fade-in-left");
          val.classList.remove("opacity-0");
        },300 * (i+1) );
      });
    } else {
      $.each(entry.target.children, function (i, val) {
        val.classList.add("opacity-0");
        val.classList.remove("animate-fade-in-left");
      });
    }
  });
};

const observer6 = new IntersectionObserver(callback6);

const target6 = document.querySelectorAll(".js-scroll-items-left");
target6.forEach(function (target) {
  observer6.observe(target);
});


$( window ).load(function() {
   console.log($( ".js-scroll-items-right" ).children());
   $( ".js-scroll-items-right" ).children().addClass("opacity-0");
   $.each($( ".js-scroll-items-right" ).children(), function (i, val) {
    setTimeout(function () {
      val.classList.add("animate-fade-in-right-fast");
      val.classList.remove("opacity-0");
    },150 * (i+1) );
  });
});
//modal
function toggleModal() {
  document.getElementById('modal').classList.toggle('hidden')
}
$( "#alertcontact" ).click(function() {
  $(this).parent().addClass('hidden');
});