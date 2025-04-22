<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-4">
        <!-- Profile Card -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile text-center">
                <?php if(session('photo')): ?>
                    <img class="profile-user-img img-fluid img-circle"
                         src="<?php echo e(asset('storage/' . session('photo'))); ?>"
                         alt="User profile picture">
                <?php else: ?>
                    <img class="profile-user-img img-fluid img-circle"
                         src="https://ui-avatars.com/api/?name=User&background=random"
                         alt="Default profile picture">
                <?php endif; ?>

                <h3 class="profile-username text-center mt-2">Agna Putra Prawira</h3>
                <p class="text-muted text-center">Mahasiswa Teknik Informatika POLINEMA</p>

                <ul class="list-group list-group-unbordered mb-3 text-left">
                    <li class="list-group-item">
                        <b>Email</b> <span class="float-right">agnaputra2321@@email.com</span>
                    </li>
                    <li class="list-group-item">
                        <b>Asal</b> <span class="float-right">Kota Probolinggo</span>
                    </li>
                    <li class="list-group-item">
                        <b>Bidang</b> <span class="float-right">Teknik Informatika</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <!-- Upload Photo Form -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Upload Foto Profil</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('profile.upload')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="profile_photo">Pilih Foto Baru</label>
                        <input type="file" name="profile_photo" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/welcome.blade.php ENDPATH**/ ?>