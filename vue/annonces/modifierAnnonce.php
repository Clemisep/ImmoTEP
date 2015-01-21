<?php
    // -------------------- Vue : formulaire de modification d'annonce

if(!isset($_GET['id']) || !annonceExiste(recGet('id'))) {
    afficherErreur($txterreurinexistant[$numeroLangue]);
} else {

    $idAnnonce = recGet('id');
    
    $champs = array('titre', 'rue', 'numero', 'ville', 'codePostal', 'typeMaison', 'nombreDeChambres', 'nombreDeLits', 'nombreDeSallesDeBain', 'superficie', 'description');
    
    if(empty($remplisAnnonce)) {
        $remplisAnnonce = [];
    }
    
    if(empty($erreursInsAnnonce)) {
        $erreursInsAnnonce = [];
    }
    
    foreach($champs as $clef => $valeur) {
        if(!array_key_exists($valeur, $remplisAnnonce)) {
            $remplisAnnonce[$valeur] = "";
        }
        
        if(!array_key_exists($valeur, $erreursInsAnnonce)) {
            $erreursInsAnnonce[$valeur] = "";
        }
    }
    
    include "vue/annonces/afficherTableDOptions.php";
?>

<center><h2><br> Modifier l'annonce</h2></center>


<?php 

$infos = recInfosAnnonce($idAnnonce);

 ?>

<form id="maison" name="FormulaireAnnonce" action="?p=38&id=<?php echo $idAnnonce; ?>" method="post">
    <p> *<?php echo $txtchampsobligatoire[$numeroLangue]; ?></p>
    <p style="color:red"> <?php if(array_key_exists('connexion', $erreursInsAnnonce)) { echo $erreursInsAnnonce['connexion']; } ?></p>
    <br/>
    <fieldset>
        <legend><h4><?php echo $txtadresse[$numeroLangue]; ?></h4></legend>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="titre">*<?php echo $txtnommerlogement[$numeroLangue]; ?></label></td>
                <td><input type="text" id="titre" name="titre" maxlength="60" value="<?php echo $infos['titre']; ?>"></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["titre"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="rue">*<?php echo $txtrue[$numeroLangue]; ?></label></td>
                <td><input type="text" id="rue" name="rue" maxlength="60"
                           value="<?php echo $infos['rue']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["rue"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="numero"><?php echo $txtnumerorue[$numeroLangue]; ?></label></td>
                <td><input type="text" id="numero" name="numero" maxlength="60"
                           value="<?php echo $infos['numero']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["numero"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="ville">*<?php echo $txtville[$numeroLangue] ?></label></td>
                <td><input type="text" id="ville" name="ville" maxlength="60"
                           value="<?php echo $infos['ville']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["ville"]; ?></span></td>
            </tr>

            <tr>
                <td><label for="codePostal">*<?php echo $txtcodepostal[$numeroLangue]; ?></label></td>
                <td><input type="text" id="codePostal" name="codePostal" maxlength="60"
                           value="<?php echo $infos['codePostal']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["codePostal"]; ?></span></td>
            </tr>
            <br/>
        </table>
    </fieldset>
    <br/>

    
    <fieldset>
        <legend><h4><?php echo $txtlogement[$numeroLangue]; ?></h4></legend>
        <br/>
        <table border="0" cellpadding="5" cellspacing="15">
            <tr>
                <td><label for="typeMaison">*<?php echo $txttypedelogement[$numeroLangue]; ?></label></td>
                <td>
                    <select name="typeMaison" size="1">
                        <option>Maison</option>
                        <option>Appartement</option>
                        <option>Chateau</option>
                        <option>Villa</option>
                        <option>Bungallow</option>
                        <option>Chalet</option>
                        <option>Autre</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="nombreDeChambres">*<?php echo $txtnbrchamb[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeChambres"
                           value="<?php echo $infos['nombreDeChambres']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeChambres"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeLits">*<?php echo $txtnbrcouchage[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeLits"
                           value="<?php echo $infos['nombreDeLits']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeLits"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="nombreDeSallesDeBain"><?php echo $txtnbrsdb[$numeroLangue]; ?></label></td>
                <td><input type="number" name="nombreDeSallesDeBain"
                           value="<?php echo $infos['nombreDeSallesDeBain']; ?>" /></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["nombreDeSallesDeBain"]; ?></span></td>
            </tr>
            <tr>
                <td><label for="superficie">*<?php echo $txtsuperficie[$numeroLangue]; ?></label></td>
                <td><input type="text" name="superficie"
                           value="<?php echo $infos['superficie']; ?>"/></td>
                <td><span class="formulaireErreur"><?php echo $erreursInsAnnonce["superficie"]; ?></span></td>
            </tr>
        </table>
    </fieldset>

    <br/>
   
    
   <br/>

    <fieldset>
        <legend><h4><?php echo $txtdescription[$numeroLangue]; ?></h4></legend>
        <br/>
        <span class="formulaireErreur"><?php echo $erreursInsAnnonce["description"]; ?></span><br/>
        <textarea name="description" rows="3" cols="30"><?php echo $infos['description']; ?></textarea>
    </fieldset>
    <br/>
    <br/>

    <fieldset>
        <legend><h4>*<?php echo $txtphotos[$numeroLangue]; ?></h4></legend>
        <p><?php echo $txttroisphoto[$numeroLangue]; ?></p>
        <div id="multipleupload">Upload</div>
        <script>
            $(document).ready(function()
            {
                $("#multipleupload").uploadFile({
                    url:"vue/upload.php",
                    multiple:true,
                    fileName:"myfile"
                });
            });

        </script>

    </fieldset>
    <br/>
    <br/>

    <tr>
        <td align="center" colspan="2"><input type="submit" name="valider" class="valider" value="modifier"
                                              style="margin-top:10px"/>
        </td>
    </tr>
</form>

<?php }