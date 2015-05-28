<div>
	
	<div class="center aligned row">
		<?php $i = 1;  
			while($i<10){
		?>
		<div class="col s3">
			<div class=" card small z-depth-3 cs">
				<div class="card-image">
					<img src="<?php echo base_url("assets/image/ade.jpg") ?>" class="responsive-img">
				</div>
				<div class="card-content">
					<p class="">This is the title of the article  that will be displayed. Everybody stay strong, storm is coming but we'll get past this </p>
				</div>
				<div class="card-action">
					<a href="<?php echo site_url("homepage/artikel_alone") ?>">read more. . .</a>
				</div>
			</div>
		</div>
		<?php 
			$i++;}
		?>
	</div>
</div>