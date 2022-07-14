const thumbs = document.querySelector('.thumb-img').children;
const gmap = document.querySelector('.gmap-main').children;

function changeImage(event) {
  document.querySelector('.pro-img').src = event.children[0].src;

  for (let i = 0; i < thumbs.length; i++) {
    thumbs[i].classList.remove('active');
  }

  event.classList.add('active');
}

function changeGmap(event) {
  document.querySelector('.gmap-list').src = event.children[0].src;
  for (let i = 0; i < gmap.length; i++) {
    gmap[i].classList.remove('active');
  }

  event.classList.add('active');
}
