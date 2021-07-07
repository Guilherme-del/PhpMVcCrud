function exibeDiv () {
var elems = document.getElementsByClassName('containercad');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.display = 'inline-block';  
}
var elems = document.getElementsByClassName('slider');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.opacity = '0.2';  
}
var elems = document.getElementsByClassName('login');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.opacity = '0.2';  
}
}

function closeDiv () {
    var elems = document.getElementsByClassName('containercad');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.display = 'none';
    }
    var elems = document.getElementsByClassName('slider');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.opacity = '1';  
    }
    var elems = document.getElementsByClassName('login');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.opacity = '1';  
    }
}