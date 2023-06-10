<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="container p-5">
        <h1 class="text-center text-white">Vista de Estudiante</h1>
      <div class="row">
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Subir Propuesta</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col text-start " >
                              <a href="<?php echo e(route('estudiantes.create')); ?>" class="btn btn-secondary">
                                  Subir Propuesta
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Estado</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col" >
                              <a href="<?php echo e(route('estudiantes.show')); ?>" class=" btn btn-secondary">
                                  Estado Propuesta
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/estudiantes/index.blade.php ENDPATH**/ ?>