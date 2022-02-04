<!-----Booking---------->
<h4 class="text-center">Book Now!</h4>
<form action="{{ route('mensaje01') }}" method="post" role="form" class="book1 text-center">
	@csrf
	<div class="form-row">
		<br>
		<div class="form-group col-lg-12">
			<span class="form-label">Name:</span>
			<input type="text" name="name" required class="form-control" placeholder="Required*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
		</div>
		<div class="form-group col-lg-12">
			<span class="form-label">E-Mail:</span>
			<input type="email" class="form-control" required name="email" id="email" placeholder="Required*" data-rule="email" data-msg="Please enter a valid email" />
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-6">
			<span class="form-label">Adults:</span>
			<input class="form-control" name="adultos" id="adultos" type="number" placeholder="0" data-error="Valid email is required.">
			<div class="validation"></div>
		</div>
		<div class="form-group col-lg-6">
			<span class="form-label">Children:</span>
			<input class="form-control" name="child" id="child" type="number" placeholder="0" data-error="Valid email is required.">
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-12">
			<span class="form-label">Date Arrive:</span>
			<input class="form-control" name="da" id="da" type="date">
			<div class="validation"></div>
		</div>
		<div class="form-group col-lg-12">
			<span class="form-label">Date Out:</span>
			<input class="form-control" name="do" id="do" type="date">
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-group col-lg-12">
		<span class="form-label">Send us a message:</span>
		<textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required" data-msg="Write here your message." placeholder="Message"></textarea>
		<div class="validation"></div>
	</div>
	<center>
		<input id="botondjm2" type="submit" name="submit" value="Send" />
	</center>
	<br> <br>
</form>