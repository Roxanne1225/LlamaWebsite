// window.onload = function() {
//   // var questions = document.getElementsByClassName("aproblem");
//   // questions[0].style.display = "block";
// }
//
//
// var slideIndex = 1;
// showQuestion(slideIndex);
//
// // Next/previous controls
// function nextQuestion(n) {
//   showQuestion(slideIndex += n);
// }
//
// // Thumbnail image controls
// function currentSlide(n) {
//   showQuestion(slideIndex = n);
// }
//
// function showQuestion(n) {
//   var i;
//   var questions = document.getElementsByClassName("aproblem");
//   if (n > questions.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = questions.length}
//   for (i = 0; i < questions.length; i++) {
//     questions[i].style.display = "none";
//   }
//
//   questions[slideIndex-1].style.display = "block";
//   // dots[slideIndex-1].className += " active";
//   // captionText.innerHTML = dots[slideIndex-1].alt;
// }

var questions = document.getElementsByClassName("aproblem");
window.onload = function(){
    hideQuestion();
    // var questions = document.getElementsByClassName("aproblem");
    questions[0].style.display = "block";
}
function hideQuestion(){
  // var questions = document.getElementsByClassName("aproblem");
  var i = 0;
  for(; i < questions.length; i++){
    questions[i].style.display = "none";
  }
}


var question_index = 0;
function nextQuestion(){
  hideQuestion();
  // var questions = document.getElementsByClassName("aproblem");
  question_index = question_index+1;
  questions[question_index].style.display = "block";
}


// var correctness = document.getElementById("correctness");
var correct = 0;
// check answer : elem: this(current element); n = 1 for right answer, n = 0 for wrong answer
function checkAnswer(elem, n){
  if(n == 1){

  correct = correct+1;
  elem.classList.add("clicked-right");
}else{
  elem.classList.add("clicked-wrong");
}
}


function update_correct(){
    var cor = document.getElementById("correctness");
    cor.value = correct;
}
