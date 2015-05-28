
<body>
	<div class="center row">
		<div class="col  s10">
		</div>
		<form action="sample_posteddata.php" method="post">
			<p>
				<label for="editor1">
					Editor 1:
				</label>
	            <?php echo $this->ckeditor->editor("textarea name","default textarea value"); ?>
				
			</p>
			<p>
				<input type="submit" value="Submit">
			</p>
		</form>
	</div>
</body>
