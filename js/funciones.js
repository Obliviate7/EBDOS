function confirmarPass() {
  var sellenocontrasena = document.getElementById("pass");
  var isFocused = (sellenocontrasena == document.activeElement);

  if(isFocused == true ){
    document.getElementById("cpass").setAttribute("class","");
}
}
