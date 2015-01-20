<?php

$txtentrernombre = array("Veuillez entrer un nombre entier décimal positif", "Please give a decimal integer positive number");
$txtentrerflottant = array("Veuillez entrer un nombre décimal positif avec un point à la place d'une virgule", "Please give a decimal positive number");
$txtpastroplong1 = array("L'occurrence ne doit pas faire plus de ", "The occurence's size must not have a size above ");
$txtpastroplong2 = array(" caractères", " characters");

//validation annonce
$txtErreur1 = array("Erreur : la page n'a pas été trouvée." , "Error: page not found.");
$txtdepoannonce = array("Vous devez vous connecter pour déposer une annonce" , "You must log in to post an ad");
$txttitrelogement = array("Veuillez donner un titre à votre logement" , "Please, give a name to your tenement");
$txtruelogement = array("Veuillez indiquer la rue de votre logement" , "Please, indicate the street of your tenement");
$txtnumerologement = array("Veuillez indiquer le numéro du logement" , "Please, indicate your tenement's number");
$txtindiquerville = array("Veuillez indiquer la ville" , "Please, indicate the city");
$txtindiquercodepost = array("Veuillez indiquer le code postal" , "Please, indicate the area code");
$txttypelogement = array("Veuillez indiquer le type de logement" , "Please, indicate the type of your tenement");
$txtnbrchambres = array("Veuillez indiquer le nombre de chambres" , "Please, indicate the number of rooms");
$txtnbrlits = array("Veuillez indiquer le nombre de lits" , "Please, indicate the number of beds");
$txtnbrsallebain = array("Veuillez indiquer le nombre de salles de bain" , "Please, indicate the number of bathrooms");
$txtindiquersuperficie = array("Veuillez indiquer la superficie" , "Please, indicate the surface");
$txtdecrirelogement = array("Veuillez décrire le logement" , "Please, describe your tenement");

//validation inscription
$txtentrernom = array("Veuillez entrer votre nom" , "Please, enter your name");
$txtentrerprenom = array("Veuillez entrer votre prenom" , "Please, enter your first name");
$txtentrerpseudo = array("Veuillez entrer votre pseudonyme" , "Please, enter your pseudo");
$txtpseudopris = array("Ce pseudonyme est déjà pris, veuillez en choisir un autre", "This pseudo is already used, please choose an other one");
$txtentrernaissance = array("Veuillez entrer votre date de naissance" , "Please, enter your birthday");
$txtentrernaissancebonformat = array("Veuillez entrer votre date de naissance sous le format JJ/MM/AAAA",
        "Please enter you birthdate in the following format: DD/MM/YYYY");
$txtvousdevezetremajeur = array("Vous devez être majeur pour pouvoir vous inscrire", "You have to be at least 18 years old to suscribe");
$txtentreremail = array("Veuillez entrer votre adresse électronique" , "Please, enter your email");
$txtentreremailvalide = array("Veuillez entrer une adresse électronique valide" , "Please, enter a valid email");
$txtentrernumtel = array("Veuillez entrer votre numéro de téléphone" , "Please, enter your phone number");
$txtchoisirmdp = array("Veuillez choisir un mot de passe" , "Please, choose a password");
$txtchoisirmdpsecurise = array("Veuillez choisir un mot de passe d'au moins 8 caractères avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial",
                        "Please choose a password with at least 8 characters and at least one capital letter, one minuscule, one digit and one special symbol");
$txtconfirmemdp = array("Veuillez confirmer votre mot de passe" , "Please, confirm your password");
$txtmdpdifferents = array("Le mot de passe et sa confirmation sont différents" , "Password and confirmation are different");
$txtdonneradresse = array("Veuillez donner votre adresse postale" , "Please, give your adress");
$txtsexes = array("Veuillez renseigner votre sexe" , "Please, enter your gender");
$txtacceptereglement = array("Vous devez accepter le règlement pour vous inscrire" , "You must accept the settlement to sign up");
$txtmajeur = array("vous devez etre majeur pour vous inscrire" , "You must be an adult to sign up");
$txtfininscription = array("Votre inscription a bien été prise en compte." , "Your subscription has been taken into account");
//connexion
$txtremplirchamps = array("Vous devez remplir tout les champs !" , "You must fill in all fields");
$txtconnexionreussie = array("Connexion au site réussie. Vous êtes désormais connecté !" , "Successful conection. You're now connected !");
$txtnommdpincorrect = array("Nom de compte ou mot de passe incorrect !" , "Pseudo or password incorrect");
$txtdoitactivercompte = array("Vous devez activer votre compte pour vous connecter", "You must activate your account to connect");
$txtentrerpseudovalide = array("Le pseudo doit faire au moins deux caractères, ne peut contenir que des lettres et chiffres ou le tiret-bas et doit commencer par une lettre",
                                "The pseudo must be at least two characters-length, contain only letters, digits and underscores, and begin with a letter");

