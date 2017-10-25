function confirmarPass() {
  var sellenocontrasena = document.getElementById("pass");
  var isFocused = (sellenocontrasena == document.activeElement);

  if(isFocused == true ){
    document.getElementById("pass2").setAttribute("class","");
}
}
