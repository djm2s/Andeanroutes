<form action="form-español.php" method="post" role="form" class="book1">
	<div class="form-row">
		<br>
		<div class="form-group col-lg-12">
			<span class="form-label">Nombre & Apellido:</span>
			<input type="text" name="nombre" required class="form-control" placeholder="Required*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
		</div>
		<div class="form-group col-lg-12">
			<span class="form-label">E-Mail:</span>
			<input type="email" class="form-control" required name="email" id="email" placeholder="Required*" data-rule="email" data-msg="Please enter a valid email" />
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-6">
			<span class="form-label">Adultos:</span>
			<input class="form-control" name="adultos" id="adultos" type="number" placeholder="0" required="required" >
			<div class="validation"></div>
		</div>
		<div class="form-group col-lg-6">
			<span class="form-label">Niños:</span>
			<input class="form-control" name="child" id="child" type="number" placeholder="0">
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-6">
			<span class="form-label">Fecha de llegada:</span>
			<input class="form-control" name="da" id="da" type="date">
			<div class="validation"></div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-6">
			<span class="form-label">Fecha de Salida:</span>
			<input class="form-control" name="do" id="da" type="date">
			<div class="validation"></div>
		</div>
	</div><br><br>
	<div class="form-row">
		<div class="form-group col-lg-12">
			<span class="form-label">Escoga su preferencia en actividades:</span><br><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Caminatas de varios días" name="tours[]"/>Caminatas de varios días 
			</label><br>
			
			<label>
				<input class="form-check-input" type="checkbox" value="Caminatas de un día" name="tours[]"/>Caminatas de un día 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Museos" name="tours[]"/>Museos 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Centros Arqueológicos" name="tours[]"/>Centros Arqueológicos
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Naturaleza & Fauna" name="tours[]"/>Naturaleza & Fauna 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Ciclismo" name="tours[]"/>Ciclismo de montañas 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Motocros" name="tours[]"/>Tours en Motocros 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Shaman Ceremony" name="tours[]"/>Ceremonia de Shaman 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Turismo Culinario" name="tours[]"/>Turismo culinario 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Turismo Vivencial" name="tours[]"/>Turismo Vivencial 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Familiar" name="tours[]"/>Turismo en Familia 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Parejas" name="tours[]"/>Turismo en pareja 
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Luna de Miel" name="tours[]"/>Luna de Miel 
			</label><br>
			<div class="validation"></div>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-lg-12">
			<span class="form-label">Ciudades:</span><br><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Cusco" name="ciudades[]"/>Cusco - Machu Picchu
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Lima" name="ciudades[]"/>Lima(Capital de Perú)
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Arequipa" name="ciudades[]"/>Arequipa(La ciudad blanca)
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Manu" name="ciudades[]"/>Manu (Reserva Nacional)
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Madre de Dios" name="ciudades[]"/>Madre de Dios (Selva Peruana)
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Madre de Dios" name="ciudades[]"/>Madre de Dios (Selva Peruana)
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Puno" name="ciudades[]"/>Puno(Capital del Folklore)
			</label><br>
			<label>
				<input class="form-check-input" type="checkbox" value="Playas" name="ciudades[]"/>Costa y playas
			</label>
		</div>
	</div>
	
	<div class="form-row">
		<div class="form-group col-lg-6">
			<span class="form-label">Tipo de Acomodación durante su estancia:</span><br>
			<select name="hotel">
				<option value="Hotel 5 Estrellas">Hotel 5 Estrellas</option>
				<option value="Hotel 4 Estrellas">Hotel 4 Estrellas</option>
				<option value="Hotel 3 Estrellas">Hotel 3 Estrellas</option>
				<option value="Hotel 2 Estrellas">Hotel 2 Estrellas</option>
				<option value="Hospedaje AirBnb">Hospedaje AirBnb</option>
				<option value="Hospedaje Familiar">Hospedaje Familiar</option>
			</select>
		</div>
	</div>
	
	<div class="form-group col-lg-12">
		<span class="form-label">Escriba a detalle su observación:</span>
		<textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
		<div class="validation"></div>
	</div>
	<input id="botondjm2" type="submit" name="submit" value="Enviar" />
	<br><br>
</form>
<style>
	label {color: #676767; font-weight: 300}
	input[type=checkbox]
{
  /* Doble-tamaño Checkboxes */
  -ms-transform: scale(1.3); /* IE */
  -moz-transform: scale(1.3); /* FF */
  -webkit-transform: scale(1.3); /* Safari y Chrome */
  -o-transform: scale(1.3); /* Opera */
  padding: 10px;
	margin-right:  15px;
}
</style>




