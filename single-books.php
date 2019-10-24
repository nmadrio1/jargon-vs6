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

<!--- loop through the repeater feild-->
<main>
<?php
if(have_rows('paragraphs')):
    while(have_rows('paragraphs')): the_row();


?> 
<!-- //loop through content and build it -->

  <div class="some-class">
      <p><?php the_sub_field('text_copy'); ?></p>
      <!-- //image field  -->
      <?php if(get_sub_field('support_image')!==""){ ?>
          <!-- //if the string is not empty then it writs the image taggs -->

          <img src="<?php the_sub_field('support_image');?>" alt="">
      <?php } else {echo "no image hahahaha piss off";}?>
  </div>

  
    

<?php  
endwhile; 
endif;

?>
</main>


<?php
get_footer();
?>


