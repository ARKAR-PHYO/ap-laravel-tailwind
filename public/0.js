(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/modal-open.js":
/*!************************************!*\
  !*** ./resources/js/modal-open.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var openmodal = document.querySelectorAll('.modal-open');

for (var i = 0; i < openmodal.length; i++) {
  openmodal[i].addEventListener('click', function (event) {
    event.preventDefault();
    toggleModal();
  });
}

var overlay = document.querySelector('.modal-overlay');
overlay.addEventListener('click', toggleModal);
var closemodal = document.querySelectorAll('.modal-close');

for (var i = 0; i < closemodal.length; i++) {
  closemodal[i].addEventListener('click', toggleModal);
}

document.onkeydown = function (evt) {
  evt = evt || window.event;
  var isEscape = false;

  if ("key" in evt) {
    isEscape = evt.key === "Escape" || evt.key === "Esc";
  } else {
    isEscape = evt.keyCode === 27;
  }

  if (isEscape && document.body.classList.contains('modal-active')) {
    toggleModal();
  }
};

function toggleModal() {
  var body = document.querySelector('body');
  var modal = document.querySelector('.modal');
  modal.classList.toggle('opacity-0');
  modal.classList.toggle('pointer-events-none');
  body.classList.toggle('modal-active');
}

/***/ })

}]);