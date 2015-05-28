	<main>	
	<br>
	<div>
		<div id="modalform" class="modal ">
			<div class="row light-blue darken-1">
				<div class="col s12">
					<h3 class="center white-text">Konsultasi</h3>
				</div>
			</div>
			<div class="row">
				<form action="#" target="_blank" class="col s10 offset-s1 ">
					<div class="row">
						<div class="input-field col s12">
							<textarea id="quest" class="materialize-textarea validate"></textarea>
							<label for="quest center">Type Answer Here</label>
						</div>
						<div class="row">
							<p class="col s3">
						      <input type="checkbox" id="test1" value="1" />
						      <label for="test1">Kategori 1</label>
						    </p>
						    <p class="col s3">
						      <input type="checkbox" id="test2" value="2"/>
						      <label for="test2">Kategori 2</label>
						    </p>
						    <p class="col s3">
						      <input type="checkbox" id="test3" value="3"/>
						      <label for="test3">Kategori 3</label>
						    </p>
						    <p class="col s3">
						      <input type="checkbox" id="test4" value="4"/>
						      <label for="test4">Kategori 4</label>
						    </p>
						</div>
						<button class="btn-flat modal-footer">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<div class="container">
			<!--div>
				<ul class="" data-collapsible="accordion">
					<?php ////php is here
					?>
					<?php foreach ($result as $cat):  ?>
					
					<li class="">
						<div class="">
							<h6 class=""><?php echo $cat['PERTANYAAN']; 
								var_dump($cat['3001']);
							?></h6>
						</div>
						<?php foreach ($cat['isi'] as $key ) {
							echo $key['JAWABAN'];
						}?>
						<?php foreach ($cat['isi'] as $isi) : ?>
							<div class="">
								<p><?php echo $isi['JAWABAN']; ?></p>
								<div class="right">
									<p class="">by : Who $name</p>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endforeach; ?>
					</li>
					<?php //else: ?>

				<?php //endif; ?>
				</ul>
			</div-->
			<div>
				<ul class="collapsible" data-collapsible="accordion">
					<?php ////php is here
					?>
					<?php //foreach ($result as $cat):  ?>
					
					<li>
						<div class="collapsible-header">
							<h6 class=""><?php echo "PERTANYAAN";//echo $cat['PERTANYAAN']; 
								//var_dump($cat['3001']);
							?></h6>
						</div>
						<div class="collapsible-body">
							<a href="#modalform" class="btn add tooltipped modal-trigger right orange" data-position="left" data-delay="50" data-tooltip="Jawab Pertanyaan"> 
								<i class="mdi-content-add"></i>
							</a>
						</div>
						<?php //foreach ($cat['isi'] as $key ) {
							//echo $key['JAWABAN'];
						//}?>
						<?php //foreach ($cat['isi'] as $isi) : ?>
							<div class="collapsible-body">
								<p><?php echo "Jawaban"//echo $isi['JAWABAN']; ?></p>
								<div class="right">
									<p class="">by : Who $name</p>
								</div>
							</div>
						<?php //endforeach; ?>
					<?php //endforeach; ?>
					</li>
					<?php //else: ?>

				<?php //endif; ?>
				</ul>
			</div>
			
		</div>
	</div>