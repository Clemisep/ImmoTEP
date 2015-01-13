<html>
    <head>
        <title><?php echo $txttitreannonce[$numeroLangue]; ?></title>
        <link rel="stylesheet" href="vue/style.css" />
        <link rel="stylesheet" href="vue/banniere.css">
        <meta charset="utf-8">
        <script type="text/javascript" src="vue/jQuery/jquery-1.9.1.min.js"> </script>
        <script type="text/javascript" src="vue/popup.js"></script>

    </head> 

	<body>

  <div id="entete2">
    <div id="logo">
        <img src="vue/logo.png" id="logo"/>
    </div>
    <div class="connect">
        <div class="droite"></div>
        <a href="?p=10" class="item"><?php echo $txtmesannonces[$numeroLangue]; ?></a>
        <a href="#" data-width="500" data-rel="mesannonces" class="poplight"><?php echo $txtmesannonces[$numeroLangue]; ?></a>
    </div>

<h2> <?php echo $txtmesannonces[$numeroLangue]; ?> </h2>
 <td><a href="?p=6"><?php echo $txtmodifmonannonce[$numeroLangue]; ?></a></td>

        </tr>

	</body>

</html>
