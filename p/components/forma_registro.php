<header>
  <h4>¡Apoya a tu candidata!</h4>
  <?php include "leticiaCalderon.php" ?>
</header>
<form class="sign-in">
  <fieldset>
    <legend>
      <h5>¡Participa!</h5>
      <p>
        <strong>Regístrate como simpatizante</strong> y colabora difundiendo su proyecto para un buen gobierno y un mejor Valle de Chalco Solidaridad.</p>
    </legend>
    <input type="text" name="nombre" id="nombre" placeholder="nombre" class="required" maxlength="50">
    <input type="email" name="correo" id="correo" placeholder="correo electrónico" class="required">
    <input type="tel" name="telefono" id="telefono" placeholder="teléfono (whatsapp)" class="required">
    <input type="number" name="edad" id="edad" placeholder="edad" class="required" maxlength="2" min="18" max="99" /><span>años</span>
    <label for="edad">*Mayores de 18 años.</label>
    <select name="comunidad" id="comunidad" class="required">
      <option class="placeholder" value="">comunidad</option>
      <option>Alfredo Baranda</option>
      <option>Alfredo del Mazo</option>
      <option>Américas</option>
      <option>Ampliación Santa Catarina</option>
      <option>Antorcha Valle de Chalco</option>
      <option>Avándaro</option>
      <option>Carlos Salinas de Gortari</option>
      <option>Central de Abasto</option>
      <option>Cerro del Marques</option>
      <option>Concepción</option>
      <option>Darío Martínez II Sección</option>
      <option>Darío Martínez I Sección</option>
      <option>Del Carmen</option>
      <option>El Agostadero</option>
      <option>El Triunfo</option>
      <option>Emiliano Zapata</option>
      <option>Ex-hacienda Xico</option>
      <option>Geovillas la Asunción</option>
      <option>Guadalupana</option>
      <option>Independencia</option>
      <option>Jardín</option>
      <option>La Asunción</option>
      <option>María Isabel</option>
      <option>Niños Héroes</option>
      <option>Providencia</option>
      <option>Real de San Martín</option>
      <option>San Gregorio</option>
      <option>San Isidro</option>
      <option>San Juan Tlalpizahuac</option>
      <option>San Martín Xico La Laguna</option>
      <option>San Miguel las Tablas</option>
      <option>San Miguel Xico</option>
      <option>Santa Catarina</option>
      <option>Santa Cruz</option>
      <option>Santiago</option>
    </select>
    <button type="submit" name="send" value="enviar" class="send">enviar</button>
    <input type="hidden" id="cat" name="cat" value="registro">
  </fieldset>
</form>
