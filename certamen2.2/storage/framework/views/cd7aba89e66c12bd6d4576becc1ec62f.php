<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container-flex p-5">
      <div class="row">
        <div class="col-7">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h2>Listado de Profesores</h2>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo Electronico</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="align-middle"><?php echo e($index+1); ?></td>
                      <td class="align-middle"><?php echo e($profesor->nombre); ?></td>
                      <td class="align-middle"><?php echo e($profesor->apellido); ?></td>
                      <td class="align-middle"><?php echo e($profesor->email); ?></td>

                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h2>Agregar Profesor</h2>
            </div>
            <div class="card-body">
              <form method="POST" action="<?php echo e(route('administradores.profesoresstore')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo Electronico</label>
                  <input type="mail" class="form-control" id="correo" name="email" placeholder="ejemplo@usm.cl">
                </div>

                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control"  id="nombre" name="nombre" >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control"  id="apellido" name="apellido" >
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <button class="btn btn-primary" type="submit">
                      Agregar Profesor
                    </button>
                  </div>
                  <div class="col">
                    <button class="btn btn-primary" type="reset">
                      Cancelar
                     </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/administradores/profesores.blade.php ENDPATH**/ ?>