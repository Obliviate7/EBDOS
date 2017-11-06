function confirmPass() {
  var fullPass = document.getElementById("pass");
  var isFocused = (fullPass == document.activeElement);
  if(isFocused == true ){
    document.getElementById("pass2").setAttribute("class","");
  }
}
function verifNameJs(){
  var regexAlpha=/^[a-z]+$/i;
  var nameJs = document.getElementById("usrName").value;
  var nameLJs = document.getElementById("usrName").value.length;
  if(!((nameLJs > 2) && (nameLJs < 20) && (regexAlpha.test(nameJs)))){
    document.getElementById("submitReg").disabled = true;
    }else{
      document.getElementById("submitReg").disabled = false;
  }
}
function verifSurNameJs(){
  var regexAlpha=/^[a-z]+$/i;
  var surNameJs = document.getElementById("usrSurname").value;
  var surNameLJs = document.getElementById("usrSurname").value.length;
  if(!((surNameLJs > 2) && (surNameLJs < 20) && (regexAlpha.test(surNameJs)))){
   document.getElementById("submitReg").disabled = true;
   }else{
    document.getElementById("submitReg").disabled = false;
  }
}
function verifEmailJs(){
  var regexEmail=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var emailJs = document.getElementById("email").value;
  // var emailJs = document.getElementById("usrSurname").value.length;
  if(! (regexEmail.test(emailJs))){
   document.getElementById("submitReg").disabled = true;
   }else{
    document.getElementById("submitReg").disabled = false;
  }
}
function verifPassJs(){
  var regexPass=/^[a-z0-9]+$/i;
  var passJs = document.getElementById("pass").value;
  var passLJs = document.getElementById("pass").value.length;
  if(!((passLJs > 7) && (regexPass.test(passJs)))){
   document.getElementById("submitReg").disabled = true;
   }else{
    document.getElementById("submitReg").disabled = false;
  }
}
function verifPass2Js(){
  var passJs = document.getElementById("pass").value;
  var pass2Js = document.getElementById("pass2Val").value;
  if(!(passJs == pass2Js) ) {
   document.getElementById("submitReg").disabled = true;
   }else{
    document.getElementById("submitReg").disabled = false;
  }
}
// function usuarioscant(){
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("AllUsers").innerHTML =
//       this.responseText;
//     }
//   };
//   xhttp.open("GET", "usuariostodos.php", true);
//   xhttp.send();
// }

// function reDir(){
//   location.href ="index.php";
// }

// function reDirDelay(){
//   setTimeout ("reDir()", 3000);
// }
