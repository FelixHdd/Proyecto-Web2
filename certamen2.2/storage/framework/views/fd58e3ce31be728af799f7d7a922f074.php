
<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                        <h2>Actualizar Estado Propuesta</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('administradores.update',$propuesta->id)); ?>">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="nombre-proyecto" class="form-label">Proyecto</label>
                                <input class="form-control" type="text" value="<?php echo e($propuesta->documento); ?>" aria-label="readonly input example" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Seleccione la modificacion de estado que desee</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_ER" value="0" <?php if($propuesta->estado=='Esperando Revision'): ?> checked <?php endif; ?>>
                                    <label class="form-check-label" for="est_ER">
                                        Esperando Revision 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_MP" value="1" <?php if($propuesta->estado=='Modificar Propuesta'): ?> checked <?php endif; ?>>
                                    <label class="form-check-label" for="est_MP">
                                        Modificar Propuesta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_R" value="2" <?php if($propuesta->estado=='Rechazado'): ?> checked <?php endif; ?>>
                                    <label class="form-check-label" for="est_R">
                                        Rechazado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_A" value="3" <?php if($propuesta->estado=='Aceptado'): ?> checked <?php endif; ?>>
                                    <label class="form-check-label" for="est_A">
                                        Aceptado
                                    </label>    
                                </div>
                                <div class="mt-3 d-grid gap-2 d-lg-block">
                                    <button class="btn btn-primary" type="submit">Editar Propuesta</button>
                                    <a class="btn btn-danger text-white"href="<?php echo e(route('administradores.propuesta')); ?>">Salir</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/administradores/edit.blade.php ENDPATH**/ ?>