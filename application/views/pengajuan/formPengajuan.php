<?php
get_template('header','Pengajuan Skripsi');
get_template('navigation');
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><b>PENGAJUAN AWAL SKRIPSI</b></h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Isi form pengajuan skripsi</b></h5>
                            </h2>
                        </div>
                        <div class="body">
                            <form method="post">
                            <div class="row clearfix">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>Judul :</label>
                                        <div class="form-line">
                                            <input type="text" id="judul" required name="judul" class="form-control" />
                                        </div>
                                    </div>
										<!-- <label>Abstrak :</label>
                                        <div class="body">
                                            <textarea id="tinymce">
                                                <h2>WYSIWYG Editor</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                                <h3>Lacinia</h3>
                                                <ul>
                                                    <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                                    <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                                    <li>Praesent non lacinia mi.</li>
                                                    <li>Mauris a ante neque.</li>
                                                    <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                                </ul>
                                                <h3>Pellentesque adipiscing</h3>
                                                <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                            </textarea>
                                        </div> -->
									
                                    <div class="form-group">
                                        <label>Bidang Kajian :</label>
                                        <div class="form-line">
											<select class="form-control show-tick">
												<option value="sisteminformasi">Sistem Informasi</option>
												<option value="damin">Data Mining</option>
												<option value="bigdata">Big Data</option>
												<option value="expertsistem">Expert Sistem / DSS</option>
												<option value="moprog">Mobile Programming</option>
												<option value="jarkom">Jaringan Komputer</option>
											    <option value="vision">Computer Vision</option>
											</select>
										</div>
                                     </div>	
									 <div class="form-group">
                                        <label>Tools / Framework</label>
                                        <div class="form-line">
                                            <input type="text" id="tools" required name="tools" class="form-control"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label>Pembimbing 1</label>
                                        <select name="prodi" id="prodi" required class="form-control show-tick" data-live-search="true">
                                        <?php for($i=0;$i<count($prodi);$i++){ ?>
                                            <option value="<?php echo $prodi[$i]['kode_dosen']?>" ><?php echo $prodi[$i]['nama_dosen']?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    
									<div class="form-group">
                                        <label>Pembimbing 2 (jika ada)</label>
                                        <div class="form-line">
                                            <input type="text" id="pembimbing2" required name="pembimbing2" class="form-control"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label> Objek / Lokasi</label>
                                        <div class="form-line">
                                            <input type="text" id="lokasi" required name="lokasi" class="form-control"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label> Narasumber</label>
                                        <div class="form-line">
                                            <input type="text" id="narasumber" required name="narasumber" class="form-control"/>
                                        </div>
                                    </div>
									
									
                                    <div class="form-group">
                                        <button type="submit" id="saveUser" class="btn btn-primary">Simpan</button>
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
