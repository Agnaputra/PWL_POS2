<?php $__env->startSection('content'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title"><?php echo e($page->title); ?></h3>
    </div>
    
    <div class="card-body">
        <form method="POST" action="<?php echo e(url('/level')); ?>" class="form-horizontal">
            <?php echo csrf_field(); ?>
            
            <!-- Level Code (Select Dropdown) -->
            <div class="form-group row">
                <label class="col-2 col-form-label">Level Code</label>
                <div class="col-10">
                    <select class="form-control" id="level_kode" name="level_kode" required>
                        <option value="">- Pilih Level Code -</option>
                        <option value="L1" <?php echo e(old('level_kode') == 'L1' ? 'selected' : ''); ?>>Level 1</option>
                        <option value="L2" <?php echo e(old('level_kode') == 'L2' ? 'selected' : ''); ?>>Level 2</option>
                        <option value="L3" <?php echo e(old('level_kode') == 'L3' ? 'selected' : ''); ?>>Level 3</option>
                        <option value="L4" <?php echo e(old('level_kode') == 'L4' ? 'selected' : ''); ?>>Level 4</option>
                    </select>
                    <?php $__errorArgs = ['level_kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="form-text text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <!-- Level Name -->
            <div class="form-group row">
                <label class="col-2 col-form-label">Level Name</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="level_nama" name="level_nama" value="<?php echo e(old('level_nama')); ?>" required>
                    <?php $__errorArgs = ['level_nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="form-text text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <!-- Buttons -->
            <div class="form-group row">
                <div class="col-10 offset-2">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <a class="btn btn-sm btn-secondary ml-1" href="<?php echo e(url('level')); ?>">Return</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/level/create.blade.php ENDPATH**/ ?>