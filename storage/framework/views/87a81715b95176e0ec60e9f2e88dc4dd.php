<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('level/create')); ?>">add</a>
                <button onclick="modalAction('<?php echo e(url('level/create_ajax')); ?>')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
            </div>
        </div>

        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <!-- Filter Level -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="level_kode" name="level_kode">
                                <option value="">- Semua -</option>
                                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->level_nama); ?>"><?php echo e($item->level_nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small class="form-text text-muted">Pilih Level</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Level Code</th>
                        <th>Level Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
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
    var dataUser = $('#table_level').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?php echo e(url('level/list')); ?>",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            data: function(d) {
                d.level_kode = $('#level_kode').val();
            },
            error: function(xhr, error, thrown) {
                console.log(xhr.responseText);
                alert("Error loading data. Check console for details.");
            }
        },
        columns: [
            { data: "DT_RowIndex", className: "text-center", orderable: false, searchable: false },
            { data: "level_kode", orderable: true, searchable: true },
            { data: "level_nama", orderable: true, searchable: true },
            { data: "action", orderable: false, searchable: false }
        ]
    });

    $('#level_kode').on('change', function(){
        dataLevel.ajax.reload();
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/level/index.blade.php ENDPATH**/ ?>