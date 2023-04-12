<section class="content-header">
    <h1>
        Data Siswa
        <small></small>
    </h1>
</section>
    <section class="content">
       
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="pull-left">
                <a href ="<?=site_url('data_siswa/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Tlp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->nama?></td>
                        <td><?=$data->nis?></td>
                        <td><?=$data->tempat_lahir?></td>
                        <td><?=$data->tanggal_lahir?></td>
                        <td><?=$data->jenis_kelamin?></td>
                        <td><?=$data->no_tlp?></td>
                        <td><?=$data->alamat?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('data_siswa/edit/'.$data->id_siswa)?>" onclick="return confirm('Yakin edit data??')" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update 
                            </a>
                            <a href="<?=site_url('data_siswa/del/'.$data->id_siswa)?>" onclick="return confirm('Yakin hapus data??')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    } ?>

                </tbody>
              </table>
            </div>