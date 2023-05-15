let btn = document.querySelector('.active-date')
let wrap = document.getElementById('popupa-wrapper');
let popupa = document.getElementById('popupa');

btn.addEventListener('click', function(){
  wrap.classList.toggle('off-wrap')
  popupa.classList.toggle('off-wrap')
  console.log('ff')
})
d2.addEventListener('click', function(){
  wrap.classList.toggle('off-wrap')
  popupa.classList.toggle('off-wrap')

})
wrap.addEventListener('click', function() {
  wrap.classList.toggle('off-wrap')
  popupa.classList.toggle('off-wrap')
})