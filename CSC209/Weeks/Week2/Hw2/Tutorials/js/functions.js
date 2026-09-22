// hide certain elements for classes tutorial
function HideStyles() {
  var x = document.getElementsByClassName("list-style");
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
};

// change the displayed text for id tutorial
function ChangeIdText() {
    document.getElementById("list-item").innerHTML = "Text has been changed!";
    
};

// change the image for javascript tutorial
function ChangeImage() {
  document.getElementById("change-photo").src = "../Images/alfredo.jpeg"
};