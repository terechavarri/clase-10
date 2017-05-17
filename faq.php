<?php include('header.php');?>
<section>
<h2>Preguntas frecuentes</h2>
<?php
$faq = array_map('str_getcsv', file('data/faq.csv'));
array_walk($faq, function(&$a) use ($faq) {$a = array_combine($faq[0], $a);});
array_shift($faq);
$all = count($faq);
for ($n=0; $n < $all; $n++){
?>
<!--esto se debe repetir, ojo con el nro. junto al collapse_-->
<h4>
<a role="button" data-toggle="collapse" href="#collapse<?print $n?>" aria-expanded="false" aria-controls="collapse<?print $n?>">
<?php echo $faq[$n]['faq_pregunta'];?>
</a></h4>
<div class="collapse" id="collapse<?print $n?>">
<div class="well">
<p><?php echo $faq[$n]['faq_respuesta'];?></p>
</div>
</div>
<!--hasta acá lo que se repite-->
<?php };?>

</section>
<?php include('footer.php');?>
