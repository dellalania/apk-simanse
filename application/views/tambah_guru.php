<section class="content-header">
    <h1>
         Data  Guru
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> Data Guru</h3>
            <div class="pull-right">
                <a href ="<?=site_url('data_guru')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
            <div class ="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('data_guru/process')?>" method="post">
                        <div class="form-group">
                                <label>Nama *</label>
                                <input type="hidden" name="id" value="<?=$row->id_gurupns?>">
                                <input type="text" name="nama" value="<?=$row->nama?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nip *</label>
                                <input type="text" name="nip" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pangkat*</label>
                                <select name="pangkat" class="form-control">
                                    <option value="">-pilih-</option>
                                    <option value="pns"<?=set_value('jenis') == 1 ? "selected" : null ?>>PNS</option>
                                    <option value="pns"<?=set_value('jenis') == 2 ? "selected" : null ?>>Honorer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jabatan *</label>
                                <select name="jabatan" class="form-control">
                                    <option value="">-pilih-</option>
                                    <option value="Guru Kelas"<?=set_value('jenis') == 1 ? "selected" : null ?>>Guru Kelas</option>
                                    <option value="Guru Agama"<?=set_value('jenis') == 1 ? "selected" : null ?>>Guru Agama</option>
                                    <option value="Guru. Binggris"<?=set_value('jenis') == 1 ? "selected" : null ?>>Guru B.inggris</option>
                                    <option value="Guru Penjas"<?=set_value('jenis') == 1 ? "selected" : null ?>>Guru Penjas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Masa Golongan *</label>
                                <select name="masa_gol" class="form-control">
                                    <option value="">-pilih-</option>
                                    <option value="01"<?=set_value('jenis') == 1 ? "selected" : null ?>>01</option>
                                    <option value="02"<?=set_value('jenis') ==  1 ? "selected" : null ?>>02</option>
                                    <option value="03"<?=set_value('jenis') ==  1 ? "selected" : null ?>>03</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <p>
                                <input type="radio" value="perempuan" name="jenis_kelamin" class="flat-red" checked>Perempuan</input>
                                <p>
                                <input type="radio" value="laki-laki" name="jenis_kelamin" class="flat-red" checked>Laki-laki</input>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan *</label>
                                <select name="pendidikan" class="form-control">
                                    <option value="">-pilih-</option>
                                    <option value="S1"<?=set_value('jenis') == 1 ? "selected" : null ?>>S1</option>
                                    <option value="SPG"<?=set_value('jenis') ==  1 ? "selected" : null ?>>SPG</option>
                                    <option value="D2"<?=set_value('jenis') ==  1 ? "selected" : null ?>>D2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir *</label>

                                <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="ttl" class="form-control pull-right" id="datepicker">
                            </div>
                            <div class="form-group">
                                <label>Jurusan *</label>
                                <input type="text" name="jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal lulus *</label>

                                <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="year" name="th_lulus" class="form-control pull-right" id="datepicker">
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