<div class="container">
	<ul class="collapsible" data-collapsible="accordion">
		<?php $i=0; while($i<10){ ?>
		<li>
			<div class="collapsible-header">
				<div class="row">
					<div class="left">
						JUDUL EVENT
					</div>
					<div class="right">
						DUE DATE
					</div>
				</div>
			</div>
			<div class="collapsible-body">
				<p><?php echo "event details here"?></p>
			</div>
		</li>
		<?php $i++;}?>
	</ul>
</div>