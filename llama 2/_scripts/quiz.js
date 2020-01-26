var slides = document.getElementsByClassName("images");

window.onload = function() {
    var iframe = document.getElementById('forPostyouradd');
    var close = document.getElementById('close-quiz');
    close.style.display = 'none';
    iframe.style.display = 'none';
    hideSlides();
    // var questions = document.getElementsByClassName("aproblem");
    slides[0].style.display = "block";
}


function openQuiz () {
    var iframe = $("#forPostyouradd");
    var ifra = document.getElementById('forPostyouradd');
    var close = document.getElementById('close-quiz');
    ifra.style.display= "block";
    close.style.display = 'block';
    iframe.attr("src", iframe.data("src"));
}

function closeQuiz() {
    var ifra = document.getElementById('forPostyouradd');
    var close = document.getElementById('close-quiz');
    ifra.style.display= "none";
    close.style.display = 'none';
}




function hideSlides(){
  // var questions = document.getElementsByClassName("aproblem");
  var i = 0;
  for(; i < slides.length; i++){
    slides[i].style.display = "none";
  }
}


var slide_index = 0;
function nextSlide(){
  hideSlides();
  slide_index = slide_index+1;
    if(slide_index == slides.length){
  slide_index = 0;
}
  slides[slide_index].style.display = "block";
}



function prevSlide(){
  hideSlides();
  slide_index = slide_index-1;
  if(slide_index <1){
  slide_index = slides.length-1;
}

  
  slides[slide_index].style.display = "block";
}
