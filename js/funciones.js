function confirmarPass() {
  sellenocontrasena = document.querySelector("#pass");
  if(sellenocontrasena == ":focus") {
    var cpass = document.getElementById("#cpass");
    cpass.style.display == "block";
  } else {
    cpass.style.display == "none";
  }
}
