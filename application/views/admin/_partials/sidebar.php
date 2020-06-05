<!-- Sidebar -->

<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/barang'); ?>">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Data Barang</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/user'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pegawai</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/customer'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Customer</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-bars"></i>
            <span>Laporan Penjualan</span></a>
    </li>
</ul>