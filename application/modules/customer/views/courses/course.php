<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $nama['0']['nama_courses']; ?></h1>
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
                    <div class="col-lg-3 col-6">
                        <div class="<?= 'small-box ' . $color[$a++]; ?>">
                            <?php if ($a == 6) $a = 0; ?>
                            <div class="inner">
                                <h3><?= $ha['no_urut']; ?></h3>

                                <p><?php echo $ha['judul']; ?></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>

                            <?php if ($time > time()) : ?>
                                <a href="<?php echo site_url('customer/watch/' . $ha['link']); ?>" class="small-box-footer">Access Course <i class="fas fa-arrow-circle-right"></i></a>
                            <?php else : ?>
                                <a href="<?php echo base_url('/index.php/#products'); ?>" class="small-box-footer">Buy Now <i class="fas fa-arrow-circle-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

    </section>
</div>