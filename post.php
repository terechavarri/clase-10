<?php include('header.php');?>
<section>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$nro = $_GET['url'];
?>
<h2><?php echo($blog[$nro]["post_title"])?></h2>
<h4><?php echo($blog[$nro]["post_excerpt"])?></h4>
<div class="embed-responsive embed-responsive-16by9">
  <?php echo($blog[$nro]["post_image"])?>
</div>
<p><?php echo($blog[$nro]["post_content"])?></p>
</section>
<?php include('footer.php');?>
