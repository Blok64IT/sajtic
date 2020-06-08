<?php get_header(); ?>

  <link href="<?php get_template_directory_uri()?>wp-content/themes/Root/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<div id="main" class="row">
<div id="content" class="col-lg-12 col-sm-6 col-md-6 col-xs-12">
<?php woocommerce_content(); ?>
</div>
</div>
<?php get_footer(); ?>
