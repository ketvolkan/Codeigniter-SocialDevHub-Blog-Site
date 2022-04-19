<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url("/") ?>" class="brand-link">
        <img src=<?php echo base_url("assets/img/Socialdevhublogo.png") ?> alt="socialdevhublogo" class="brand-image img-circle elevation-3 bg-light" style="opacity: .8;padding:3px;width:15%;heigth:15%">
        <span class="brand-text font-weight-light">Social Dev Hub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url("assets/adminAssets/dist/img/user2-160x160.jpg") ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Gönderiler
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Post/Lists") ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Post/Add") ?>" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Ekle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Post/Update") ?>" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Güncelle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Post/Delete") ?>" class="nav-link">
                                <i class="fas fa-trash nav-icon"></i>
                                <p>Sil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kullanıcılar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/User/Lists") ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/User/Add") ?>" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Ekle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/User/Update") ?>" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Güncelle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/User/Delete") ?>" class="nav-link">
                                <i class="fas fa-trash nav-icon"></i>
                                <p>Sil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Ayarları
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Setting/Site") ?>" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Site Ayarları</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Setting/Panel") ?>" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Panel Ayarları</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>