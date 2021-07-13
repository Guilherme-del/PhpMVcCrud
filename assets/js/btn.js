function toggleReadOnly(element_id)
{
    document.getElementById(element_id).readOnly = false;
    document.getElementById(element_id).focus();

var elems = document.getElementsByClassName('salva');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.display = 'inline-block';

var elems = document.getElementsByClassName('cancela');
for (var i=0;i<elems.length;i+=1){
    elems[i].style.display = 'inline-block';
  }
}  
}

function toggleReadOnlyfalse(element_id)
{
    document.getElementById(element_id).readOnly = true;

var elems = document.getElementsByClassName('salva');
for (var i=0;i<elems.length;i+=1){
  elems[i].style.display = 'none';

var elems = document.getElementsByClassName('cancela');
for (var i=0;i<elems.length;i+=1){
    elems[i].style.display = 'none';
  }
}  
}
