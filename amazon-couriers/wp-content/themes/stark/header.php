<?php
/**
 * The header for pluto theme
 *
 * Displays all the elements in <head> up until <div id="content">
 */
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php get_bloginfo('description'); ?>">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <div class="row">
        <header id="masthead" class="site-header">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand">
                <span class="helper"></span><img id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Walentin Ltd Logo"></a>
        </header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <ul class="nav navbar-nav">
                    <?php wp_list_pages('&title_li='); ?>
                </ul>
                <div class="collapse navbar-collapse">
                    <form id="signin" class="navbar-form navbar-right" role="form"  id="collapse-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="submit" class="btn btn-success">Sign Up</button>
                    </form>
                </div>
            </div>
        </nav>



