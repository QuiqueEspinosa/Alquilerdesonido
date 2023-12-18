<?php include("../includes/header.php")?>
<?php include('../sesion.php'); ?>
<link rel="stylesheet" href="../css/Cruds/Crud2.css">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">Crud Poducto</h1>

                    <p class="card-text">Seleccione la operación en el menú de navegación o en las siguientes opciones:</p>

                    <div class="row card-options">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Crear Producto</h5>
                                    <p class="card-text">Esta opción permite CREAR un registro en la BDD</p>
                                    <a href="/FinalQuique/CrudProd/createp.php" class="btn btn-primary">Crear</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">READ</h5>
                                    <p class="card-text">Esta opción permite LEER un registro de la BDD</p>
                                    <a href="/FinalQuique/CrudProd/readp.php" class="btn btn-primary">Leer</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row card-options">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">UPDATE</h5>
                                    <p class="card-text">Esta opción permite ACTUALIZAR un registro de la BDD</p>
                                    <a href="/FinalQuique/CrudProd/updatep.php" class="btn btn-primary">Actualizar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">DELETE</h5>
                                    <p class="card-text">Esta opción permite BORRAR un registro de la BDD</p>
                                    <a href="/FinalQuique/CrudProd/deletep.php" class="btn btn-primary">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php")?>
