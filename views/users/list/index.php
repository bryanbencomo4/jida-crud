<div class="text-center">
    <a href="<?= URL_BASE ."/add/user" ?>" class="btn btn-success btn-sm" role="button" aria-disabled="true">Agregar Usuario</a>
</div>

<div class="table-responsive">
    <table id="tables-user" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Número de Teléfono</th>
                <th>Creado en</th>
                <th>Actualizado en</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach($data as $valor) {

                    $editBtn = "<a href='". URL_BASE ."/edit/user/". $valor['id'] ."' class='btn btn-primary btn-sm' role='button' aria-disabled='true'>modificar</a>";
                    $deleteBtn = "<a href='". URL_BASE ."/delete/user/". $valor['id'] ."' class='btn btn-danger btn-sm' role='button' aria-disabled='true'>eliminar</a>";

                    echo "<tr>";
                        echo "<td>". $valor['id'] ."</td>";
                        echo "<td>". $valor['name'] ."</td>";
                        echo "<td>". $valor['email'] ."</td>";
                        echo "<td>". $valor['phone_number'] ."</td>";
                        echo "<td>". $valor['created_at'] ."</td>";
                        echo "<td>". $valor['updated_at'] ."</td>";
                        echo "<td class='text-center'>". $editBtn . " " . $deleteBtn ."</td>";
                    echo "</tr>";
                }            
            ?>

        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Número de Teléfono</th>
                <th>Creado en</th>
                <th>Actualizado en</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>