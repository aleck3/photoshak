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
                <li <?php if ($page_name == 'image_upload') echo 'class = "active"' ?>><a
                        href="<?php echo base_url('image_upload') ?>">Upload Image</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url('main/do_upload'); ?>" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Enter image description</label>
                        <input type="text" class="form-control" placeholder=" " name="img_desc">
                    </div>
                    <div class="form-group">
                        <label>Enter image category</label>
                        <select class="form-control" name="img_category">
                            <option>Category One</option>
                            <option>Category Two</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image">
                        <p class="help-block">Please upload images 600x470px.</p>
                    </div>
                    <button type="submit" class="btn btn-default" value="upload">Upload</button>
                </form>
            </div>
        </div>
    </div>
</section>