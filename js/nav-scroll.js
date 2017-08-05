var lastScrollTop = 0;
window.addEventListener("scroll", function(){  
   var st = window.pageYOffset || document.documentElement.scrollTop;  
   if (st > lastScrollTop){
       document.getElementById("header").style.top = "-100%";
   } else {
      document.getElementById("header").style.top = "0";
   }
   lastScrollTop = st;
}, false);