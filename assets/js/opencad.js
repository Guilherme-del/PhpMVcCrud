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

function aviso () {
  var elems = document.getElementsByClassName('quadro_de_aviso');
  for (var i=0;i<elems.length;i+=1){
    elems[i].style.display = 'inline-block';  
  }
  var elems = document.getElementsByClassName('content_area');
  for (var i=0;i<elems.length;i+=1){
    elems[i].style.opacity = '0.1';  
  }
  var elems = document.getElementsByClassName('box_dashboard');
  for (var i=0;i<elems.length;i+=1){
    elems[i].style.opacity = '0.1';  
  }
  }

  function avisofechar () {
    var elems = document.getElementsByClassName('quadro_de_aviso');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.display = 'none';  
    }
    var elems = document.getElementsByClassName('content_area');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.opacity = '1';  
    }
    var elems = document.getElementsByClassName('box_dashboard');
    for (var i=0;i<elems.length;i+=1){
      elems[i].style.opacity = '1';  
    }
    } 
