<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/products') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Mahasiswa</span></a>
        </li>
</ul>
