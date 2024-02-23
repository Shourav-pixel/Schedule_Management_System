

<?php $__env->startSection('stud'); ?>



<br/>
<br/>
<div class="container">
       <center> <h2>Exam Routine</h2></center>
        <?php if(Session::has('dlt')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('dlt')); ?></strong>
      </div>
    <?php endif; ?>
    
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
               
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Semester</th>
                    <th>Course Type</th>
                    <th>Room</th>
                 
                    
                   
                </tr>
                
            </thead>
            <tbody>
                
                    <?php $__currentLoopData = $exam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->id); ?></td>
                            <td><?php echo e($c->date); ?></td>
                            <td><?php echo e($c->start_time); ?> - <?php echo e($c->end_time); ?></td>
                            <th><?php echo e($c->course_title); ?></th>
                            <th><?php echo e($c->course_code); ?></th>
                            <td><?php echo e($c->semester); ?></td>
                            <td><?php echo e($c->course_type); ?></td>
                            <td><?php echo e($c->	room); ?></td>
                           
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/student/pages/MyRoutines/Exam/examroutine.blade.php ENDPATH**/ ?>