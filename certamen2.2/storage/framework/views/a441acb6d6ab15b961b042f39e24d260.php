<?php $__env->startSection('contenidoPrincipal'); ?>

<div class="container">
  <div class="row pt-4">
    <div class="col-7">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h2>Listado de Estudiantes</h2>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="align-middle"><?php echo e($index+1); ?></td>
                  <td class="align-middle"><?php echo e($estudiante->rut); ?></td>
                  <td class="align-middle"><?php echo e($estudiante->nombre); ?></td>
                  <td class="align-middle"><?php echo e($estudiante->apellido); ?></td>
                  <td class="align-middle"><?php echo e($estudiante->email); ?></td>
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
          <h2>Agregar Estudiante</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="<?php echo e(route('estudiantes.store')); ?>">
          <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-4">
                <div class="mb-3">
                  <label for="rut" class="form-label">Rut</label>
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="xxxxxxxx-x">
                </div>
              </div>
              <div class="col-8">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com">
                </div>
              </div>
            </div>
                  
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control"  id="nombre" name="nombre" >
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control"  id="apellido" name="apellido" >
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <button class="btn btn-primary mb-3" type="submit">
                Agregar Estudiante
              </button>
                </div>
                <div class="col-6">
                <button class="btn btn-primary" type="reset">
                Cancelar
              </button>
                </div>
              </div>
              
              
            </div>
                
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/administradores/estudiantes.blade.php ENDPATH**/ ?>