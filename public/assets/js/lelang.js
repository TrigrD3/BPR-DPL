const thumbs = document.querySelector('.thumb-img').children;

function changeContent(event) {
  document.querySelector('.pro-img').src = event.children[0].src;
  document.querySelector('.gmap').src = event.children[1].src;
  for (let i = 0; i < thumbs.length; i++) {
    thumbs[i].classList.remove('active');
  }
  event.classList.add('active');
}
