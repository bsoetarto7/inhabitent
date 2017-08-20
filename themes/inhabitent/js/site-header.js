(function() {
  headerInverse();
  window.onscroll = function() {
    headerInverse();
  };
})();

function headerInverse(){
  if(window.scrollY>=window.innerHeight){
    document.getElementById('masthead').classList.remove('header-inverse');
  }else{
    document.getElementById('masthead').classList.add('header-inverse');
  }
}