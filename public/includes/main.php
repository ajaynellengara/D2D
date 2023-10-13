<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Your website description goes here">
    <meta name="keywords" content="your, keywords, go, here">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#cc2323">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">

    <title>FLASH FRIEGHT</title>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Saira:ital,wght@0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- JQUERY --->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- BOOTSTRAP --->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <!-- LAZY LOAD --->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>

    <!-- ANIMATE CSS --->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- <style>
        /* Inline critical CSS here */
    </style> -->

    <!-- INCLUDES -->
    <link rel="stylesheet preload" href="assets/css/app.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/app.min.css">
    </noscript>
</head>

<body class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-index' ? 'manufacturer-home' : '' ?>">