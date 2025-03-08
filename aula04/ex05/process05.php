<?php

$color = $_POST['favcolor']

?>
<style>
        .box {
            width: 200px;
            height: 150px;
            border: 2px solid #000; /* Borda preta */

            
        }
</style>
<p>Your favorite color is ⬇️ </p>
<div class= "box" style="background-color:<?php echo "$color"?>;"></div>

