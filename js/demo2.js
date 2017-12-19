$(function(){
    
    //Table de multiplication
    $("select[name='table']").on("change",
        function() {
            $("#pied").load("include/d2_multiplier.php", {
                "table" : $(this).val()
            });
        });
        
        
}); // fin fonction principale