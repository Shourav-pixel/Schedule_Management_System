

<?php $__env->startSection('stud'); ?>
<br>
<hr>
<br>

<div class="container">

<?php if(Session::has('msg')): ?>
    <div class="alert alert-success">
        <strong><?php echo e(Session::get('msg')); ?></strong>
    </div>
<?php endif; ?>

<form action="<?php echo e(url('enroll-store')); ?>" method="post">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="student_id">Your Student ID:</label>
        <input type="number" name="student_id" class="form-control" id="student_id" value="<?php echo e($user['userstudentid']); ?>">
    </div>
    <div class="form-group">
        <label for="session">Select Session:</label>
        <select name="session" class="form-control" id="session" style="font-size: 20px;">
            <option value="">Select Session</option>
            <?php $__currentLoopData = $sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($session->id); ?>" <?php echo e($session->id == old('session') ? 'selected' : ''); ?>>
                    <?php echo e($session->session); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <hr>
    <h2>Course List</h2>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Title</th>
                <th>Course Code</th>
                <th>Course Credit</th>
                <th>Course Type</th>
                <th>Semester</th>
                <th>Section</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($course->id); ?></td>
                    <td><?php echo e($course->course_title); ?></td>
                    <td><?php echo e($course->course_code); ?></td>
                    <td><?php echo e($course->course_credit); ?></td>
                    <td><?php echo e($course->course_type); ?></td>
                    <td><?php echo e($course->semester_id); ?></td>
                    <td>
                        <label for="section">Section</label>
                        <select name="sections[]" class="form-control" style="font-size: 20px;">
                            <option value="">Select Section</option>
                            <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($section->id); ?>"><?php echo e($section->section); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="hidden" name="course_ids[]" value="<?php echo e($course->id); ?>">
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-enroll"
                            data-course-id="<?php echo e($course->id); ?>">Enroll</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Add a hidden input field to store selected course IDs -->
    <input type="hidden" name="selectedCourses" id="selectedCourses">

    <!-- Add a "Save" button to save selected courses -->
    <center>
        <button type="submit" class="btn btn-primary btn-sm" id="saveButton">Save</button>
    </center>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        var selectedCourses = {};

        $('.btn-enroll').click(function () {
            var courseId = $(this).data('course-id');
            var sectionSelect = $(this).closest('tr').find('select[name="sections[]"]');
            var sectionId = sectionSelect.val();

            if (sectionId !== "") {
                if (selectedCourses[sectionId]) {
                    selectedCourses[sectionId].push(courseId);
                } else {
                    selectedCourses[sectionId] = [courseId];
                }

                $(this).text(selectedCourses[sectionId].includes(courseId) ? 'Enrolled' : 'Enroll');
                sectionSelect.val(selectedCourses[sectionId].includes(courseId) ? sectionId : "");
            }

            // Update the hidden input with the selected courses
            $('#selectedCourses').val(JSON.stringify(selectedCourses));
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('student.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software Development\schedule_mangement\resources\views/student/pages/enroll.blade.php ENDPATH**/ ?>