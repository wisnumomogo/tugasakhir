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
                                <b>Edit user admin</b></h5>
                            </h2>
                        </div>
                        <?php $arr = $dataEdit[0]; ?>
                        <div class="body">
                            <form method="post">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Username :</label>
                                        <div class="form-line">
                                            <input type="text" id="username" dis name="username" value="<?php echo $arr['username']; ?>" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Password :</label>
                                        <div class="form-line">
                                            <input type="password" readonly name="password" id="pw1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password :</label>
                                        <div class="form-line">
                                            <input type="password" required name="password2" id="pw2" class="form-control"/>
                                        </div>
                                    </div> -->
                                    <!-- <span id="message" style="display:none;"></span> -->
                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select name="prodi" id="prodi" required class="form-control show-tick" data-live-search="true">
                                        <?php for($i=0;$i<count($prodi);$i++){ ?>
                                            <option value="<?php echo $prodi[$i]['kode_prodi']?>" <?php echo $arr['kode_prodi']==$prodi[$i]['kode_prodi'] ? 'selected' : ''; ?> ><?php echo $prodi[$i]['nama_prodi']?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div id="assign" class="form-group">
                                        
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


<script type="text/javascript">
    //action ketika select prodi dipilih
    $("#prodi").change(function(){
        var kode_prodi = {kode_prodi:$("#prodi").val()};
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo site_url('initialsettings/userlogin/selectAssign')?>",
            data: {'prodi':kode_prodi},
            success: function(data){
                console.log(data);
                var assign = '<label>Assign to</label>';
                assign += '<select name="assign" id="assigns" required class="form-control show-tick" data-live-search="true">'
                for(var i=0;i<data.length;i++){
                    var option = '<option value="'+data[i]['kode_dosen']+'">'+data[i]['nama_dosen']+'</option>';
                    assign += option;
                
                    console.log(assign);
                }
                assign += '</select>';
                $('#assign').html(assign);
                
                // $.each(data, function(key, value) {
                //     var option = '<option value="'+key+'">'+value+'</option>';
                //     $("#assign").append(option);
                //     console.log(option);
                // });
            }
        });     
    });

    //action ketika tombol submit dikirim
    $("#saveUser").click(function(){
        var username  = $("#username").val();
        var password   = $("#pw1").val();
        var password2   = $("#pw2").val();
        var prodi   = $("#prodi").val();
        var assign   = $("#assigns").val();
        if(password != password2){
            swal({
                title: "Error Password!",
                text: "Password dan confirm password tidak sama",
                imageUrl: "<?php echo site_url('assets/images/cancel.png');?>"
            });
        }else{
            $.ajax({
                url : "<?php echo site_url('initialsettings/userlogin/createUserLogin'); ?>",
                type: 'POST',
                data : {'username':username,'password':password,'prodi':prodi,'assign':assign},
                success: function(resp) {
                    if (resp.status == "success"){
                        swal({
                            title: "Success",
                            text: "Data was successfully saved!",
                            type: "success"
                        }, function () {
                            window.location.href=resp.redirect;
                        });
                    }else{
                        console.log(resp);
                        swal({
                            title: "Error!",
                            text: "Silahkan cek kembali inputan anda",
                            imageUrl: "<?php echo site_url('assets/images/cancel.png');?>"
                        });
                    }
                }
            });
        }
        return false;
    });
</script>