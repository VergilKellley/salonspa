//LANDING PAGE ANIMATION
//https://github.com/robin-dela/hover-effect/tree/master/images
//https://github.com/robin-dela/hover-effect

// NAVBAR
TweenMax.staggerFrom(
  "#nav ul li",
  0.5,
  {
    // delay: 0.3,
    opacity: "0",
    y: "20",
    ease: Expo.easeInOut,
  },
  0.08
);

TweenMax.from("#model-0", 1.5, {
  /*delay: 1.3,*/
  opacity: 0,
  y: "100%",
  ease: Expo.easeInOut,
});

// angel hair text
TweenMax.from("#grid-container-1 div h1", 1.5, {
  delay: 0.4,
  opacity: 0,
  y: "100%",
  ease: Expo.easeInOut,
});

// salon spa text
TweenMax.from("#grid-container-1 div h3", 1.5, {
  delay: 0.6,
  opacity: 0,
  x: "20",
  ease: Expo.easeInOut,
});

// landing page p text
TweenMax.from("#grid-container-1 div p", 1.5, {
  delay: 1.2,
  opacity: 0,
  y: "20",
  ease: Expo.easeInOut,
});

// call now image
TweenMax.from(
  ".phoneImg",
  1.8,
  {
    delay: 1.5,
    opacity: "0",
    y: "20",
    ease: Expo.easeInOut,
  },
  0.08
);

// call now text
TweenMax.from(
  "#callNow",
  1.8,
  {
    delay: 1.7,
    opacity: "0",
    y: "20",
    ease: Expo.easeInOut,
  },
  0.08
);

/*
// SPONSOR
TweenMax.from(".sponsor img", 1.5, {
  //delay: 1.5,
  opacity: 0,
  y: "20",
  ease: Expo.easeInOut,
});

TweenMax.from(".sponsor p", 1.5, {
  //delay: 1.6,
  opacity: 0,
  y: "20",
  ease: Expo.easeInOut,
});

// DISTORTION
TweenMax.from(".distortion", 1.5, {
  // delay: 1,
  opacity: 0,
  y: "20",
  ease: Expo.easeInOut,
});

// OVERLAY
TweenMax.to(".first", 1.5, {
  //delay: 0.5,
  top: "-100%",
  ease: Expo.easeInOut,
});

TweenMax.to(".second", 1.5, {
  //delay: 0.7,
  top: "-100%",
  ease: Expo.easeInOut,
});

TweenMax.to(".third", 1.5, {
  //delay: 0.9,
  top: "-100%",
  ease: Expo.easeInOut,
});

let tl = new TimelineMax({ onUpdate: updatePercentage });
let tl2 = new TimelineMax();
const controller = new ScrollMagic.Controller();

tl.from("blockquote", 0.5, { x: 200, opacity: 0 });
tl.from("#blockquote-span", 1, { width: 0 }, "=-.5");
tl.from("#model-2", 1, { x: -200, opacity: 0 }, "=-1");
tl.from("#model-3", 1, { x: 100, opacity: 0 }, "=-.7");

tl2.from("#box", 0.5, { opacity: 0, scale: 0 });
tl2.to("#box", 0.5, {
  left: "20%",
  scale: 1.3,
  borderColor: "black",
  borderWidth: 12,
  boxShadow: "1px 1px 0px 0px rgba(220,20,60, .5)",
});

const scene = new ScrollMagic.Scene({
  triggerElement: ".sticky",
  triggerHook: "onLeave",
  duration: "100%",
})
  .setPin(".sticky")
  .setTween(tl)
  .addTo(controller);

const scene2 = new ScrollMagic.Scene({
  triggerElement: "blockquote",
})

  .setTween(tl2)
  .addTo(controller);

function updatePercentage() {
  tl.progress();
  // console.log(tl.progress());
}
*/
// Image slider https://www.youtube.com/watch?v=afoxd5b0bJo

const current = document.querySelector("#current");
const imgs = document.querySelectorAll(".imgs img");
const opacity = 0.2;

imgs[0].style.opacity = opacity;

imgs.forEach((img) => img.addEventListener("click", imgClick));

function imgClick(e) {
  imgs.forEach((img) => (img.style.opacity = 1));

  current.src = e.target.src;

  current.classList.add("fade-in");

  setTimeout(() => current.classList.remove("fade-in"), 500);

  e.target.style.opacity = opacity;
}

/**********************
  Second Photo Gallery
**********************/

const current2 = document.querySelector("#current2");
const imgs2 = document.querySelectorAll(".imgs2 .img2");

// Set first image opacity
imgs2[0].style.opacity = opacity;

imgs2.forEach((img2) => img2.addEventListener("click", imgClick2));

function imgClick2(e) {
  //Reset the opacity
  imgs2.forEach((img2) => (img2.style.opacity = 1));

  // Change current image to src of clicked image
  current2.src = e.target.src;

  // Add fadeIn class
  current2.classList.add("fade-in");

  // Remove fadeIn class after .5 seconds
  setTimeout(() => current2.classList.remove("fade-in"), 500);

  // Change opacity to opacity variable
  e.target.style.opacity = opacity;
}

/*****************************
 MOBILE NAV
 *****************************/
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach((link) => {
    link.classList.toggle("fade");
  });
});
