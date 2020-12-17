
<?php 	
	$request = \Config\Services::request(); 
	$key_word=$_GET["q"]; // Esta es la palabra que el usuario busco
?>
<div class="page-content">
	<div class="section" id="departmentsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Los resultados de la busqueda :<span class="theme-color"><?php echo $key_word?></span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="mt-2 mt-lg-4"></div>
			<?php
			$count =0;
			 foreach ($lista_preguntas as $xx) {
			 	$count +=1;
			 	?>
				<?php if ($xx->Id==1) {
					$active = "show";
				}else{
					$active = "";
				} ?>
				<div class="faq-item">
					<a data-toggle="collapse" data-parent="#faqAccordion1" href="#<?php echo $xx->identificador;?>" aria-expanded="true"><span><?php echo $count; ?>.</span><span><?php  echo $xx->title; ?></span></a>
					<div id="<?php 	echo $xx->identificador;?>" class="collapse <?php echo $active;?> faq-item-content" role="tabpanel">
						<div>
							<?php if ($xx->description =="" or $xx->description==NULL) {?>
								<p>Estamos agregando la información.</p>
							<?php }else{?>
								<?php echo $xx->description;?>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>