<h1>Choisir votre école primaire</h1>

<p>
    Sélectionner un arrondissement
    <select name="arrondissement" id="arrondissement">
        <option></option>
        <?php
        foreach ($lesLignesArrondissements as $uneLigneArrondissement) {
            $arrondissement = $uneLigneArrondissement['arrondissement'];
            echo "<option>" . $arrondissement . "</option>";
        }
        ?>
    </select>
</p>

<p>
    Sélectionner une école de cet arrondissement
    <select name="ecoles" id="ecoles">
        <option></option>
        <?php

        ?>
    </select>
</p>
<div id ="detail"></div>