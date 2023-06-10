<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Ingresar nuevo Comentario</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('profesores.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <select name="id" class="form-select"  aria-label="Default select example">
                        <option selected>Seleccione Profesor</option>
                        <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($profesor->id); ?>"><?php echo e($profesor->nombre." ".$profesor->apellido); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Alumno</label>
                                <input class="form-control" type="text"  value="<?php echo e($estudiante->nombre); ?> <?php echo e($estudiante->apellido); ?>" aria-label="readonly input example" readonly>

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nombre-proyecto" class="form-label">Proyecto</label>
                                <input type="text" class="form-control"  id="nombre-proyecto" value="<?php echo e($propuesta->documento); ?>">
                                <input type="text" class="form-control" name="propuesta_id" id="nombre-proyecto" value="<?php echo e($propuesta->id); ?>" hidden>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
                        </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-primary" type="submit" style="float: left;">
                            Guardar Comentario
                            </button>
                        </div>
                <form>
            <div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/profesores/create.blade.php ENDPATH**/ ?>