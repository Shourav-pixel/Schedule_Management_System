

<?php $__env->startSection('teach'); ?>


    
<div class="container">
        <h2>My Students</h2>
        <?php if(Session::has('msg')): ?>
        <div class="alert alert-danger">
      <strong><?php echo e(Session::get('msg')); ?></strong>
      </div>
    <?php endif; ?>
        
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
               
               <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Student Id</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                   
                   
                </tr>
           
            </thead>
            <tbody>
                
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($c->id); ?></td>
                            <td><?php echo e($c->name); ?></td>
                            <td><?php echo e($c->student_id); ?></td>

                            <td><?php echo e($c->email); ?></td>
                            <td><?php echo e($c->phone_number); ?></td>
                          
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
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
<?php echo $__env->make('Teacher.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/Teacher/pages/my-students.blade.php ENDPATH**/ ?>