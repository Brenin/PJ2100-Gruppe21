//jQuery slideToggle funksjon som viser og skjuler elementet etter elementet
//med klasse "spørsmål" - dvs. svar. Funksjonen aktiveres ved trykk på element
//av spørsmåls-klassen, og aktiverer deretter show/hide av det neste elementet
//på siden: Seksjonselementet som etterfølger, og som er en del av svar-klassen.
$(document).ready(function() {
    $(".spørsmål").click(function(){
    $(this).next().slideToggle("0.3s ease-in-out");
    });  
});