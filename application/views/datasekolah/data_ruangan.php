<section class="content-header">
    <h1>
        Data Ruangan
        <small></small>
    </h1>
</section>
    <section class="content">
       
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="pull-left">
                <a href ="<?=site_url('data_ruangan/add')?>" class="btn btn-primary btn-flat">
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
                        <th>Nama Ruangan</th>
                        <th>Jumlah Ruangan</th>
                        <th>Kondisi Ruangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->nama_ruangan?></td>
                        <td><?=$data->jumlah_ruangan?></td>
                        <td><?=$data->kondisi_ruangan?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('data_ruangan/edit/'.$data->id_ruangan)?>" onclick="return confirm('Yakin edit data??')" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update 
                            </a>
                            <a href="<?=site_url('data_ruangan/del/'.$data->id_ruangan)?>" onclick="return confirm('Yakin hapus data??')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                    } ?>

                </tbody>
              </table>
            </div>