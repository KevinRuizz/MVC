<?php include_once "header.php"; ?>

<form action="#" method="post" id="rolesFrm">
    <div class="row">
        <div class="col-12 my-5">
            <h1 class="text-center">Formulario Roles</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-end">
        <div class="col-6">
            <label class="form-label">Nombre del rol:</label>
            <input class="form-control" type="text" name="txtNombre" id="txtNombre">
        </div>
        <div class="col-3 align-self-end">
            <input class="btn btn-primary" type="submit" value="Registrar">
        </div>
    </div>

</form>
<?php include_once "footer.php"; ?>
<script src="./assets/js/roles.js"></script>