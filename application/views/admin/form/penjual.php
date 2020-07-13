<div class="col-md-4">
    <form action="<?= base_url('admin') ?>/create/penjual" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="<?= set_value('name') ?>">
            <?= form_error('name', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="date" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" style="resize: none;"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?= set_value('email') ?>">
            <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            <?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>