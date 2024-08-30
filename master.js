console.log("hello from js")
console.log("iam medhat")



let slideIndex = [1,1];
let slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
// let prevScrollY = window.scrollY;

// window.addEventListener('scroll', function() {
//   const currentScrollY = window.scrollY;

//   if (currentScrollY > prevScrollY) {
//     // Scrolling down, hide the navbar
//     document.querySelector('header').style.transform = 'translateY(-100%)';
//   } else {
//     // Scrolling up, show the navbar
//     document.querySelector('header').style.transform = 'translateY(0)';
//   }

//   prevScrollY = currentScrollY;
// });