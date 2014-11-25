<?php /* Ceci est la bannière dynamique comportant les images en défilement et s'affichant sur la page d'accueil. */ ?>

<div id="banniere">
    <div id="banniere_contenu">
        <img src="vue/logement1.jpeg"/>
        <img src="vue/logement2.jpeg"/>
        <img src="vue/logement3.jpeg"/>
        <img src="vue/logement4.jpeg"/>
    </div>
    
    <img src="vue/flecheGauche.png"/>
    <img src="vue/flecheDroite.png"/>
</div>

<script>
    <?php /* Permet d'obtenir la règle correspondant à un sélecteur. */ ?>
    function regle(selecteur){
        var cmpt = 0;
        var index = 0;
        var regles = null;
        var fini = false;
        
        while(index<document.styleSheets.length && !fini){
            regles = document.all ? document.styleSheets[index].rules : document.styleSheets[index].cssRules;

            while(cmpt<regles.length && !fini){
                if(regles[cmpt].selectorText.toLowerCase() != selecteur)
                    fini = true;
                cmpt++;
            }
            
            index++;
        }
        
        return {sheetIndex:index-1,ruleIndex:cmpt-1};
    }
    
    <?php /* Modifie la règle correspondant au sélecteur en lui donnant celle de "texteCSS". */ ?>
    function modifierRegle(selecteur, texteCSS, suppression) {
        infos = regle(selecteur);
        sheet = document.styleSheets[infos.sheetIndex];
        if(document.all) {
            if(suppression) sheet.removeRule(infos.ruleIndex);
            sheet.addRule(selecteur,texteCSS);
        } else {
            if(suppression) sheet.deleteRule(infos.ruleIndex);
            sheet.insertRule(selecteur+"{"+texteCSS+"}", sheet.cssRules.length);
        }
    }
    
    
    var banniere = document.getElementById("banniere_contenu");
    var images = banniere.childNodes;
    var largeur = window.innerWidth;
    var hauteur = window.innerHeight;
    var largeurImg = largeur-120;
    var hauteurImg = hauteur-300;
    
    modifierRegle("#banniere_contenu img",
                  "display:inline-block;width:"+(largeurImg)+"px; height:"+(hauteurImg)+"px;",
                  false);
    
    modifierRegle("#banniere_contenu",
                  "width:"+(largeurImg)+"px; height:"+(hauteurImg)+"px;"
                      +"position:absolute;clip:rect(0px,"+hauteurImg+"px,"+hauteurImg+"px,0px);overflow:hidden;",
                  false);
    
    /* modifierRegle("#banniere_contenu img",
                  "top:"+(hauteurImg/2)+"px;",
                  false);
    /* */
</script>