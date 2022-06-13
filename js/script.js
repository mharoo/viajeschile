//+++++++ Funcion para que el nav menu tenga fondo negro al hacer scroll +++++++//
$(document).scroll( function(e){
  const y = $("html").scrollTop();
  if(y > 900) $("nav").addClass("nav-black")
  else $("nav").removeClass("nav-black")
})

//+++++++++ Botón ir arriba ++++++++++//
mybutton = document.getElementById("btn_gototop");
window.onscroll = function() {scrollFunction()};
// Cuando se hace scroll hacia abajo a los 600px el botón aparece
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 600) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// Función para ir hacia arriba suavemente
var scrollToTopBtn = document.getElementById("btn_gototop");
var rootElement = document.documentElement;
function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
btn_gototop.addEventListener("click", scrollToTop);