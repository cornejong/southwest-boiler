<?php

use SouthCoast\SouthWest\Core\Config;

?>

<head>

    <title><?=$this->page->title . self::TITLE_SEPARATOR . Config::get('app.name');?></title>

    <?php

foreach ($this->headerElements() as $type => $data) {
    switch ($type) {
        case 'css_link':
            CssHelper::link($data);
            break;

        case 'css_inline':
            CssHelper::inline($data);
            break;

        case 'js_link':
            JsHelper::link($data);
            break;

        case 'js_inline':
            JsHelper::inline($data);
            break;

        case 'meta':
            MetaHelper::print($data);
            break;

        default:
            # code...
            break;
    }
}
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Symion">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/css/lightbox.css">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=BASEURL?>/assets/css/user.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <title><?php echo $page['name'] . SITENAME . ' | ' . SITESLOGAN; ?> </title>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>