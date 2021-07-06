
function exibeDiv () {
var elems = document.getElementsByClassName('containercad');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.display = 'inline-block';
}  
}

function closeDiv () {
    var elems = document.getElementsByClassName('containercad');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.display = 'none';

    }
}