<?php
class menus{
    public function main_menu(){



?>


<head>
<link rel="stylesheet" href="style.css">
</head>

<div class="topnav">
        <a href="./">Home</a>
        <a href="">About Us</a>
        <?php $this->main_right_menu(); ?>

</div>
<?php

 }

public function main_right_menu(){
    ?>
    <div class="topnav-right">
        <a href="">Sign up</a>
        <a href="">Sign in</a>
        
    </div>
    <?php
}

    }
