 
<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container p-5"> 
      <div class="row">
          <div class="col-12 col-md-4 d-flex  mb-3">
              <div class="card">
              <h1 class="card-header bg-primary text-white" href="">Estudiante</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">  
                       Vista de Estudiantes
                       Aqui podras hacer lo siguiente:
                       Subir Propuestas
                       Revisar los estados de tu propuesta
                       Revisar comentarios hechos por profesores
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col " >
                              <a href="<?php echo e(route('estudiantes.index')); ?>" class="btn btn-secondary">
                                  Subir Propuesta, Estado Propuesta y Retroalimentacion
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex  mb-3">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Profesor</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center text-center">
                          <div class="col" >
                              <a href="<?php echo e(route('profesores.index')); ?>" class=" btn btn-secondary">
                                  Gestionar Propuestas
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex mb-3">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Administrador</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center text-center">
                          <div class="col" >
                              <a href="<?php echo e(route('administradores.index')); ?>" class="btn btn-secondary">
                                  Gestionar Alumnos, Profesores y Propuestas
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/home/index.blade.php ENDPATH**/ ?>