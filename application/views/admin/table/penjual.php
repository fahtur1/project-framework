<a href="<?= base_url('admin') ?>/create/penjual" class="btn btn-primary btn-icon-split mb-3">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add Data</span>
</a>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Penjual</h1>
<?= $this->session->flashdata('message'); ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($sellers as $seller) :
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $seller['nama_penjual'] ?></td>
                            <td><?= $seller['tanggal_lahir_penjual'] ?></td>
                            <td><?= $seller['jenis_kelamin_penjual'] ?></td>
                            <td><?= $seller['alamat_penjual'] ?></td>
                            <td><?= $seller['email_penjual'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/update/penjual/') . $seller['id_penjual'] ?> " class="btn btn-success">
                                    <span class="text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                |
                                <a href="<?= base_url('admin/delete/penjual/') . $seller['id_penjual'] ?> " class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ?')">
                                    <span class="text">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>