<a href="<?= base_url('admin') ?>/create/admin" class="btn btn-primary btn-icon-split mb-3">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add Data</span>
</a>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Admin</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($admins as $admin) : ?>
                        <tr>
                            <th><?= $no ?></th>
                            <th><?= $admin['nama_admin'] ?></th>
                            <th><?= $admin['username'] ?></th>
                            <th class="text-center">
                                <a href="<?= base_url('admin/update/admin/') . $admin['id_admin'] ?> " class="btn btn-success">
                                    <span class="text">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                |
                                <a href="<?= base_url('admin/delete/admin/') . $admin['id_admin'] ?> " class="btn btn-danger">
                                    <span class="text">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </a>
                            </th>
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