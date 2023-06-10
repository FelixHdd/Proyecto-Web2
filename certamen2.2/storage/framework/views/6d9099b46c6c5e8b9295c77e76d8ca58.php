<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Comentario Propuesta</h2>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="nombre" class="form-label">Profesor</label>
                                <input class="form-control" type="text"  value="<?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?>" aria-label="readonly input example" readonly>
                            </div>
                            <div class="col">

                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                <input class="form-control" type="text"  value="<?php echo e($propuesta_c->fecha); ?>" aria-label="readonly input example" readonly>
                            </div>
                        </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comenterio</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"readonly><?php echo e($propuesta_c->comentario); ?></textarea >
                      </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/estudiantes/list.blade.php ENDPATH**/ ?>