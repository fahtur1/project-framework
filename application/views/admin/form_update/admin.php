<div class="col-md-4">
    <form action="<?= base_url('admin') ?>/update/admin/<?= $admin['id_admin'] ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $admin['nama_admin'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="date" aria-describedby="emailHelp" min="1900-01-01" max="<?= date('d/m/Y') ?>" value="<?= date_reverse($admin['tanggal_lahir_admin']) ?>" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1" name="gender" readonly>
                <option><?= $admin['jenis_kelamin_admin'] ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" style="resize: none;"><?= $admin['alamat_admin'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $admin['email_admin']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>