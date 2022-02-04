<!-----Booking---------->
<h4 class="text-center">¡Reserve Ahora!</h4>
<form action="{{ route('mensaje02') }}" method="post" role="form" class="book1 text-center">
	@csrf
	<div class="form-row">
		<br>
		<div class="form-group col-lg-12">
			<span class="form-label">Nombre:</span>
			<input type="text" name="name" required class="form-control" placeholder="Requerido*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
		</div>
		<div class="form-group col-lg-12">
			<span class="form-label">E-Mail:</span>
			<input type="email" class="form-control" required name="email" id="email" placeholder="Requerido*" data-rule="email" data-msg="Please enter a valid email" />
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-6">
			<span class="form-label">Adultos:</span>
			<input class="form-control" name="adultos" id="adultos" type="number" placeholder="0" data-error="Valid email is required.">
			<div class="validation"></div>
		</div>
		<div class="form-group col-lg-6">
			<span class="form-label">Niños:</span>
			<input class="form-control" name="child" id="child" type="number" placeholder="0" data-error="Valid email is required.">
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-12">
			<span class="form-label">Fecha Arrivo:</span>
			<input class="form-control" name="da" id="da" type="date">
			<div class="validation"></div>
		</div>
		<div class="form-group col-lg-12">
			<span class="form-label">Fecha Salida:</span>
			<input class="form-control" name="do" id="do" type="date">
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-group col-lg-12">
		<span class="form-label">Mensaje:</span>
		<textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Escriba acá su mensaje:"></textarea>
		<div class="validation"></div>
	</div>
	<center>
		<input id="botondjm2" type="submit" name="submit" value="Enviar" />
	</center>
	<br><br>
</form>