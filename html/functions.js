function keyDown(e){
  var keyDownID = window.event ? event.keyCode : (e.keyCode != 0 ? e.keyCode : e.which) ;
  document.getElementById('div_keydown').innerHTML = keyDownID ;
}
function start(){
  document.getElementsByTagName('body')[0].addEventListener('keydown', keyDown, false) ;
}