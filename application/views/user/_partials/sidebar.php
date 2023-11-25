<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('Dashboard'); ?>" class="brand-link">
        <!-- <img src="<?= base_url('assets/'); ?>img/logo/sekarsari.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8"> -->
        <span class="brand-text font-weight-bold text-center" style="justify-content: center; display:flex;"><?php echo SITE_NAME ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo site_url('User'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('User/ciri'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Ciri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('User/kepribadian'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kepribadian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('User/diagnosa'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Diagnosa Kepribadian
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>