//jQuery funksjon som 
$(document).ready(function() {
    $(".spørsmål").click(function(){
    $(this).next().slideToggle("0.3s ease-in-out");
    });  
});