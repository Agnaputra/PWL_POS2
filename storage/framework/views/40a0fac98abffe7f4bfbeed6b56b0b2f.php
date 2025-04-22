<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('supplier/create')); ?>">Add</a>
                <button onclick="modalAction('<?php echo e(url('supplier/create_ajax')); ?>')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <input type="text" class="form-control" id="supplier_name" placeholder="Cari Nama Supplier">
                        <small class="form-text text-muted">Nama Supplier</small>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover table-sm" id="table_supplier">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script>
function modalAction(url = '') {
    $('#myModal').load(url, function () {
        $('#myModal').modal('show');
    });
}

var dataSupplier;
$(document).ready(function () {
    dataSupplier = $('#table_supplier').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?php echo e(url('supplier/list')); ?>",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            data: function (d) {
                d.supplier_name = $('#supplier_name').val();
            },
            error: function (xhr, error, thrown) {
                console.log(xhr.responseText);
                alert("Error loading data. Check console for details.");
            }
        },
        columns: [
            { data: "DT_RowIndex", className: "text-center", orderable: false, searchable: false },
            { data: "nama_supplier", orderable: true, searchable: true },
            { data: "email", orderable: true, searchable: true },
            { data: "telepon", orderable: true, searchable: true },
            { data: "alamat", orderable: true, searchable: true },
            { data: "action", orderable: false, searchable: false }
        ]
    });

    $('#supplier_name').on('keyup', function () {
        dataSupplier.ajax.reload();
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/supplier/index.blade.php ENDPATH**/ ?>