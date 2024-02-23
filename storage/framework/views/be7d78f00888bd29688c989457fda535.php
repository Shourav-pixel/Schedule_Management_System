

<?php $__env->startSection('stud'); ?>


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
    <label for="">Select Exam Type</label>
    <select name="type" id="type" class="form-control">
        <option value="">Select Exam Type</option>
        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($e->id); ?>"><?php echo e($e->type); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<br>
<br>
<div class="form-group">
   <center> <button id="showRoutineBtn" class="btn btn-primary btn-sm">Show Routine</button></center>
</div>
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

<script>
    document.getElementById('showRoutineBtn').addEventListener('click', function() {
        var sessionSelect = document.getElementById('session');
        var typeSelect = document.getElementById('type');

        var selectedSession = sessionSelect.value;
        var selectedType = typeSelect.value;

        if (selectedSession && selectedType) {
            var url = "<?php echo e(url('my-exam/:session/:type')); ?>";
            url = url.replace(':session', selectedSession);
            url = url.replace(':type', selectedType);

            // Redirect to the dynamically constructed URL
            window.location.href = url;
        } else {
            // Handle the case where the user hasn't selected both session and type
            alert('Please select both session and exam type');
        }
    });
</script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/student/pages/MyRoutines/Exam/examsession.blade.php ENDPATH**/ ?>