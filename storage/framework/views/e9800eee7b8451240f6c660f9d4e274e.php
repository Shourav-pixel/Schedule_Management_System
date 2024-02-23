

<?php $__env->startSection('stud'); ?>

<br/>
<br/>
<div class="container">
        <h2>Enrolled Course List</h2>
        <?php if(Session::has('dlt')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('dlt')); ?></strong>
      </div>
    <?php endif; ?>
      
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Session</th>
                    <th>Course Title</th>
                    <th>Sections</th>
                   
                   
                </tr>
            </thead>
            <tbody>
                
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->id); ?></td>
                            <td><?php echo e($c->session); ?></td>
                            <td><?php echo e($c->course_title); ?></td>
                        
                            <td><?php echo e($c->section); ?></td>
                          
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/student/pages/my_courses.blade.php ENDPATH**/ ?>