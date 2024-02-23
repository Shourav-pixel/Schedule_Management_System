
<?php $__env->startSection('abc'); ?>
<br>
<br>


<div class="container-fluid">
    <center><h3>Assign Teacher </h3></center>
            <?php if(Session::has('msg')): ?>
            <div class="alert alert-success">
 Successfully Assigned!!
  
</div>


            <?php endif; ?>


        <style>
.alert-success {
  background-color: #4CAF50; /* Green background color */
  color: white;              /* Text color */
  padding: 15px;             /* Padding inside the alert */
  border-radius: 5px;        /* Rounded corners */
  margin-bottom: 15px;      /* Spacing between alerts */
}




        </style>





    <form method="post" action="<?php echo e(url('assign-teacherstore')); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="tid">Select Course</label>
            <select name="course_id" class="form-control" id="course_type" style="font-size: 20px;">
                <option value="<?php echo e($courses->id); ?>"><?php echo e($courses->course_title); ?></option>
                
               
            </select>
        </div>
        <div class="form-group">
            <label for="tid">Select Teacher</label>
            <select name="tid" class="form-control" id="course_type" style="font-size: 20px;">
                <option value="">Select Teacher</option>
                <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
          <label for="session_id">Select Session</label>
          <select name="session_id" id="" class="form-control"style="font-size: 20px;">
          <option value="">Select Session</option>
          <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($s -> id); ?>"><?php echo e($s->session); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
        </div>

        <div class="form-group">
          <label for="semester_id">Select Semester</label>
          <select name="semester_id" id="" class="form-control"style="font-size: 20px;">
          <option value="">Select Semester</option>
          
          <option value="<?php echo e($semester->id); ?>"><?php echo e($semester->semester); ?></option>
     

        </select>
        </div>
        <div class="form-group">
            <label for="section">Select Section</label>
            <select name="section" id="" class="form-control"style="font-size: 20px;">
          <option value="">Select Section</option>
          <?php $__currentLoopData = $section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($sec -> id); ?>"><?php echo e($sec->section); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
        </div>


    
        <br>
        <div class="form-group">
            <center><button type="submit" class="btn btn-primary" style="font-size: 22px;">Submit</button></center>
        </div>
        
    </form>
</div>

<style>
    .container-fluid {
    max-width: 800px; /* Adjust the width as needed */
    margin: 0 auto; /* Center the container horizontally */
    padding: 20px; /* Add padding to the container */
    background-color: rgba(255, 255, 255, 0.9); /* Optional background color */
}

label {
        font-size: 18px; 
    }

</style>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('admin.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/admin/pages/assign_teacher.blade.php ENDPATH**/ ?>