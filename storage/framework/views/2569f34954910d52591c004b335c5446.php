

<?php $__env->startSection('teach'); ?>

    <br>
    <br>
<center><h3><strong>Class Timetable</strong></h3></center>
    <div class="container">
        <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dayId => $dayData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header"><strong><?php echo e($dayData['day_name']); ?></strong></div>
                <hr>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Teacher</th>
                                <th>Course Type</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $dayData['routines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $routine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($routine['start_time']); ?> - <?php echo e($routine['end_time']); ?></td>
                                    <td><?php echo e($routine['course_title']); ?></td>
                                    <td><?php echo e($routine['course_code']); ?></td>
                                    <td><?php echo e($routine['teacher_name']); ?></td>
                                    <td><?php echo e($routine['course_type']); ?></td>
                                    <td><?php echo e($routine['room']); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Teacher.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/Teacher/pages/Class/myClass.blade.php ENDPATH**/ ?>