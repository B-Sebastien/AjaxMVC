$(function(){
    
    $("#bouton").on("click",
        function() {
            $.post("include/d3_form.php", {
                "nom" : $("#nom").val(),
                "prenom" : $("#prenom").val(),
                "adresse" : $("#adresse").val(),
                "tel" : $("#tel").val()
            },
            foncRetour);
        });
        function foncRetour(data) {
            $("#pied").html(data);
        } 
        
}); // fin fonction principale