

<?php $__env->startSection('content'); ?>
<style>
  
    .sameline{
        display: inline-block;
    }

</style>
    


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Present Student</h1>
            </div>
            <div class="col align-self-center d-flex justify-content-end">
                <a class="btn btn-success" href="http://127.0.0.1:8000/students/create">Add Student</a>
            </div>
        </div>

        <table class="table table-bordered table-secondary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Adress</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->id); ?></td>
                    <td><?php echo e($student->std_name); ?></td>
                    <td><?php echo e($student->std_roll); ?></td>
                    <td><?php echo e($student->std_adress); ?></td>
                    <td>
                        <span class="sameline">
                            <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-warning">Edit</a>
                        </span>
                        <span class="sameline">
                            <form action="<?php echo e(route('students.destroy', $student)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </span>
                    </td>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Student_CRUD\resources\views/students/index.blade.php ENDPATH**/ ?>