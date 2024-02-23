

<?php $__env->startSection('teach'); ?>

<br/>
<br/>
<div class="container">
        <center><h2>Assigned Courses</h2></center>
        <?php if(Session::has('dlt')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('dlt')); ?></strong>
      </div>
    <?php endif; ?>
        <!-- <a href="<?php echo e(url('addcourse')); ?>"class="btn btn-info" >Create Course</a> -->
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Title</th>
                    <th>Teacher</th>
                    <th>Session</th>
                    <th>Semester</th>
                     <th>Section</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                
                    <?php $__currentLoopData = $assigned; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->id); ?></td>
                            <td><?php echo e($c->course_title); ?></td>
                            <td><?php echo e($c->name); ?></td>
                            <td><?php echo e($c->session); ?></td>
                            <td><?php echo e($c->semester); ?></td>
                            <td><?php echo e($c->section); ?></td>
                            <td>
                      
                                <a href="<?php echo e(url('mystudent/'.$c->course_id)); ?>" class="btn btn-primary btn-sm">My Students</a>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Teacher.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/Teacher/pages/my-course.blade.php ENDPATH**/ ?>