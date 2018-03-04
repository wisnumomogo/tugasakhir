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
                                <b>Buat user admin baru</b></h5>
                            </h2>
                        </div>
                        <div class="body">
                            <form method="post" action="<?php echo site_url('initialsettings/userlogin/createUserLogin'); ?>">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Username :</label>
                                        <div class="form-line">
                                            <input type="text" name="username" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password :</label>
                                        <div class="form-line">
                                            <input type="password" name="password" id="pw1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password :</label>
                                        <div class="form-line">
                                            <input type="password" id="pw2" class="form-control"/>
                                        </div>
                                    </div>
                                    <span id="message" style="display:none;"></span>
                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select name="prodi" class="form-control show-tick" data-live-search="true">
                                        <?php for($i=0;$i<count($prodi);$i++){ ?>
                                            <option value="<?php echo $prodi[$i]['kode_prodi']?>"><?php echo $prodi[$i]['nama_prodi']?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row clearfix">
                                <div class="col-md-3">
                                    <label>Program Studi</label>
                                    <select class="form-control show-tick" data-live-search="true">
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                            </div> -->
                            </form>
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

