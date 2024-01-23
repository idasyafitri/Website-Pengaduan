

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header', 'Data Petugas'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('petugas.create')); ?>" class="btn btn-purple  mb-2">Tambah Petugas</a>    
    <table id="petugasTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Level</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($k += 1); ?></td>
                    <td><?php echo e($v->nama_petugas); ?></td></td>
                    <td><?php echo e($v->username); ?></td>
                    <td><?php echo e($v->telp); ?></td>
                    <td><?php echo e($v->level); ?></td>
                    <td><a href="<?php echo e(route('petugas.edit', $v->id_petugas)); ?>" style="text-decoration: underline">Lihat</a></td>
                </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    
    <script>
        new DataTable('#petugasTable');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi_pengaduan_masyarakat\resources\views/admin/petugas/index.blade.php ENDPATH**/ ?>