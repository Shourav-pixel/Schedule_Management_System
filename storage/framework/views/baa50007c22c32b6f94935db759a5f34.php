
<?php $__env->startSection('abc'); ?>


<br/>
<br/>
<div class="container">
        <h2>Course List</h2>
        <?php if(Session::has('dlt')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('dlt')); ?></strong>
      </div>
    <?php endif; ?>
        <a href="<?php echo e(url('addcourse')); ?>"class="btn btn-info" >Create Course</a>
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Course Credit</th>
                    <th>Course Type</th>
                    <th>Semester</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->id); ?></td>
                            <td><?php echo e($c->course_title); ?></td>
                            <td><?php echo e($c->course_code); ?></td>
                            <td><?php echo e($c->course_credit); ?></td>
                            <td><?php echo e($c->course_type); ?></td>
                            <td><?php echo e($c->semester_id); ?></td>
                            <td>
                            <a href="<?php echo e(url('assign-teacher/'.$c->id)); ?>" class="btn btn-primary btn-sm">Assign</a>
                                <a href="<?php echo e(url('edit-course/'.$c->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo e(url('delete-course/'.$c->id)); ?>"class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
            
        </table>
        <br>
        <div class="row"><center>
        <?php echo e($courses->links()); ?>

        </center>
        </div>
        <br>
      
         

    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/admin/pages/courselist.blade.php ENDPATH**/ ?>