<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="<?php echo e(url('/')); ?>" class="nav-link <?php echo e(($activeMenu == 'dashboard') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-header">User Data</li>
            <li class="nav-item">
                <a href="<?php echo e(url('/user')); ?>" class="nav-link <?php echo e(($activeMenu == 'user') ? 'active' : ''); ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>Data User</p>
                </a>
            </li>

            <li class="nav-header">Categorization</li>
            <li class="nav-item">
                <a href="<?php echo e(url('/level')); ?>" class="nav-link <?php echo e(($activeMenu == 'level') ? 'active' : ''); ?>">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Data Level</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('/kategori')); ?>" class="nav-link <?php echo e(($activeMenu == 'kategori') ? 'active' : ''); ?>">
                    <i class="nav-icon far fa-list-alt"></i>
                    <p>Data Kategori</p>
                </a>
            </li>

            <li class="nav-header">Transaction Data</li>
            <li class="nav-item">
                <a href="<?php echo e(url('/supplier')); ?>" class="nav-link <?php echo e(($activeMenu == 'supplier') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Data Supplier</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('/barang')); ?>" class="nav-link <?php echo e(($activeMenu == 'barang') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Data Barang</p>
                </a>
            </li>

            <li class="nav-header">Account</li>
            <li class="nav-item">
                <a href="<?php echo e(url('/logout')); ?>" class="nav-link text-danger">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </nav>
</div>
<?php /**PATH C:\Users\user\Documents\2023\Advanced Web Programming\PWL_POS\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>