	<main>	
	<br>
	<!--a class="btn btn-med">
		<h4>Add</h4>
	</a-->
	<div>
		<a href="#modalform" class="btn add tooltipped modal-trigger tabs-wrapper" data-position="right" data-delay="50" data-tooltip="Ask Question"> 
			<i class="mdi-content-add-circle-outline"></i>
		</a>
		<div id="modalform" class="modal">
			<div class="row">
				<div class="col s12">
					<h3 class="center">Consultation</h3>
				</div>
			</div>
			<div class="divider"></div>
			<div class="row">
				<form action="#" target="_blank" class="col s10 offset-s1">
					<div class="row">
						<div class="input-field col s12">
							<textarea id="quest" class="materialize-textarea validate"></textarea>
							<label for="quest center">Ask here</label>
						</div>
						<div class="row">
							<p class="col s3">
						      <input type="checkbox" id="test1" value="1" />
						      <label for="test1">Red</label>
						    </p>
						    <p class="col s3">
						      <input type="checkbox" id="test2" value="2"/>
						      <label for="test2">Yellow</label>
						    </p>
						    <p class="col s3">
						      <input type="checkbox" id="test3" value="3"/>
						      <label for="test3">Yellow</label>
						    </p>
						    <p class="col s3">
						      <input type="checkbox" id="test4" value="4"/>
						      <label for="test4">Yellow</label>
						    </p>
						</div>

						<button class="btn-flat modal-footer">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<div class="container">
			<div>
				<ul class="collapsible" data-collapsible="accordion">
					<?php

						var_dump($ans_list);
						var_dump($question);
						var_dump($ans_by_question);
						if(isset($ans_by_question)) :
					?>
					<?php foreach ($ans_by_question as $question => $ans_list):  ?>
					<li class="">
						<div class="collapsible-header">
							<h6 class=""><?php echo $question[$question]; ?></h6>
						</div>
						<?php foreach ($ans_list as $ans) : ?>
						<div class="collapsible-body">
							<p><?php echo $ans->content; ?></p>
							<div class="right">
								<p class="">by : Who $name</p>
							</div>
						</div>
						<?php endforeach; ?>
					<?php endforeach; ?>
					</li>
					<?php else: ?>
					<p>Sorry Dude no content</p>

				<?php endif; ?>
				</ul>
			</div>
			<!--div>
				<div class="row collapsible">
					<div class="col s12 green z-depth-1 collapsible-header">
					</div>
					<div class="collapsible-body">
						<div class="row">
							<div class="col s8 offset-s4">
							</div>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col s12 green">
						<h4>Title goes here</h4>
						<h6>Question goes as long as it has to offer madafacka. Any questions so far ? </h6>
					</div>
					<div class="answers hidden">
						<div class="row">
							<div class="col s8 offset-s4">
								<p>The answer of your question goes here. The doctors will answer it. but god damn it madafacka it is so long. the deadline is in 6 days. keep up your work damn it. believe that you can</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 green">
						<h4>Title goes here</h4>
						<h6>Question goes as long as it has to offer madafacka. Any questions so far ? </h6>
					</div>
					<div class="answers hidden">
						<div class="row">
							<div class="col s8 offset-s4">
								<p>The answer of your question goes here. The doctors will answer it. but god damn it madafacka it is so long. the deadline is in 6 days. keep up your work damn it. believe that you can</p>
							</div>
						</div>
					</div>
				</div>
			</div-->
		</div>
	</div>