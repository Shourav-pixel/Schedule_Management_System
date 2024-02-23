
<?php $__env->startSection('abc'); ?>


    
<div class="container">
        <h2>Teacher List</h2>
        <?php if(Session::has('msg')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('msg')); ?></strong>
      </div>
      <?php if(Session::has('dlt')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('dlt')); ?></strong>
      </div>
    <?php endif; ?>
    <?php endif; ?>
        
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Teacher Id</th>
                    <th>Email</th>
                    <th>DATE of Joining</th>
                    <th>Actions</th>
                   
                   
                </tr>
            </thead>
            <tbody>
                
                    <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->id); ?></td>
                            <td><?php echo e($c->name); ?></td>
                            <td><?php echo e($c->teacher_id); ?></td>
                            <td><?php echo e($c->email); ?></td>
                            <td><?php echo e($c->created_at); ?></td>
                            <td>
                                <!-- <a href="<?php echo e(url('edit-course/'.$c->id)); ?>" class="btn btn-warning btn-sm">Edit</a> -->
                                <a href="<?php echo e(url('/delete/'.$c->id)); ?>"class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
        <br>
        <div class="row"><center> <?php echo e($teacher->links()); ?></center></div>
        <br>

       
    </div>
    <style>
       body {
                      /* background-color:  rgb(152, 227, 227)!important;
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-size: 100% 100%;
                          } */
                          th{
                            text-align: center;
                          }
                          td{
                            text-align: center;
                          }
    </style>



        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/admin/pages/teacher_list.blade.php ENDPATH**/ ?>