<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Monitoring Mahasiswa</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">M.h</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown <?= ($title == 'Dashboard') ? 'active' : ''; ?>">
                <a href="<?= base_url('/Home'); ?>" class="nav-link "><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li class="<?= ($title == 'Halaman Komik') ? 'active' : ''; ?>"><a class="nav-link "
                    href="<?= base_url('/Komik'); ?>"><i class="far fa-square"></i>
                    <span>Halaman Komik</span></a></li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Bootstrap</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="<?= base_url('/Komik'); ?>">Alert</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                    <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                    <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                    <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                    <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                    <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                    <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                    <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                    <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                    <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                    <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                    <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                    <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                    <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                    <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                    <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                    <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                    <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                    <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                </ul>
            </li>


            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
    </aside>
</div>