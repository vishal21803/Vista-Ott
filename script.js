$(document).ready(function(){

  $('.carousel').carousel({
  interval: 6000, // slide every 3s
  pause: "hover"
   

});

    });



document.addEventListener("DOMContentLoaded", function () {
  const carousels = document.querySelectorAll(".movie-section");

  carousels.forEach(section => {
    const leftBtn = section.querySelector(".scroll-button.left");
    const rightBtn = section.querySelector(".scroll-button.right");
    const carousel = section.querySelector(".movie-carousel");

    if (!leftBtn || !rightBtn || !carousel) return;

    leftBtn.addEventListener("click", () => {
      carousel.scrollBy({
        left: -300,
        behavior: "smooth",
      });
    });

    rightBtn.addEventListener("click", () => {
      carousel.scrollBy({
        left: 300,
        behavior: "smooth",
      });
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const carousels = document.querySelectorAll(".language-section");

  carousels.forEach(section => {
    const leftBtn = section.querySelector(".scroll-button.left");
    const rightBtn = section.querySelector(".scroll-button.right");
    const carousel = section.querySelector(".language-carousel");

    if (!leftBtn || !rightBtn || !carousel) return;

    leftBtn.addEventListener("click", () => {
      carousel.scrollBy({
        left: -300,
        behavior: "smooth",
      });
    });

    rightBtn.addEventListener("click", () => {
      carousel.scrollBy({
        left: 300,
        behavior: "smooth",
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const carousels = document.querySelectorAll(".genre-section");

  carousels.forEach(section => {
    const leftBtn = section.querySelector(".scroll-button.left");
    const rightBtn = section.querySelector(".scroll-button.right");
    const carousel = section.querySelector(".genre-carousel");

    if (!leftBtn || !rightBtn || !carousel) return;

    leftBtn.addEventListener("click", () => {
      carousel.scrollBy({
        left: -300,
        behavior: "smooth",
      });
    });

    rightBtn.addEventListener("click", () => {
      carousel.scrollBy({
        left: 300,
        behavior: "smooth",
      });
    });
  });
});


// function replace(event, link) {
//   // event.preventDefault(); 

//   fetch(link.href);

//   const icon = link.querySelector("i");

//   icon.className = "bi bi-check";
// }






//play bytton final
function play(event,cur){
   event.preventDefault();
  document.getElementById("movie").style.opacity=1;
  cur.style.visibility="hidden";
  document.getElementById("movie").setAttribute("controls","");
    document.getElementById("movie").setAttribute("poster","");
    document.getElementById("movie").play();
        document.getElementById("details").style.visibility="hidden";
        



}


// Carousel watch or delete
$(document).ready(function () {
  $(".bookmark-icon").click(function (e) {
    e.preventDefault();
    const icon = $(this);
    const id = icon.data("id");

    let url = icon.hasClass("bi-check") ? "deleteWatch.php" : "insertWatch.php";

    $.get(url, { cid: id }, function (response) {
      if (response === "inserted") {
        icon.removeClass("bi-bookmark").addClass("bi-check");
      } else if (response === "deleted") {
        icon.removeClass("bi-check").addClass("bi-bookmark");
      } else {
        alert("Something went wrong: " + response);
      }
    });
  });
});



  // Delete movie card

$(document).ready(function () {

  $(".x-icon").click (function(e){
    e.preventDefault();
    const icon = $(this);
    const id = icon.data("id");

    

    $.post("deleteRecent.php", { cid: id }, function(response){
      if(response === "deleted"){
        $("#movie-card-wrapper-" + id).fadeOut(300, function(){
          $(this).remove();
        });
      } 
    })
  });

});

  $(document).ready(function(){
     $("#wsign").blinkText(1000);
  });

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

//   $(document).ready(function(){
//     $("#series").change(function(){
//         var seriesId = $(this).val();
//         if(seriesId){
//             $.ajax({
//                 url: "getSeason.php",
//                 type: "POST",
//                 data: {id: seriesId},
//                 success: function(response){
//                     $("#snumlabel").html(response);
//                 }
//             });
//         } else {
//             $("#numlabel").html("");
//         }
//     });
// });
  
  // let prevScrollPos = window.pageYOffset;
  // const nav = document.querySelector("nav");

  // window.onscroll = function () {
  //   let currentScrollPos = window.pageYOffset;

  //   if (prevScrollPos > currentScrollPos) {
  //     nav.style.top = "0"; // show nav
  //   } else {
  //     nav.style.top = "-80px"; // hide nav
  //   }

  //   prevScrollPos = currentScrollPos;
  // };
