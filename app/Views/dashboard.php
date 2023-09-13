<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">NIK</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="<?php base_url() ?>upload" method="post">
                    <div class="input-group">
                        <input type="text" name="nik" class="form-control form-control-lg" placeholder="Search NIK" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.Main Content -->
<?= $this->endSection(); ?>