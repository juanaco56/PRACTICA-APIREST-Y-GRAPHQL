<?php 
    // La URL de tu API REST de Spring Boot para obtener el listado de tenistas
    // Nota: Si Spring Boot está en otro lugar, debes ajustar la IP/puerto.
    $url = "http://localhost:8080/api/tenistas/listado";
    
    // Intentar obtener y decodificar los datos JSON
    $data = @file_get_contents($url);
    $tenistas = json_decode($data, true) ?? [];
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Listado de Tenistas ATP</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1 style="text-align: center;">Listado de Tenistas ATP</h1>
            <br>
            
            <?php if (empty($tenistas)): ?>
                <p class="alert alert-warning text-center">No se pudieron cargar los datos o la lista está vacía. Asegúrate de que la API de Spring Boot esté funcionando en la URL: <?php echo $url ?></p>
            <?php else: ?>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>EDAD</th>
                        <th>PUNTOS ATP</th>
                        <th>RANKING ATP</th>
                        <th>NACIONALIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tenistas as $tenista): ?>
                        <tr>
                            <td><?php echo $tenista['nombre'] ?></td>
                            <td><?php echo $tenista['apellidos'] ?></td>
                            <td><?php echo $tenista['edad'] ?></td>
                            <td><?php echo $tenista['puntos_atp'] ?></td>
                            <td><?php echo $tenista['ranking_atp'] ?></td>
                            <td><?php echo $tenista['nacionalidad'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
            <?php endif; ?>

            <hr>

            <h2 style="text-align:center;">Añadir Tenista</h2>
            <form method="post" action="http://localhost:8080/api/tenistas/add">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" required>
                <br>
                <label class="form-label">Apellidos:</label>
                <input type="text" name="apellidos" required>
                <br>
                <label class="form-label">Edad:</label>
                <input type="number" name="edad" required>
                <br>
                <label class="form-label">Puntos ATP:</label>
                <input type="number" name="puntos_atp" required>
                <br>
                <label class="form-label">Ranking ATP:</label>
                <input type="number" name="ranking_atp" required>
                <br>
                <label class="form-label">Nacionalidad:</label>
                <input type="text" name="nacionalidad" required>
                <br><br>
                <button type="submit" class="btn btn-success">Añadir Tenista</button>
            </form>
        </div>
    </body>
</html>