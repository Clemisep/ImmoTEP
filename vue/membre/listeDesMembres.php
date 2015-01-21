<fieldset>
    <legend><h2><?php echo $txtlistedesmembres[$numeroLangue]; ?></h2></legend>
    
    <?php
        $listeDesMembres = recListeDesMembres();
        
        foreach ($listeDesMembres as $membre) {
            $idMembre = $membre['idMembre'];
            echo "<a class='lienMembre' href='".recLienProfilMembre($idMembre)."'>".$membre['pseudonyme']."</a><br/>";
        }
    ?>
</fieldset>