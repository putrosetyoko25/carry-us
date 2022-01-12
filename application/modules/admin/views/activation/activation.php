<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="header bg-primary pb-2">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Activation Course</h6>
                    <?php if ($flash) : ?>
                        <span class="float-right text-info font-weight-bold">
                            <?php echo $flash; ?>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Activation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt--6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="mb-0">Activation</h3>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($customers as $customer) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $customer['name']; ?></td>
                                <td><?= $customer['address']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/manage/' . $customer['user_id']); ?>" class="btn btn-info btn-sm"><i class="fa fa-cog"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -- >     