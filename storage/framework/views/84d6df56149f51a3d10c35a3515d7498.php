

<?php $__env->startSection('teach'); ?>


<div class="container-fluid">
    <center><h3>Edit Profile</h3></center>
            <?php if(Session::has('msg')): ?>
            <div class="alert alert-success">
  Updated Successfully!!
  
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





    <form method="post" action="<?php echo e(url('edit-profile-store')); ?>">

        <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

        <div class="form-group">
            <label for="course_title">Teacher Name:</label>
            <input type="text" name="teacher_name" class="form-control" id="course_title" value="<?php echo e($teachers->name); ?>"style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_code">Teacher ID:</label>
            <input type="text" name="teacher_id" class="form-control" id="teacher_id" value="<?php echo e($teachers->teacher_id); ?>" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_code">Acro Name:</label>
            <input type="text" name="acro_name" class="form-control" id="acroname" value="<?php echo e($teachers->acro_name); ?>" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_credit">Email:</label>
            <input type="text" name="email" class="form-control" value="<?php echo e($teachers->email); ?>" id="email" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_credit">Designation:</label>
            <input type="text" name="designation" class="form-control" value="<?php echo e($teachers->designation); ?>" id="email" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_credit">Phone Number:</label>
            <input type="num" name="number" class="form-control" value="<?php echo e($teachers->phone_number); ?>" id="phone_number" style="font-size: 22px;">
        </div>
        <br>
        <div class="form-group">
            <center><button type="submit" class="btn btn-primary" style="font-size: 22px;">Update</button></center>
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
<?php echo $__env->make('Teacher.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/Teacher/pages/edit-profile.blade.php ENDPATH**/ ?>