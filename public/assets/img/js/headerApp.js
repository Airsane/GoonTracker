window.onscroll = function() {scrollHeader()};

function scrollHeader() {
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("app-header").classList.add("app-header-scroll");
    } else {
        document.getElementById("app-header").classList.remove("app-header-scroll");
        console.log("scrolled");
    }
}