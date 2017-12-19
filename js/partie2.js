$(function () {
   $("select[name='arrondissement']").on("change",
        function() {
            $.get("include/p2_arrondissement.php", {
                "arrondissement" : $(this).val()
            },
                    foncRetour,"json");
            });
            
            function foncRetour(data) {
               //alert("test") ;
               $("#ecoles").empty();
               for (var key in data)
                    $("#ecoles").append("<option>"+data[key].nom+"</option>");
            } 
});