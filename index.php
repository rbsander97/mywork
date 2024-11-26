<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de HTML</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script>
        function validarFormulario() {
            const respuestas = document.querySelectorAll('input[type="radio"]:checked');
            if (respuestas.length < 10) {
                alert("Por favor, responde todas las preguntas.");
                return false;
            }
            return true;
        }
    </script>
    <style>
        .incorrecta {
            color: red;
        }
        /* Estilo personalizado para el fondo */
        body {
            background-color: #fff3cd; /* Color amarillo claro */
        }
        /* Alinear el contenido a la izquierda y agregar margen izquierdo */
        .container {
            max-width: 600px; /* Ancho máximo del contenedor */
            margin: 0; /* Sin margen superior e inferior */
            padding: 40px; /* Espaciado interno */
            text-align: left; /* Alinear el texto a la izquierda */
            margin-left: 20px; /* Margen izquierdo */
        }
        /* Estilo para el tamaño de la letra de las preguntas */
        h3 {
            font-size: 18px; /* Tamaño de letra de 18px para las preguntas */
        }
    </style>
</head>
<body>
    <br>
 <center><h1 style="background-color:blue;color:bisque;"  >Test de HTML</h1></center>


    <div class="container">
        
        <form action="resultado.php" method="post" onsubmit="return validarFormulario()">
            <h3>1. ¿Qué significa HTML?</h3>
            <label><input type="radio" name="pregunta1" value="a"> A) Hyper Text Markup Language</label><br>
            <label><input type="radio" name="pregunta1" value="b"> B) High Text Markup Language</label><br>
            <label><input type="radio" name="pregunta1" value="c"> C) Hyperlink and Text Markup Language</label><br>

            <h3>2. ¿Cuál es la etiqueta para insertar un enlace?</h3>
            <label><input type="radio" name="pregunta2" value="a"> A) &lt;link&gt;</label><br>
            <label><input type="radio" name="pregunta2" value="b"> B) &lt;a&gt;</label><br>
            <label><input type="radio" name="pregunta2" value="c"> C) &lt;href&gt;</label><br>

            <h3>3. ¿Cuál es la etiqueta para crear una lista desordenada?</h3>
            <label><input type="radio" name="pregunta3" value="a"> A) &lt;ul&gt;</label><br>
            <label><input type="radio" name="pregunta3" value="b"> B) &lt;ol&gt;</label><br>
            <label><input type="radio" name="pregunta3" value="c"> C) &lt;list&gt;</label><br>

            <h3>4. ¿Qué etiqueta se utiliza para crear un párrafo?</h3>
            <label><input type="radio" name="pregunta4" value="a"> A) &lt;p&gt;</label><br>
            <label><input type="radio" name="pregunta4" value="b"> B) &lt;para&gt;</label><br>
            <label><input type="radio" name="pregunta4" value="c"> C) &lt;text&gt;</label><br>

            <h3>5. ¿Cuál es la etiqueta para incluir una imagen?</h3>
            <label><input type="radio" name="pregunta5" value="a"> A) &lt;image&gt;</label><br>
            <label><input type="radio" name="pregunta5" value="b"> B) &lt;img&gt;</label><br>
            <label><input type="radio" name="pregunta5" value="c"> C) &lt;pic&gt;</label><br>

            <h3>6. ¿Qué atributo se usa para especificar la URL de una imagen?</h3>
            <label><input type="radio" name="pregunta6" value="a"> A) src</label><br <label><input type="radio" name="pregunta6" value="b"> B) href</label><br>
            <label><input type="radio" name="pregunta6" value="c"> C) link</label><br>

            <h3>7. ¿Cuál es la etiqueta para crear un enlace a otra página?</h3>
            <label><input type="radio" name="pregunta7" value="a"> A) &lt;link&gt;</label><br>
            <label><input type="radio" name="pregunta7" value="b"> B) &lt;a&gt;</label><br>
            <label><input type="radio" name="pregunta7" value="c"> C) &lt;url&gt;</label><br>

            <h3>8. ¿Qué atributo se usa para abrir un enlace en una nueva pestaña?</h3>
            <label><input type="radio" name="pregunta8" value="a"> A) target="_blank"</label><br>
            <label><input type="radio" name="pregunta8" value="b"> B) newtab="true"</label><br>
            <label><input type="radio" name="pregunta8" value="c"> C) open="new"</label><br>

            <h3>9. ¿Cuál es la etiqueta para crear una tabla?</h3>
            <label><input type="radio" name="pregunta9" value="a"> A) &lt;table&gt;</label><br>
            <label><input type="radio" name="pregunta9" value="b"> B) &lt;tab&gt;</label><br>
            <label><input type="radio" name="pregunta9" value="c"> C) &lt;grid&gt;</label><br>

            <h3>10. ¿Qué etiqueta se utiliza para definir una celda en una tabla?</h3>
            <label><input type="radio" name="pregunta10" value="a"> A) &lt;td&gt;</label><br>
            <label><input type="radio" name="pregunta10" value="b"> B) &lt;cell&gt;</label><br>
            <label><input type="radio" name="pregunta10" value="c"> C) &lt;tr&gt;</label><br>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>