

<?php $__env->startSection('teach'); ?>
<br/>
<br/>
<div class="container">
        <h2>Course List</h2>
        <?php if(Session::has('msg')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('msg')); ?></strong>
      </div>
    <?php endif; ?>
        <!-- <a href="<?php echo e(url('addcourse')); ?>"class="btn btn-info" >Create Course</a> -->
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Course Credit</th>
                    <th>Course Type</th>
                    <!-- <th>Semester</th> -->
                    <!-- <th>Action</th> -->
                   
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
                            <!-- <td><?php echo e($c->semester); ?></td>
                            <td>
                                <a href="<?php echo e(url('edit-course/'.$c->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo e(url('/delete/'.$c->id)); ?>"class="btn btn-danger btn-sm">Delete</a>
                            </td> -->
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>

        <div class="row">
            
                <?php echo e($courses->links()); ?>

            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Teacher.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/Teacher/pages/tcourselist.blade.php ENDPATH**/ ?>