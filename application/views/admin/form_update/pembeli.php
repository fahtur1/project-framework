<div class="col-md-4">
    <form action="<?= base_url('admin') ?>/update/pembeli/<?= $buyer['id_pembeli']; ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="<?= $buyer['nama_pembeli'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="date" aria-describedby="emailHelp" min="1900-01-01" max="<?= date('d/m/Y') ?>" value="<?= date_reverse($buyer['tanggal_lahir_pembeli']) ?>" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1" name="gender" readonly>
                <option><?= $buyer['jenis_kelamin_pembeli'] ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" style="resize: none;"><?= $buyer['alamat_pembeli'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?= $buyer['email_pembeli'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>