function confirmPass() {
  var fullPass = document.getElementById("pass");
  var isFocused = (fullPass == document.activeElement);
    if(isFocused == true ){
      document.getElementById("pass2").setAttribute("class","");
    }
}
