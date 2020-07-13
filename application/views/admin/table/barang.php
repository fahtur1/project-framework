<a href="<?= base_url('admin') ?>/create/barang" class="btn btn-primary btn-icon-split mb-3">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add Data</span>
</a>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
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
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($products as $product) :
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $product['nama_barang'] ?></td>
                            <td><?= $product['deskripsi_barang'] ?></td>
                            <td>
                                <img src="<?= base_url('assets') ?>/img/barang/<?= $product['gambar_barang'] ?>" class="img-responsive" width="150" />
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/update/barang/') . $product['id_barang'] ?> " class="btn btn-success">
                                    <span class="text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                |
                                <a href="<?= base_url('admin/delete/barang/') . $product['id_barang'] ?> " class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ?')">
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