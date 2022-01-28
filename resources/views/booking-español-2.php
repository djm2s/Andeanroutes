<!-----Booking---------->
<div class="form text-center">
	<h4 style="padding-top: 13px">Solicitar Reserva</h4>
	<form action="form1.php" method="post" role="form" class="book1">
		<div class="form-row">
			<br>
			<div class="form-group col-lg-12">
				<span class="form-label">Nombre:</span>
				<input type="text" name="nombre" required class="form-control" placeholder="Requerido*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
			</div>
			<div class="form-group col-lg-12">
				<span class="form-label">E-Mail:</span>
				<input type="email" class="form-control" required name="email" id="email" placeholder="Requerido*" data-rule="email" data-msg="Please enter a valid email" />
				<div class="validation"></div>
			</div>
		</div>
		<div class="form-group col-lg-12">
			<span class="form-label">Enviarnos mensaje:</span>
			<textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
			<div class="validation"></div>
		</div>
		<input id="botondjm2" type="submit" name="submit" value="Enviar" />
	</form><br><br>
	<h4 style="padding-top: 13px">Métodos de pago:</h4>
	<img width="180px" src="img/Payments/paypal.png"><br>
	<img width="120px" src="img/Payments/Visa_Logo.png"><br><br>
	<img width="110px" src="img/Payments/Mastercard-logo.png">
</div>