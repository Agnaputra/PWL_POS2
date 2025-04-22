<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('user/create')); ?>">add</a>
                <button onclick="modalAction('<?php echo e(url('user/create_ajax')); ?>')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
        </div>
    </div>
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="table table-bordered table-striped table-hover table-sm" id="table_user">
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                    `         <select class="form-control" id="level_id" name="level_id" required>
                            <option value="">- Semua -</option>
                            <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->level_id); ?>"><?php echo e($item->level_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <small class="form-text text-muted">Level Pengguna</small>
                    </div>
                </div>
            </div>
        </div>        
<table class="table table-bordered table-striped table-hover table-sm"
id="table_user">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>User Level</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-
backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script>
function modalAction(url= ''){
    $('#myModal').load(url,function(){
        $('#myModal').modal('show');
    });
}

var dataUser;
$(document).ready(function() {
    var dataUser = $('#table_user').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
                url: "<?php echo e(url('user/list')); ?>",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                },
                data: function(d) {
                    d.level_id = $('#level_id').val();
                },
                error: function(xhr, error, thrown) {
                    console.log(xhr.responseText);
                    alert("Error loading data. Check console for details.");
                }
            },
        columns: [
            { data: "DT_RowIndex", className: "text-center", orderable: false, searchable: false },
            { data: "username", orderable: true, searchable: true },
            { data: "name", orderable: true, searchable: true },
            { data: "level_id", orderable: false, searchable: false },
            { data: "action", orderable: false, searchable: false }
        ]
    });
    $('#level_id').on('change', function(){
        dataUser.ajax.reload();
    })
});

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/user/index.blade.php ENDPATH**/ ?>