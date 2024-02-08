
<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>Create Student Info </h1>
    </div>

    <div class="container">
        <form action="<?php echo e(route('students.store')); ?>" method="POST"> 
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>

            <div>
                <label for="">Name:</label>
                <input type="text" class="form-control" name="std_name" placeholder="Student name">
            </div> <br>

            <div>
                <label for="">Roll:</label>
                <input type="number" class="form-control" name="std_roll" placeholder="Roll">
            </div> <br>

            <div>
                <label for="">Adress:</label>
                <input type="text" class="form-control" name="std_adress" placeholder="Adress">
            </div> <br>

            <div>
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Student_CRUD\resources\views/students/create.blade.php ENDPATH**/ ?>