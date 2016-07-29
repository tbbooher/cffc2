<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CrossFit Falls Church</title>
    <!-- Bootstrap -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/ripples.min.css">
    <script src="https://use.typekit.net/kma6wiy.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/dist/styles/font-awesome.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />
    <script src="<?= get_template_directory_uri(); ?>/dist/scripts/doubletaptogo.min.js"></script>
    <script>
        jQuery(document).ready(function(){
           jQuery( '.nav li:has(ul)' ).doubleTapToGo(); 
        });
    </script>
</head>