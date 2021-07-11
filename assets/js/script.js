
// Home 
$(document).ready(function(){
    $(window).scroll(function(){
         
        // scroll-up btn
        if (this.scrollY > 500) {
            $(".scroll-up-btn").addClass("show")
        }else {
            $(".scroll-up-btn").removeClass("show")
        }
    })

    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop:0});
        $('html').css("scrollBehavior", "auto");
    })

    $('.navbar .menu li a').click(function(){
        $('html').css("scrollBehavior","smooth");
    })

    $(".menu-btn").click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

});



    

// PRELOADER

window.addEventListener("load", () => {
    document.querySelector(".preloader").classList.add("fade-out");

    setTimeout(() => {
        document.querySelector(".preloader").style.display = "none";
    }, 600)
})


// FORM



// password show and hidden
function show() {
    var password = document.getElementById("pass");
    var icon = document.querySelector(".pass");

    if (password.type === "password") {
        password.type = "text";
        icon.style.color = '#FF7716';
        icon.classList.add("fa-eye-slash")
    } else {
        password.type = "password";
        icon.style.color = 'gray';
        icon.classList.remove("fa-eye-slash")
    }
}

// confirm password show and hidden
function show2() {
    var password = document.getElementById("cpass");
    var icon = document.querySelector(".cpass");

    if (password.type === "password") {
        password.type = "text";
        icon.style.color = '#FF7716';
        icon.classList.add("fa-eye-slash")
    } else {
        password.type = "password";
        icon.style.color = 'gray';
        icon.classList.remove("fa-eye-slash")
    }
}

       

        

       