<!-- Sidebar -->

<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('kasir') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('kasir/customer'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Customer</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kasir/transaksi'); ?>">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>Transaksi Penjualan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-bars"></i>
            <span>Daftar Transaksi</span></a>
    </li>
</ul>