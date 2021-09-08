<div class="content-wrapper">
    <h2><?= $title?></h2>
    <?php 
        if ($this->session->flashdata('pesan')){
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                    '.$this->session->flashdata('pesan').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">x
                    <span aria-hidden="true"></span>
                </button>
                </div>';
        }
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card table-responsive">
                <div class="card-body">
                    <table class ="table table-hover ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Kepala Sekolah</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th class ="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1; foreach ($data_sekolah as $ds) { ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $ds->nama_sekolah?></td>
                                    <td><?= $ds->alamat?></td>
                                    <td><?= $ds->kepala_sekolah?></td>
                                    <td><?= $ds->status_sekolah?></td>
                                    <td><?= $ds->ket?></td>
                                    <td>
                                        <a href="<?= base_url('sekolah/hapus/'.$ds->id_sekolah)?>" class = "btn btn-danger btn-sm" onClick="return confirm('apakah data ingin di hapus ?')">Hapus</a>
                                        <a href="<?= base_url('sekolah/edit/'.$ds->id_sekolah)?>" class = "btn btn-info btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

