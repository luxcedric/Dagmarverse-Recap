// Modify the JavaScript code to handle div elements instead of images
const carousel = document.querySelector(".carousel"),
  firstItem = carousel.querySelector(".carousel-item"),
  arrowIcons = document.querySelectorAll(".wrapper i");

  var indicator = 0;


let isDragStart = false,
  isDragging = false,
  prevPageX,
  prevScrollLeft,
  positionDiff;

  function renderDash() {
    var dashs = ""
    for (var i = 0; i < 39; i++) {
      if (i === indicator) {
        dashs += `<div class="stories-dash active" onclick="changeByIndicator(${i})"><div class="visable"></div></div>`;
      } else {
        dashs += `<div class="stories-dash" onclick="changeByIndicator(${i})"><div class="visable"></div></div>`;
      }
    }
    return dashs;
  }


  function render() {
    var dashs = renderDash();
    var wrapper = document.getElementById("wrapper2");
    wrapper.innerHTML = `
      <div class="dashs" id="dashs">
         ${dashs}
      </div>`;
  }
  
  render();

const showHideIcons = () => {
  // showing and hiding prev/next icon according to carousel scroll left value
  let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
  arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
  arrowIcons[1].style.display =
    carousel.scrollLeft == scrollWidth ? "none" : "block";
};

arrowIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    let firstItemWidth = firstItem.clientWidth + 0; // getting first item width & adding 14 margin value
    // if clicked icon is left, reduce width value from the carousel scroll left else add to it
    carousel.scrollLeft +=
      icon.id == "left" ? -firstItemWidth : firstItemWidth;
    setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
  });
});

function changeByIndicator(clickedIndicator) {
    console.log(clickedIndicator, indicator);
    let firstImgWidth = firstItem.clientWidth;
    if (clickedIndicator > indicator) {
      carousel.scrollLeft += firstImgWidth * (clickedIndicator - indicator);
    } else if (indicator > clickedIndicator) {
      carousel.scrollLeft -= firstImgWidth * (indicator - clickedIndicator);
    }
    indicator = clickedIndicator;
    document.getElementById("dashs").innerHTML = renderDash();
  }
  

const autoSlide = () => {
  // if there is no item left to scroll then return from here
  if (
    carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 ||
    carousel.scrollLeft <= 0
  )
    return;

  positionDiff = Math.abs(positionDiff); // making positionDiff value positive
  let firstItemWidth = firstItem.clientWidth + 0;
  // getting difference value that needs to add or reduce from carousel left to take middle item center
  let valDifference = firstItemWidth - positionDiff;

  if (carousel.scrollLeft > prevScrollLeft) {
    // if user is scrolling to the right
    return (carousel.scrollLeft +=
      positionDiff > firstItemWidth / 3 ? valDifference : -positionDiff);
  }
  // if user is scrolling to the left
  carousel.scrollLeft -=
    positionDiff > firstItemWidth / 3 ? valDifference : -positionDiff;
};

const dragStart = (e) => {
  // updating global variables value on mouse down event
  isDragStart = true;
  prevPageX = e.pageX || e.touches[0].pageX;
  prevScrollLeft = carousel.scrollLeft;
};

const dragging = (e) => {
  // scrolling items/carousel to the left according to the mouse pointer
  if (!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carousel.classList.add("dragging");
  positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
  carousel.scrollLeft = prevScrollLeft - positionDiff;
  showHideIcons();
};

const dragStop = () => {
  isDragStart = false;
  carousel.classList.remove("dragging");

  if (!isDragging) return;
  isDragging = false;
  autoSlide();
};

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
