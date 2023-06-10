<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Subir Propuesta</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('propuestas.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <select name="rut" class="form-select mb-3" aria-label="Default select example">
                        <option selected>Seleccione su Nombre</option>
                        <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($estudiante->rut); ?>"><?php echo e($estudiante->nombre); ?> <?php echo e($estudiante->apellido); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" name="pdf" id="formFile" >
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">
                            Subir Propuesta
                        </button>
                        <button class="btn btn-secondary" type="reset">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/estudiantes/create.blade.php ENDPATH**/ ?>