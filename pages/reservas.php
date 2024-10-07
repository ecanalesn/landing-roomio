<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    
    <!-- Importa los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
   
    <!-- Archivo CSS propio  -->
    <link rel="stylesheet" href="../resources/css/global.css"/>
    <link rel="stylesheet" href="../resources/css/reservas.css"/>
</head>
<body>
    <!-- Aquí se incluye el menú -->
    <?php include '../includes/menu.php'; ?>   
    
    <!-- Encabezado  -->
    <h2>
        <a class="titulo">Formulario de reserva</a>
    </h2>

    <form name="contact" method="POST">
        <!-- Tipo de Alojamiento -->
        <fieldset>
            <legend><b>Tipo de alojamiento</b></legend>
            <label><input type="radio" name="alojamiento" value="hotel" required> Hotel</label>
            <label><input type="radio" name="alojamiento" value="casa_rural"> Casa Rural</label>
            <label><input type="radio" name="alojamiento" value="bungalow"> Bungalow</label>
            <label><input type="radio" name="alojamiento" value="camping"> Camping</label>
        </fieldset>
        
        <!-- Número de Personas -->
        <fieldset>
            <legend><b>Número de personas</b></legend>
            <select name="numero_personas" required>
                <option value="" disabled selected>Selecciona el número de personas</option>
                <option value="1">1 persona</option>
                <option value="2">2 personas</option>
                <option value="3">3 personas</option>
                <option value="4">4 personas</option>
            </select>
        </fieldset>

        <!-- Datos de las Personas -->
        <fieldset>
            <legend><b>Datos de los clientes</b></legend>
            <div class="cliente">
                <label for="nombre1">Nombre:</label>
                <input type="text" id="nombre1" name="nombre1" required>
                <label for="apellido1">Apellidos:</label>
                <input type="text" id="apellido1" name="apellido1" required>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
                <label for="telefono">Número de teléfono:</label>
                <input type="tel" pattern="[0-9]{9}" id="telefono" name="telefono" placeholder="Número de teléfono" required>
            </div>
            <div class="cliente">
                <label for="nombre2">Nombre:</label>
                <input type="text" id="nombre2" name="nombre2">
                <label for="apellido2">Apellidos:</label>
                <input type="text" id="apellido2" name="apellido2">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email">
                <label for="telefono">Número de teléfono:</label>
                <input type="tel" pattern="[0-9]{9}" id="telefono" name="telefono" placeholder="Número de teléfono">
            </div>
            <div class="cliente">
                <label for="nombre3">Nombre:</label>
                <input type="text" id="nombre3" name="nombre3">
                <label for="apellido3">Apellidos:</label>
                <input type="text" id="apellido3" name="apellido3">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email">
                <label for="telefono">Número de teléfono:</label>
                <input type="tel" pattern="[0-9]{9}" id="telefono" name="telefono" placeholder="Número de teléfono">
            </div>
            <div class="cliente">
                <label for="nombre4">Nombre:</label>
                <input type="text" id="nombre4" name="nombre4">
                <label for="apellido4">Apellidos:</label>
                <input type="text" id="apellido4" name="apellido4">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email">
                <label for="telefono">Número de teléfono:</label>
                <input type="tel" pattern="[0-9]{9}" id="telefono" name="telefono" placeholder="Número de teléfono">
            </div>
        </fieldset>

        <!-- Fechas Disponibles -->
        <fieldset>
            <legend><b>Disponibilidad</b></legend>
            <label for="fecha_inicio">Fecha de inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required>
            <label for="fecha_fin">Fecha de fin:</label>
            <input type="date" id="fecha_fin" name="fecha_fin" required>
        </fieldset>

        <!-- Comentarios -->
        <fieldset>
            <legend><b>Comentarios</b></legend>
            <textarea name="comentarios" rows="4" cols="50" placeholder="Escribe tus comentarios aquí..."></textarea>
        </fieldset>

        <!-- Botón de envío -->
        <input type="submit" value="Enviar Formulario">
    </form>

    <!-- Archivo JavaScript -->
    <script src="../resources/js/global.js"></script>
</body>

</html>
