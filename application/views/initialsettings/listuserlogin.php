<?php
get_template('header','Pengaturan Admin');
get_template('navigation');
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><b>PENGATURAN AWAL</b> > PENGATURAN ADMIN</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>List Admin</b></h5>
                            </h2>
                            <br>
                            <a href="<?php echo site_url('initialsettings/userlogin/viewAddUserLogin'); ?>" class="btn btn-primary">+ Tambah User Admin Baru</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Program Studi</th>
                                    <th>Assign to</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<count($userlogin);$i++){ ?>
                                <tr>
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo $userlogin[$i]['username']; ?></td>
                                    <td><?php echo $userlogin[$i]['nama_prodi']; ?></td>
                                    <td><?php echo $userlogin[$i]['assign_to']!=null ? $userlogin[$i]['assign_to'] : '<i>Not assigned yet</i>'; ?></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </section>
<?php
    get_template('footer');
?>