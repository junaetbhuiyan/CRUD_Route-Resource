

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create Student Info </h1>
    </div>

    <div class="container">
        <form method="POST" action="<?php echo e(route('students.update', $student->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>


            <div>
                <label for="">Name:</label>
                <input type="text" class="form-control" name="std_name" placeholder="Student name"
                    value="<?php echo e($student->std_name); ?>">
            </div> <br>

            <div>
                <label for="">Roll:</label>
                <input type="number" class="form-control" name="std_roll" placeholder="Roll"
                    value="<?php echo e($student->std_roll); ?>">
            </div> <br>

            <div>
                <label for="">Adress:</label>
                <input type="text" class="form-control" name="std_adress" placeholder="Adress"
                    value="<?php echo e($student->std_adress); ?>">
            </div> <br>

            <div>
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Student_CRUD\resources\views/students/edit.blade.php ENDPATH**/ ?>