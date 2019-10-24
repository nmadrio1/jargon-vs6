<?php
//creating custom navigation/header
get_header();
$header=get_field('article_header');
// print_r(get_field('article_header'));
?>
<style>
.article-header{
    padding:8rem 0;
    text-align:center;
    background:crimson;
}
</style>
<header class="article-header">
<h1><?php $header['title']; ?></h1>  
<h1><?php echo $header['title']; ?></h1>  
<p><?php $header['tagline']; ?></p>
<p><?php echo $header['tagline']; ?></p>
<img src="<?php echo $header ['header_image'];?>" alt="image">



</header>



<?php
get_footer();
?>

