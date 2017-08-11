<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
   <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

               <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="<?php echo base_url('admin/dasbor') ?>" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Users </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url('admin/user')?>"> Data User</a></li>
                        <li><a href="<?php echo base_url('admin/user/tambah')?>"> Tambah User</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class=" ti-light-bulb"></i> <span> Anggota </span><span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url('admin/anggota')?>"> Data Anggota</a></li>
                        <li><a href="<?php echo base_url('admin/anggota/tambah')?>"> Tambah Anggota</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class=" ti-paint-bucket"></i> <span> Refrensi </span><span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url('admin/jenis')?>"> Daftar Jeni Buku</a></li>
                        <li><a href="<?php echo base_url('admin/bahasa')?>"> Daftar Bahasa Buku</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>Tables </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">More</li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
   </div>
</div>
<!-- Left Sidebar End -->
