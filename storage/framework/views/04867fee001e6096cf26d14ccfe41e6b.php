

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header', 'Data Pengaduan'); ?>

<?php $__env->startSection('content'); ?>
    <table id="pengaduanTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($k += 1); ?></td>
                    <td><?php echo e($v->tgl_pengaduan->format('d-M-Y')); ?></td>
                    <td><?php echo e($v->isi_laporan); ?></td>
                    <td>
                        <?php if($v->status == '0'): ?>
                            <a href="#" class="badge badge-danger">Pending</a>
                        <?php elseif($v->status == 'proses'): ?>
                            <a href="#" class="badge badge-warning text-white">Proses</a>
                        <?php else: ?>
                            <a href="#" class="badge badge-success">Selesai</a>
                        <?php endif; ?>
                    </td>
                    <td><a href="<?php echo e(route('pengaduan.show', $v->id_pengaduan)); ?>" style="text-decoration: underline">Lihat</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    
    <script>
        new DataTable('#pengaduanTable');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi_pengaduan_masyarakat\resources\views/admin/pengaduan/index.blade.php ENDPATH**/ ?>