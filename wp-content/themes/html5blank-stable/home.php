<?php /* Template Name: Demo Page Template */ get_header(); ?>

<?php include 'includes/services.php' ?>
<div class="orangeSplitBar"></div>

<?php include(TEMPLATEPATH . "/includes/experience.php"); ?>
<?php include(TEMPLATEPATH . "/includes/portfolio.php"); ?>
<?php include(TEMPLATEPATH . "/includes/stats.php"); ?>
<?php include(TEMPLATEPATH . "/includes/testimonial.php"); ?>
<?php include(TEMPLATEPATH . "/includes/contact.php"); ?>

<?php get_footer(); ?>
