

<?php $__env->startSection('teach'); ?>



<div class="container-fluid">
    <center><h3>Session</h3></center>
<div class="form-group">
    <label for="">Select Session</label>
    <select name="session" id="session" class="form-control">
        <option value="">Select Session</option>
        <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($t->id); ?>"><?php echo e($t->session); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="">Select Semester</label>
    <select name="semester" id="semester" class="form-control">
        <option value="">Select Semester</option>
        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($e->id); ?>"><?php echo e($e->semester); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label for="">Select Section</label>
    <select name="section" id="section" class="form-control">
        <option value="">Select Section</option>
        <?php $__currentLoopData = $section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($sec->id); ?>"><?php echo e($sec->section); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<br>
<br>
<div class="form-group">
   <center> <button id="showRoutineBtn" class="btn btn-primary btn-sm">Show Routine</button></center>
</div>
</div>
<br>
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

<script>
    document.getElementById('showRoutineBtn').addEventListener('click', function() {
        var sessionSelect = document.getElementById('session');
        var typeSelect = document.getElementById('semester');
        var sectionSelect = document.getElementById('section');

        var selectedSession = sessionSelect.value;
        var selectedType = typeSelect.value; 
        var selectedSection = sectionSelect.value;

        if (selectedSession && selectedType && selectedSection) {
            var url = "<?php echo e(url('routine-show/:session/:semester/:section')); ?>";
            url = url.replace(':session', selectedSession);
            url = url.replace(':semester', selectedType);
            url = url.replace(':section', selectedSection);

            // Redirect to the dynamically constructed URL
            window.location.href = url;
        } else {
            // Handle the case where the user hasn't selected both session and type
            alert('Please select both session and Semester');
        }
    });
</script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('Teacher.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/Teacher/pages/Class/selectSession.blade.php ENDPATH**/ ?>