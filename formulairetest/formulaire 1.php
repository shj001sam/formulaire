<?php include"header.php" ?>
            <h3>veuillez remplir le formulaire</h3>
            <form action="traitement.php" method="post" class="contenant-form">
                <fieldset id="section1">
                    <legend>Information personnel</legend>
                    
                    <input type="text" id="nom" name="nom" placeholder="NOM" class="champ" required><br>

                    <input type="text" name="prenom" placeholder="PRENOM" class="champ" required><br>

                    <input type="radio" name="genre[]" id="genre" checked="checked" value="Homme" class="genre" required> Homme 
                    <input type="radio" name="genre[]" id="genre" value="Femme" class="genre" required> Femme

                    <input type="email" name="email" placeholder="Email" class="champ" required>

                    <input type="tel" name="telephone"  id="numero" placeholder="NUMERO DE TELEPHONE" class="champ"><br>

                </fieldset> <br>

                <fieldset id="section2">
                    <legend>Information du voyage</legend>
                
                    <input type="text" name="depart"  id="depart" class="cadre1" placeholder="DEPART" required><br>

                    <input type="text" name="destination"  id="destination" class="cadre1" placeholder="DESTINATION" required><br>

                    <input type="radio" name="aller[]" id="aller" checked="checked" value="Aller simple" required> <label for="aller" class="simple">Aller simple</label> 
                    <input type="radio" name="aller[]" id="retour" value="Aller retour" required> <label for="retour" class="simple">Aller retour</label> <br>

                    <label for="date depart">Date de depart :</label>
                    <input type="date" name="date_depart" id="date depart" max="2019-09-30" min="2019-08-08" class="cadre2" required>

                    <label for="date retour">Date de retour :</label>
                    <input type="date" name="date_retour" id="date retour" min="2019-08-08" class="cadre2"> <br>

                    <label for="nombre">Nombre de palce :</label>
                    <input type="number" name="nombre" id="nombre" class="cadre" max="15" min="0" value="1" required> <br>
                
                </fieldset>
                
                <input type="submit" value="Valider" class="bouton">
                <input type="reset" value="annuler" class="boutton">

            </form>
        </div>
    </body>
</html>