<?php

$texteFrancaisMentionsLegalesProtection = recPost("txtFrMentionsLegalesProtection");
$texteAnglaisMentionsLegalesProtection = recPost("txtAnMentionsLegalesProtection");

modifierTexte("MentionsLegalesProtection", $texteFrancaisMentionsLegalesProtections, $texteAnglaisMentionsLegalesProtection);

$texteFrancaisMentionsLegalesFinalite = recPost("txtFr");
$texteAnglaisMentionsLegalesFinalite = recPost("txtAn");

modifierTexte("MentionsLegalesFinalite", $texteFrancaisMentionsLegalesFinalite);

$texteFrancaisAccueil = recPost("txtFr");
$texteAnglaisAccueil = recPost("txtAn");

modifierTexte("accueil", $texteFrancaisAccueil, $texteAnglaisAccueil);

$texteFrancaisMentionsLegalesSecurite = recPost("textFr");
$texteAnglaisMentionsLegalesSecurite = recPost("txtAn");

modifierTexte("MentionsLegalesSecurite, $texteFrancaisMentionsLegalesSecurite", $texteAglaisMentionsLegalesSecurite);
