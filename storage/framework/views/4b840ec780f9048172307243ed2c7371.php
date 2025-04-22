<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List of items</h3>
        <div class="card-tools">
            <button onclick="modalAction('<?php echo e(url('/barang/import')); ?>')" class="btn btn-info">Import Goods</button>
            <a href="<?php echo e(url('/barang/export_excel')); ?>" class="btn btn-primary"><i class="fa fa-file-excel"></i> Export Barang</a>
            <a href="<?php echo e(url('/barang/export_pdf')); ?>" class="btn btn-primary"><i class="fa fa-filepdf"></i>Export Barang (PDF)</a>
            <button onclick="modalAction('<?php echo e(url('/barang/create_ajax')); ?>')" class="btn btn-success">Add Data (Ajax)</button>
        </div>
    </div>
    <div class="card-body">
        <!-- for Data filter -->
       <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="barang_id" name="barang_id">
                                <option value="">- Semua -</option>
                                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->barang_id); ?>"><?php echo e($item->barang_nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small class="form-text text-muted">Pilih Kode</small>
                        </div>
                    </div>
                </div>
            </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-sm table-striped table-hover" id="table-barang">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Purchase Price</th>
                    <th>Selling Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
function modalAction(url = '') {
    $('#myModal').load(url, function() {
        $('#myModal').modal('show');
    });
}

var tableItem;
$(document).ready(function(){
    tableItem = $('#table-barang').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            "url": "<?php echo e(url('barang/list')); ?>",
            "dataType": "json",
            "type": "POST",
            "data": function (d) {
                d.filter_kategori = $('.filter_kategori').val();
                d._token = "<?php echo e(csrf_token()); ?>";
            }
        },
        columns: [
            {
                data: "DT_RowIndex",
                className: "text-center",
                width: "5%",
                orderable: false,
                searchable: false
            },
            {
                data: "barang_kode",
                className: "",
                width: "10%",
                orderable: true,
                searchable: true
            },
            {
                data: "barang_nama",
                className: "",
                width: "22%",
                orderable: true,
                searchable: true
            },
            {
                data: "harga_beli",
                className: "",
                width: "10%",
                orderable: true,
                searchable: false,
                render: function(data, type, row) {
                    return new Intl.NumberFormat('id-ID').format(data);
                }
            },
            {
                data: "harga_jual",
                className: "",
                width: "10%",
                orderable: true,
                searchable: false,
                render: function(data, type, row) {
                    return new Intl.NumberFormat('id-ID').format(data);
                }
            },
            {
                data: "kategori",
                className: "",
                width: "14%",
                orderable: true,
                searchable: false,
                render: function(data, type, row) {
                    // Handle both object and direct name cases
                    if (typeof data === 'object') {
                        return data.kategori_nama || '';
                    }
                    return data || '';
                }
            },
            {
                data: "action",
                className: "text-center",
                width: "14%",
                orderable: false,
                searchable: false
            }
        ]
    });

    $('#table-barang_filter input').unbind().bind('keyup', function(e) {
        if (e.keyCode == 13) {
            tableItem.search(this.value).draw();
        }
    });

    $('.filter_kategori').change(function() {
        tableItem.draw();
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/barang/index.blade.php ENDPATH**/ ?>