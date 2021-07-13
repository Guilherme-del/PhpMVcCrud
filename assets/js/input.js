$(document).ready(function() {

$('#text-field2').keyup(function(){
    $('#dashsenha').val($(this).val());
});

$('#text-field').keyup(function(){
    $('#dashnome').val($(this).val());
});

});