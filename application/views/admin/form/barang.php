<div class="col-md-4">
    <?= form_open_multipart('admin/create/barang'); ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" style="resize: none;"></textarea>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">Picture</div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose File</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>