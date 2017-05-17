<?php include('header.php');?>

<div class="row">
  <section>
    <h2>Winter has arrived</h2>
  <!-- carousel-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/throne.png" alt="...">
          <div class="carousel-caption">
            Iron Throne
          </div>
        </div>
        <div class="item">
          <img src="images/wunwun.png" alt="...">
          <div class="carousel-caption">
            Wun Wun
          </div>
        </div>
        <div class="item">
          <img src="images/houses.png" alt="...">
          <div class="carousel-caption">
            Houses
          </div>
        </div>
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
  </section>

</div>

<div class="row"> </div>

<div class="col-sm-12 col-md-10 col-md-offset-1">
<section>
<h2>Contenidos de interés</h2>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$all = count($blog);
for($n=0; $n < $all; $n++){?>
  <h4><?php echo($blog[$n]["post_title"])?></h4>
  <p><?php echo($blog[$n]["post_excerpt"])?> [<a href="post.php?url=<?php print $n;?>">Ver más</a>]</p>
<?php };?>
</section>
<?php include('footer.php');?>
