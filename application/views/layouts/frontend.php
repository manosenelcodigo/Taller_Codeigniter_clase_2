<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>hola mundo</title>
            <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css" />
        </head>
        <body>
            <h1>título desde el layout</h1>
            
            <!--contenido-->
                <?php echo $content_for_layout;?>
            <!--/contenido-->
            
        </body>
    </html>
