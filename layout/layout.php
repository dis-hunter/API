<?php
class layout{
    public function heading(){
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link  rel="stylesheet" href="style.css">
        </head>
        <body>
            <?php
    }

              public function footer(){
             ?> 
            <div class = "footer"  style="text-align: center;"
          >
                Copyright &copy: ICS
                 <?php print date("Y"); ?>
            </div>
            </body>
            </html>

            <?php

              }
            }

              ?>
      
     

