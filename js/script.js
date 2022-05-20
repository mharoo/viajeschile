// Funcion para que el nav menu tenga fondo negro al hacer scroll
$(document).scroll( function(e){
  const y = $("html").scrollTop();
  if(y > 900) $("nav").addClass("nav-black")
  else $("nav").removeClass("nav-black")
})

