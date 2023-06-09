//price section java script code for see price details
var firstDivs = document.getElementsByClassName("haircut_text");
var activeIndex = localStorage.getItem("activeIndex");


function showSecondDiv(index) {
  var secondDivs = document.getElementsByClassName("secondDiv");

  for (var i = 0; i < secondDivs.length; i++) {
    if (i === index - 1) {
      secondDivs[i].style.display = "";
    } else {
      secondDivs[i].style.display = "none";
    }
  }

  for (var i = 0; i < firstDivs.length; i++) {
    if (i === index - 1) {
      firstDivs[i].classList.add("active");
    } else {
      firstDivs[i].classList.remove("active");
    }
  }
  activeIndex = index;
  localStorage.setItem("activeIndex", activeIndex);
}

for (var i = 0; i < firstDivs.length; i++) {
  firstDivs[i].addEventListener("click", function () {
    var index = Array.prototype.indexOf.call(firstDivs, this) + 1;
    showSecondDiv(index);
  });
}
if (activeIndex) {
  showSecondDiv(activeIndex);
}

/* Gallery section */
var scrollController = document.querySelector(".gallery_image");

var backarrow = document.getElementById("backarrow");
var nextarrow = document.getElementById("nextarrow");

scrollController.addEventListener("wheel", (evt) => {

  evt.preventDefault();
  scrollController.scrollLeft += evt.deltaY;
  scrollController.style.scrollBehavior = "smooth";
  scrollController.scrollLeft += scrollDistance;
  scrollController.scrollTop = 0;

});

nextarrow.addEventListener("click", () => {
  scrollController.style.scrollBehavior = "smooth";
  scrollController.scrollLeft += 300;
});

backarrow.addEventListener("click", () => {
  scrollController.style.scrollBehavior = "smooth";
  scrollController.scrollLeft -= 1800;
});

/* popup-------------------------------------------------------------- 
var popup = document.getElementById("POPUP");

function openpopup() {
  popup.classList.add("open_popup")
}

function closepopup() {
  popup.classList.remove("open_popup")
}*/

