<h5 class="mb-4">Alumn Grade</h5>
<div class="col-lg-4 col-md-6">
    <div class="mt-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop">
            Create class
        </button>
        <?php include 'assets/modals/Classes/addClassesModal.php'; ?>
    </div>
</div>
<div class="table-responsive text-nowrap">
    <table class="table card-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Profesor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                <td>Albert Cook</td>
                <td>2022-10-02</td>
                <td>
                    <button type="button" class="btn btn-icon btn-success">
                        <span class="tf-icons bx bx-edit-alt"></span>
                    </button>
                    <button type="button" class="btn btn-icon btn-danger">
                        <span class="tf-icons bx bx-trash"></span>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>