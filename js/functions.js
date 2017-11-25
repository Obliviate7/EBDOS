function confirmPass() {
  var fullPass = document.getElementById("pass");
  var isFocused = (fullPass == document.activeElement);
  if(isFocused == true ){
    document.getElementById("pass2").setAttribute("class","");
  }
}

var test = document.body;

test.style.backgroundImage = 'url("images/geometricos.png")'
function changeLayout() {
  console.log(test.style.backgroundImage)
  if (test.style.backgroundImage == 'url("images/geometricos.png")'){
    test.style.backgroundImage = 'url("images/white-wood.jpg")';
  } else if (test.style.backgroundImage == 'url("images/white-wood.jpg")'){
    test.style.backgroundImage = 'url("images/geometricos.png")';
  }
}
