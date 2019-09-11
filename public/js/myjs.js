
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;
var image = document.getElementsByClassName("card-img-top");
var detail = document.getElementsByClassName("card-body");
// List View
function listView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
    for (i = 0; i < image.length; i++) {
        image[i].style.width="40%";
    }
    for (i = 0; i < detail.length; i++) {
        detail[i].style.width = "60%";
        detail[i].style.cssFloat="right";
    }
}

// Grid View
function gridView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "32%";

    }
    for (i = 0; i < image.length; i++) {
        image[i].style.width="100%";
    }
    for (i = 0; i < detail.length; i++) {
        detail[i].style.width= "100%";
    }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
/* Optional: Add active class to the current button (highlight it) */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
