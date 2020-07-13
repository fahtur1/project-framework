<a href="<?= base_url('admin') ?>/create/pembeli" class="btn btn-primary btn-icon-split mb-3">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add Data</span>
</a>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pembeli</h1>
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
                    foreach ($buyers as $buyer) :
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $buyer['nama_pembeli'] ?></td>
                            <td><?= $buyer['tanggal_lahir_pembeli'] ?></td>
                            <td><?= $buyer['jenis_kelamin_pembeli'] ?></td>
                            <td><?= $buyer['alamat_pembeli'] ?></td>
                            <td><?= $buyer['email_pembeli'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/update/pembeli/') . $buyer['id_pembeli'] ?> " class="btn btn-success">
                                    <span class="text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                |
                                <a href="<?= base_url('admin/delete/pembeli/') . $buyer['id_pembeli'] ?> " class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ?')">
                                    <span class="text">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>