<section class="content-header">
    <h1>
        Data Siswa
        <small></small>
    </h1>
</section>
    <section class="content">
    <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> Data siswa</h3>
            <div class="pull-right">
                <a href ="<?=site_url('data_siswa')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
            <div class ="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('data_siswa/process')?>" method="post">
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="hidden" name="id" value="<?=$row->id_siswa?>">
                                <input type="text" name="nama" value="<?=$row->nama?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nis *</label>
                                <input type="text" name="nis" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir *</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir *</label>

                                <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="tanggal_lahir" class="form-control pull-right" id="datepicker">
                            </div>
                            <p>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <p>
                                <input type="radio" value="perempuan" name="jenis_kelamin" class="flat-red" checked>Perempuan</input>
                                <p>
                                <input type="radio" value="laki-laki" name="jenis_kelamin" class="flat-red" checked>Laki-laki</input>
                            </div>
                            <div class="form-group">
                                <label>No. Tlp *</label>
                                <input type="text" name="no_tlp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat *</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <p>
                            <div class="form-group">
                                <button type=submit name="<?=$page?>" class="btn btn-success btn-plat ">save
                                <i class="fa fa-paper-plane" ></i></button>
                                <button type=reset  class="btn btn-danger btn-plat ">Reset
                                <i class="fa fa-trash-o" ></i></button>
                                     
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </selection>