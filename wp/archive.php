<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Northman - 404</title>
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<?php wp_head();?>
  <link rel="stylesheet" href="<?php echo  get_template_directory_uri() . '/assets/css/';?>style.min.css">
</head>
<body>
    <section class="block-404">
        <div class="wrapper">
        <div class="block-404__wrapper">
            <div class="block-404__left-block">
                <img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>404.svg" alt="404">
            </div>
            <div class="block-404__right-block">
                <img src="<?php echo  get_template_directory_uri() . '/assets/img/' ;?>glass.png" alt="virtual glass">
            </div>
        </div>
        <div class="block-404__button-block">
            <a href="/">Go back</a>
        </div>
    </div>
    </section>
</body>
</html>
