
<?php $__env->startSection('abc'); ?>
<br>
<br>
<div class="container-fluid">
    <center><h3>Create Course</h3></center>
    <form method="post" action="<?php echo e(url('addcourse-store')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="course_title">Course Title:</label>
            <input type="text" name="course_title" class="form-control" id="course_title"   style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_code">Course Code:</label>
            <input type="text" name="course_code" class="form-control" id="course_code" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_code">Course AcroName:</label>
            <input type="text" name="acro_name" class="form-control" id="course_code" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_credit">Credit:</label>
            <input type="text" name="course_credit" class="form-control" id="course_credit" style="font-size: 22px;">
        </div>
        <div class="form-group">
            <label for="course_type">Course Type</label>
            <select name="course_type" class="form-control" id="course_type" style="font-size: 20px;">
                <option value="">Select Type</option>
                <option value="Lab">LAB</option>
                <option value="Theory">Theory</option>
            </select>
        </div>

        <div class="form-group">
        <label for="">Select Semester</label>
                    <select name="semester" id="semester"class="form-control">Teacher Id
                    <option value="">Select Semester</option>
                    <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($t->id); ?>"><?php echo e($t->semester); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
        </div>

       
        <br>
        <div class="form-group">
            <center><button type="submit" class="btn btn-primary" style="font-size: 22px;">Save</button></center>
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
        font-size: 18px; /* Adjust the font size as needed */
    }

</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/admin/pages/addcourse.blade.php ENDPATH**/ ?>