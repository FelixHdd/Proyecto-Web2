<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Eliminar Comentarios</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('profesores.destroy', $propuesta->id,$profesor->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Profesor</label>
                            <input class="form-control" type="text"  value="<?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?>" aria-label="" readonly>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlTextarea1" class="form-label">Propuesta</label>
                            <input class="form-control" type="text"  value="<?php echo e($propuesta->documento); ?>" aria-label="" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?php echo e($propuestaCom->comentario); ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3"><button class="btn btn-primary" style="float: left;" type="submit">
                            Eliminar Comentario
                            </button></div>
                    </div>
                <form>
            <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/profesores/datos_d.blade.php ENDPATH**/ ?>