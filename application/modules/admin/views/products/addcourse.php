<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Course</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/products'); ?>">Course</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/products/manage/' . $id_kursus); ?>"><?php echo $produk[0]['name']; ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <?php echo form_open_multipart('admin/products/add_course'); ?>
    <input type="hidden" name="id_kursus" value="<?php echo $id_kursus; ?>">

    <div class="row">
        <div class="col-md-8">
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Data Course</h3>
                        <?php if ($flash) : ?>
                            <span class="float-right text-success font-weight-bold" style="margin-top: -30px">
                                <?php echo $flash; ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="pakcage">No Urut:</label>
                                        <input type="text" name="no_urut" class="form-control" id="no_urut">
                                        <?php echo form_error('no_urut'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="judul">Judul Course:</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                            <?php echo form_error('judul'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-control-label" for="link">Link Course:</label>
                            <input type="text" name="link" class="form-control" id="link">
                            <?php echo form_error('link'); ?>
                        </div>

                    </div>

                </div>

            </div>
            <div class="card">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>

        </div>
    </div>

    </form>