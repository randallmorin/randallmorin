sectionHeight();

function sectionHeight() {
  let viewportHeight = window.innerHeight;
  let section = document.querySelector('.success');

  document.body.style.height = viewportHeight + 'px';
}
