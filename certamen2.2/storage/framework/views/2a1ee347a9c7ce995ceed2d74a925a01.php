<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Eliminar Comentarios</h2>
            </div>
            <div class="card-body">
                <form action="">
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Seleccione Profesor</option>
                        <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="1"><?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="row mt-3">
                        <div class="col">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleccione Alumno</option>
                            <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="1"><?php echo e($estudiante->nombre); ?> <?php echo e($estudiante->apellido); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                        <div class="col">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleccione Propuesta</option>
                            <?php $__currentLoopData = $propuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $propuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="1"><?php echo e($propuesta->documento); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-primary" style="float: left;" type="submit">
                            Eliminar Comentario
                            </button>
                        </div>
                <form>
            <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/profesores/destroy.blade.php ENDPATH**/ ?>