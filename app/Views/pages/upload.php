<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload files</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/save" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="nik" value="<?= $nik; ?>">
                                <label for="ktp">KTP</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="ktp" name="ktp" accept="image/*" capture="camera" class="custom-file-input" required>
                                        <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kk">KK</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="kk" name="kk" accept="image/*" capture="camera" class="custom-file-input" required>
                                        <label class="custom-file-label" for="kk">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bast">Bast</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="bast" name="bast" accept="image/*" capture="camera" class="custom-file-input" required>
                                        <label class="custom-file-label" for="bast">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="barcode">Foto Barcode</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="barcode" name="barcode" accept="image/*" capture="camera" class="custom-file-input" required>
                                        <label class="custom-file-label" for="barcode">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sn">Foto SN</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="sn" name="sn" accept="image/*" capture="camera" class="custom-file-input" required>
                                        <label class="custom-file-label" for="sn">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pasfoto">Foto Diri</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="pasfoto" name="pasfoto" accept="image/*" capture="camera" class="custom-file-input" required>
                                        <label class="custom-file-label" for="pasfoto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection(); ?>