//vue
//annonces
$txtresultrecherche = array("Résultats de la recherche" , "Search results");
$txtmembre = array("Membre :" , "Member:");
$txterreurannonce1 = array("Vous devez vous connecter pour consulter vos annonces." , "You must log in to consult your ads");
$txterreurannonce2 = array("Vous n'avez encore aucune annonce." , "You do not have any ads.");
//inscription maison
$txtajoutermaison = array("Ajouter une maison" , "Add a tenement");
$txtchampsobligatoire = array("Les champs obligatoires sont précédés d'une étoile." , "Required fields are marked with a star");
$txtadresse = array("Adresse" , "Adress");
$txtnommerlogement = array("Nommer son logement :" , "Name your tenement:");
$txtrue = array("Rue :" , "Street:");
$txtnumerorue = array("Numéro :" , "Number:");
$txtville = array("Ville :" , "City:");
$txtcodepostal = array("Code postal :" , "Area code:");
$txtlogement = array("Logement" , "Tenement");
$txttypedelogement = array("Type de logement :" , "Type of tenenement:");
$txtnbrchamb = array("Nombre de chambres :" , "Number of rooms:");
$txtnbrcouchage = array("Nombre de couchages :" , "Number of beds:");
$txtnbrsdb = array("Nombre de salles de bain :" , "Number of bathrooms:");
$txtsuperficie = array("Superficie :" , "Surface:");
$txtequipement = array("Equipements" , "Equipments");
$txtservices = array("Services" , "Services");
$txtcontraintes = array("Contraintes" , "Constraints");
$txtdescritpion = array("Description" , "Description");
$txtphotos = array("Photos" , "Photos");
$txtajoutermais = array("Ajouter maison" , "Add tenement");
$txttroisphoto = array("Vous devez inclure au moins 3 photos de votre logement." , "You must include at least 3 photos of your tenement");
$txtrendrepublic = array("Rendre l'annonce publique dès maintenant" , "Make the ad public now");
//accueil
$txtTEP = array("Troc Entre Particulier" , "Tenement Exchange between Particular");
$txttexteaccueil = array("Grâce à ImmoTEP vous pouvez trouver le logement idéal pour vous, gratuitement, à condition de réaliser les services demandés par le propriétaire et de respecter les contraintes indiquées.
ImmoTEP vous propose :" , "With ImmoTEP you can find the ideal tenement for you, free, provided to perform the services requested by the owner and respect given constraints. ImmoTEP offers:");
$txtservicegratuit = array("Un service <strong>Gratuit</strong>" , "A <strong>Free</strong> service");
$txtannoncedetaille = array("Des annonces <strong>Détaillées</strong>" , "<strong>Detailed</strong> ads");
$txtrecherchefacile = array("Une <strong>Recherche</strong> facile à utiliser" , "An easy <strong>Search</strong> to use");
    //Nous contacter
$txtnouscontacter = array("Nous contacter" , "Contact us");
$txtparvenirmessage = array("Nous faire parvenir un message :" , "Send us a message");
$txtchampobjet = array("Objet :" , "Object");
$txtchampnom = array("Nom :" , "Name:");
$txtchamptelephone = array("Numéro de téléphone :" , "Phone number:");
$txtchampemail = array("Votre e-mail :" , "Your email");
$txtchampvotremessage = array("Votre message :" , "Your message");
$txtnoscoordonnee = array("Nos Coordonnées :" , "Our contact information");
$txtruedevanves = array("10 rue de vanves, Issy-Les-Moulineaux 92130" , "10 rue de vanves, Issy-Les-Moulineaux 92130");


    //Entête
$txtaccueil = array("Accueil" , "Home");
$txtannonces = array("Annonces" , "Ads");
$txtdernieresannonces = array("Dernières annonces" , "Last ads");
$txtmesannonces = array("Mes annonces", "My ads");
$txtmodifannonce = array("Créer/Modifier une annonce" , "Create/Change an ad");
$txtforum = array("Forum" , "Forum");
$txtrechercher = array("Rechercher :" , "Search:");
$txtconnexion = array("Connexion" , "Sign in");
$txtsinscrire = array("S'inscrire" , "Register");
$txtseconnecter = array("Se connecter" , "Sign in");
$txtsedeconnecter = array("Déconnexion" , "Log out");
$txtpseudo = array("Pseudo" , "Pseudo");
$txtmotdepasse = array("Mot de passe" , "Password");
$txtmdpoublie = array("Mot de passe oublié ?" , "Forgot password?");
$txtboutonconnexion = array("se connecter" , "Sign in");


    //inscription
$txtinscription = array("INSCRIPTION" , "REGISTRATION");
$txtsexe = array("Sexe :" , "Gender:");
$txthomme = array("Homme" , "Man");
$txtfemme = array("Femme" , "Woman");
$txtnom = array("Nom :" , "Name:");
$txtprenom = array("Prénom :" , "First name:");
$txtpseudonyme = array("Pseudonyme :" , "Pseudo:");
$txtdatenaissance = array("Date de naissance (jj/mm/aaaa) :" , "Birthdate (dd/mm/yyyy):");
$txtemail = array("Adresse électronique :" , "Email");
$txtadressepostal = array("Adresse postale :" , "Adress:");
$txtnumtel = array("Numéro de téléphone :" , "Phone number:");
$txtmdp = array("Mot de passe :" , "Password");
$txtconfirmationmdp = array("Confirmation du mot de passe :" , "Confirm password");
$txtlu = array("J'ai lu et j'accepte" , "I read and I accept");
$txtsuitelu = array("les conditions d'utilisation" , "the conditions of use");
$txtvaliderins = array("Valider l'inscription" , "Submit");
$txtinscriptionvalide = array("Votre inscription a bien été prise en compte. Vous allez recevoir un courriel de confirmation pour activer votre compte.",
        "You successfully suscribed. You may receive an email confirmation to active your account.");


    //pied
$txtcontact = array("Contact" , "Contact");
$txtmentionlegale = array("Mentions Légales" , "Imprint");
$txtreglement = array("Règlement" , "Settlement");
$txtfaq = array("FAQ" , "FAQ");


    //mes annonces
$txttitreannonce = array("ImmoTEP, site d'échange de logements pour les vacances" , "ImmoTEP, exchange site housing for the holidays");
$txtmesannonces = array("Mes annonces" , "My ads");
$txtmodifmonannonce = array("Modifier mon annonce" , "Change my ad");


    //profil
$txtmesinfo = array("Mes Informations" , "My informations");
$txtprofil = array("Profil" , "Profile");
        //Cf inscription
$txtchangermdp = array("Changer de Mot de Passe" , "Change password");
$txtmodifprofil = array("Modifier mon Profil" , "Change my profile");


    //recherche
$txtrecherche = array("Recherche" , "Search");
$txtlocalisation = array("Localisation :" , "Localisation:");
$txtsearch = array("Rechercher" , "Search");
$txtexigence1 = array("Mettez ici les équipements que vous exigez à tout prix." , "Put here equipments you really require");
$txtexigence2 = array ("Mettez ici les services que vous êtes prêt à accepter." , "Put here services you really require");
$txtexigence3 = array("Mettez ici les contraintes que vous êtes prêt à supporter." , "Put here constraints you really require");
        //Cf inscription maison
$txtcritere = array("Autre critère :" , "Other criteria");
$txtautreservice = array("Autres services demandés :" , "Other services requested");
$txtvotretexte = array("Votre texte…" , "Your text...");
$txtautrecontrainte = array("Autres contraintes imposées :" , "Other constraints required");
$txtautrecritere = array("Autres critères :" , "Other criteria");

// erreur.php
$txterreur = array("Une erreur est survenue", "An error has occured");
