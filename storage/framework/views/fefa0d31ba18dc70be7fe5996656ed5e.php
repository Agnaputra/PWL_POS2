<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Detail Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php if(empty($kategori)): ?>
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
                </div>
            <?php else: ?>
                <table class="table table-bordered table-striped table-hover table-sm">
                   <tr>
                        <th>ID</th>
                        <td><?php echo e($kategori->kategori_id); ?></td>
                    </tr>
                    <tr>
                        <th>Level Kategori</th>
                        <td><?php echo e($kategori->kategori_kode); ?></td>
                    </tr>
                    <tr>
                        <th>Nama Kategori</th>
                        <td><?php echo e($kategori->kategori_nama); ?></td>
                    </tr>
                    
                </table>
            <?php endif; ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\PWL_POS1\resources\views/kategori/show_ajax.blade.php ENDPATH**/ ?>