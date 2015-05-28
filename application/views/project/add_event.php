

<div class="container z-depth-2">
	<br>
	<div class="center row">
		<div class="header">
			FORM ADD EVENT
		</div>
	</div>
	<form class="">
		<div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Event Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="detail" class="materialize-textarea"></textarea>
          <label for="detail">Event Description</label>
        </div>
      </div>
      Due Date
      <div class="row">
        <div class="input-field col s12">
          <input palceholder="DD/MM/YY" type="date" class="datepicker">
        </div>
      </div>
      <div class="center row">
      	<div class="input-field">
      		<input type="submit" class="btn" value="submit">
      	</div>
      </div>
	</form>
</div>
<script type="text/javascript">
  $(document).ready(function(){
     $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
  });
</script>