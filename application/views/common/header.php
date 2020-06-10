<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/bootstrap/css/lightbox.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/bootstrap/css/style.css'); ?>" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">PhotoShak</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if ($page_name == 'column_layout3') echo 'class = "active"' ?>><a
                        href="<?php echo base_url(); ?>column_layout3">3 Column Layout</a></li>
                <li <?php if ($page_name == 'column_layout4') echo 'class = "active"' ?>><a
                        href="<?php echo base_url(); ?>column_layout4">4 Column Layout</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('image_upload')?>">Upload Image</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="20000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $status = ' active';
                        foreach ($images as $item): ?>
                            <div class="item <?php echo $status ?>">
                                <img src="<?php echo base_url('/bootstrap/img/'.$item->img_name); ?>"
                                     class="img-thumbnail">
                            </div>
                            <?php
                            $status = '';
                        endforeach; ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab"
                                                          data-toggle="tab">All Photos</a></li>
                <li role="presentation"><a href="#one" aria-controls="one" role="tab"
                                           data-toggle="tab">Category One</a></li>
                <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Category Two</a>
                </li>
            </ul>
            <br>