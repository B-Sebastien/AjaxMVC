$(function(){
    $("SELECT[name='table']").on("change",
        function() {
            $.get("retourJson.php", {
                "table" : $(this).val() 
            },
            foncRetour, "json");
        });
        
        function foncRetour(data) {
            $("#tab").empty(); //validation de la liste
            for (var key in data)
                //append : ajoute valeur fin tableau
                $("#tab").append("<tr><td>"+key+"</td></tr>"+data[key]+"</td></tr>");
        }
}); // fin fonction principale