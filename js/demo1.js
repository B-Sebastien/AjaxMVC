$(function(){
    //Change la valeur au clique
    $("#section1").on("click",
        function() {
            $("#section1").load("include/d1_click&affiche.php");
        });
    
    //Fait passer le nom en request et le retourne
    $("#envoyer").on("click",
        function() {
            $("#sectionnom").load("include/d1_submitname.php", {
                "nom" : $("#nom").val() 
            });
        });

    //Récupère la valeur et retourne la phrase complémentaire
    $("input.cocktail").on("click",   
        //$("input.cocktail:checked",   
        //$("input[name=cocktail]:selected", 
        function() {
            $("#pied").load("include/d1_cocktail.php", {
                "cocktail" : $(this).val() 
            });
        });
        
}); // fin fonction principale