            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <?php echo '<p class="welcome"><b> <text style="font-size:150%;">&#9786</text> <i>Welcome </i>' . $this->session->userdata('name') . "!</b></p>"; ?>
                        </li>
                        <li>
                            <a href="<?=base_url()?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if($this->session->userdata('role') == 'admin'): ?>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Administrator<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?=base_url('admin/user_list')?>">&raquo; User List</a> </li>
                                    <li> <a href="<?=base_url('admin/activity_log')?>">&raquo; Activity Log</a> </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Management Web<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="<?php echo base_url('dashboard/settings'); ?>">&raquo; Home Settings</a> </li>
                                <li> <a href="<?php echo base_url('dashboard/struktur_organisasi'); ?>">&raquo; Struktur Organisasi</a> </li>
                                <li> <a href="<?php echo base_url('dashboard/gallery_kegiatan'); ?>">&raquo; Gallery Kegiatan</a> </li>
                                <li> <a href="<?php echo base_url('dashboard/gallery_kampus'); ?>">&raquo; Gallery Kampus</a> </li>
                                <li> <a href="<?php echo base_url('dashboard/teknik_industri'); ?>">&raquo; Teknik Industri</a> </li>
                                <li> <a href="<?php echo base_url('dashboard/alumni'); ?>">&raquo; Data Alumni</a> </li>
                                <li> <a href="<?php echo base_url('dashboard/programkerja'); ?>">&raquo; Program Kerja</a> </li>


                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/message'); ?>"><i class="fa fa-user fa-fw"></i>Message</a>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Other Menu Sample<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="#">&raquo; Other Sub Menu 1</a> </li>
                                <li> <a href="#">&raquo; Other Sub Menu 2</a> </li>
                            </ul>
                        </li>


                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>