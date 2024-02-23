
<?php $__env->startSection('abc'); ?>
<br>
<br>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
  <h2>Create Routine</h2>

  <?php if(Session::has('msg')): ?>
        <div class="alert alert-success">
      <strong><?php echo e(Session::get('msg')); ?></strong>
      </div>
    <?php endif; ?>

  <form method="post" action="<?php echo e(url('routine-store')); ?>">
  <?php echo e(csrf_field()); ?>

  <div class="card">
    <div class="card-header">Class Timetable</div>
    <div class="card-body">
    
      
        <div class="form-row">
        <div class="col-md-3">
            <label for="">Select Session:</label>
            <select name="session" class="form-control" id="session" style="font-size: 20px;">
              <option value="">Select Session</option>
              <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($session -> id); ?>"><?php echo e($session->session); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          </div>

          <div class="col-md-3">
            <label for="">Select Semester:</label>
            <select name="semester" class="form-control getSemester" id="semester" style="font-size: 20px;">
              <option value="">Select Semster</option>
              <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($s -> id); ?>"><?php echo e($s->semester); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          </div>
          <div class="col-md-3">
            <label for="">Select Course:</label>
            <select name="course" class="form-control getCourse" id="course" style="font-size: 20px;">
              <option value="">Select Course</option>
          </select>
          </div>

          <div class="col-md-3">
            <label for="">Select Teacher:</label>
            <select name="teacher" class="form-control getTeacher" id="teacher" style="font-size: 20px;">
              <option value="">Select Teacher</option>
             

          </select>
          </div>
          <div class="col-md-3">
            
            <label for="section">Section</label>
            <select name="section" class="form-control" id="semester" style="font-size: 20px;">
              <option value="">Select Section</option>
              <?php $__currentLoopData = $section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sec -> id); ?>"><?php echo e($sec->section); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          </div>
          
          
        </div>

        <br>
        <hr>


          
    

  <div class="card-body p-0">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Week</th>
          <th>Start Time</th>
          <th>End Time</th>
          <th>Room Number</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $i = 1;
        ?>
        <?php $__currentLoopData = $day; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
         <th>
            <input type="hidden" name="day[<?php echo e($i); ?>][week_id]" value= "<?php echo e($d->id); ?>">
            <?php echo e($d->day); ?>

        </th>
         <td>
         <input type="time" name="day[<?php echo e($i); ?>][start_time]" class="form-control">
         </td> 
         <td>
          <input type="time" name="day[<?php echo e($i); ?>][end_time]" class="form-control">
          </td> 
          <td>
            <input type="text" name ="day[<?php echo e($i); ?>][room]" class="form-control">
            </td> 
        </tr>
        <?php
        $i++;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <div style = "text-align: center; padding:20px;" >
        <button class = "btn btn-primary">Submit</button>
    </div>
  </div>
</div>


        
        
      </form>
    </div> 
  </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('.getSemester').change(function(){
    var semester_id = $(this).val();
    $.ajax({
        url: "<?php echo e(url('get_course')); ?>",
        type: 'POST',
        data:{
            "_token":"<?php echo e(csrf_token()); ?>",
            semester_id:semester_id,
        },
        dataType:"json",
        success:function(response){
            $('.getCourse').html(response.html)

        },
    });
});

</script>

<script>

  //for only one teacher
// $('.getCourse').change(function() {
//     var course_id = $(this).val();
//     $.ajax({
//         url: "<?php echo e(url('get_teacher')); ?>",
//         type: 'POST',
//         data: {
//             "_token": "<?php echo e(csrf_token()); ?>",
//             course_id: course_id,
//         },
//         dataType: "json",
//         success: function(response) {
//             $('.getTeacher').html('<option value="' + response.teacherName + '">' + response.teacherName + '</option>');
//         },
//     }); 
// });

//end




$('.getCourse').change(function() {
    var course_id = $(this).val();
    $.ajax({
        url: "<?php echo e(url('get_teacher')); ?>",
        type: 'POST',
        data: {
            "_token": "<?php echo e(csrf_token()); ?>",
            course_id: course_id,
        },
        dataType: "json",
        success: function(response) {
            var select = $('.getTeacher');
            select.empty(); // Clear existing options

            $.each(response.teacherName, function (index, name) {
                select.append('<option value="' + name + '">' + name + '</option>');
            });
        },
    });
});




</script>



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
<?php echo $__env->make('admin.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/admin/pages/Routine/create.blade.php ENDPATH**/ ?>