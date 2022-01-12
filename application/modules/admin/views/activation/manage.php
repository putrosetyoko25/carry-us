<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="header bg-primary pb-2">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Manage Course</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/activation'); ?>">Activation</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Page content -->
<div class="container-fluid mt--6">
    <form action="<?php echo site_url('admin/managecourse'); ?>" method="post">
        <input type="hidden" name="id_customer" value="<?= $id; ?>">

        <div class="row">
            <div class="col-md-4">
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
                                        <label class="form-control-label" for="pakcage">Nama Kursus:</label>
                                        <select name="id_kursus" class="form-control" id="id_kursus">
                                            <?php foreach ($courses as $course) : ?>
                                                <option value="<?= $course['id_kursus']; ?>"><?= $course['nama_courses']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pakcage">Time Limit:</label>
                                        <select name="time" class="form-control" id="time">

                                            <option value="<?= $time; ?>">30 Day</option>

                                        </select>
                                    </div>
                                </div>
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