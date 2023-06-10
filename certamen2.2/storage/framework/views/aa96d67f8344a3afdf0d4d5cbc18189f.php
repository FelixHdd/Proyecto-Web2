<?php
$estados = [0 => 'Esperando Revision',1=>'Modificar Propuesta',2=>'Rechazado',3=>'Aceptado'];
?>

<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Estado Propuesta</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Rut</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Comentario</th>

                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <?php $__currentLoopData = $propuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$propuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th scope="row"><?php echo e($index + 1); ?></th>
                          <td><?php echo e($propuesta->estudiante_rut); ?></td>
                          <td><?php echo e($propuesta->estudiante->nombre); ?></td>
                          <td><?php echo e($propuesta->estudiante->apellido); ?></td>
                          <td><?php echo e($estados[$propuesta->estado]); ?></td>
                          <td><a href="" class="btn btn-primary ">Agregar Comentario</a></td>

                        </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/profesores/show.blade.php ENDPATH**/ ?>