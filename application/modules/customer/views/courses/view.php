<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">My Courses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?php if ($flash) : ?>
                        <div class="text-success font-weight-bold"><?php echo $flash; ?></div>
                    <?php else : ?>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dasbor</li>
                        </ol>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php $a = 0; ?>
                <?php foreach ($course as $ha) : ?>
                    <?php if ($ha['is_available'] == 1) : ?>
                        <div class="col-lg-3 col-6">
                            <div class="<?= 'small-box ' . $color[$a++]; ?>">
                                <?php if ($a == 6) $a = 0; ?>
                                <div class="inner">
                                    <h3><?php
                                        echo $ha['nama_courses'];
                                        ?>
                                    </h3>

                                    <p><?php echo $ha['nama_courses']; ?></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo site_url('customer/course/' . $ha['id_kursus']); ?>" class="small-box-footer">Lihat Course <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
    </section>
</div>