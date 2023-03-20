
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }


    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right= "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }


// select all slides

const slides = document.querySelectorAll(".slide");

//loop through slides and set each slide to translateX property to index * 100%
slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${indx * 100}%)`;
});

//select next slide button
const nextSlide = document.querySelector(".btn-next");

// current slide counter
let curSlide = 0;

// maximum number of slides
let maxSlide = slides.length -1;

//add event listener and next slide functionality
nextSlide.addEventListener("click", function() {
    //check if current slide is the last and reset current slide
    if(curSlide==maxSlide){
        curSlide =0;
    } else {
        curSlide++;
    }

    //move slide by -100%
    slides.forEach((slide, indx) =>{
    slide.style.transform = `translateX(${100 *(indx- curSlide)}%)`;

    });
});


// select prev slide button
const prevSlide = document.querySelector(".btn-prev");

// add event listener and navigation functionality
prevSlide.addEventListener("click", function () {
  // check if current slide is the first and reset current slide to last
  if (curSlide === 0) {
    curSlide = maxSlide;
  } else {
    curSlide--;
  }

  //   move slide by 100%
  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
  });
});
