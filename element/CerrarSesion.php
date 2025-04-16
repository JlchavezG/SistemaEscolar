<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="CerrarSesionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cerrar Sesion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="text-center">Deceas cerrar la sesion <?php echo $usuario; ?></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <a href="include/cerrarS.php" class="btn btn-primary">Cerrar Sesion</a>
            </div>
        </div>
    </div>
</div>