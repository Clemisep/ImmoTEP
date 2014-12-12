<?php

session_start();
session_unset();
session_destroy();
echo '<head>
<script type="text/javascript">
<!--
window.location = "../index.php"
//-->
</script>
 </head>';
exit();