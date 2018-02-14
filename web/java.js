//Menu toggle-button
  $(document).ready(function() {
    $(".menu-icon").on("click", function() {
      $("nav ul").toggleClass("showing");
    });
  });

//Scrolling Effect
  $(window).on("scroll", function () {
    if ($(window).scrollTop()) {
      $('nav').addClass('black');
    }
    else {
      $('nav').removeClass('black');
    }
  })

  //Ganti menu (AJAX)
  $(document).ready(function(){
  $('.klik_menu').click(function(){
    var menu = $(this).attr('id');
    if(menu == "home"){
      $('.badan').load('home.php');
      $("nav ul").toggleClass("showing");
    }else if(menu == "about"){
      $('.badan').load('about.php');
      $("nav ul").toggleClass("showing");
    }else if(menu == "contact"){
      $('.badan').load('contact.php');
      $("nav ul").toggleClass("showing");
    }else if(menu == "never"){
      $('.badan').load('never.php');
      $("nav ul").toggleClass("showing");
    }else if(menu == "test"){
      $('.badan').load('about.php');
      $("nav ul").toggleClass("showing");
    }
  });


  // halaman yang di load default pertama kali
  $('.badan').load('home.php');
  });
