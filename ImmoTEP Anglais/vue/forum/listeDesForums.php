<?php
    $listeDesForums = listeDesForums();
?>

<div id="listeDesForums" class="listeStatique">
    <h1>Forums</h1>
    
<?php
    foreach($listeDesForums as $forum) {
        echo "<div>$forum</div>";
    }
?>
    
</div>