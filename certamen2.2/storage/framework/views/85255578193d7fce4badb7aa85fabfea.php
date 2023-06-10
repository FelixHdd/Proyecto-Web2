<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="container p-5">
        <h1 class="text-center text-white">Vista de Profesor</h1>
      <div class="row">
          <div class="col-12 col-md-6 offset-md-3 d-flex">
              <div class="card">
                <h1 class="card-header bg-primary text-white">Acceso Propuestas</h1>
                <div class="card-body d-flex flex-column">
                    <p class="card-text flex-fill ">
                    Bienvenido, profesor! En esta sección exclusiva para ti, podrás descargar los archivos de las propuestas de informes para revisarlas detalladamente. Realiza comentarios constructivos, brinda retroalimentación invaluable y elimina comentarios según sea necesario.
                    </p>
                    <div class="row d-flex align-items-center">
                        <div class="col text-start " >
                            <a href="<?php echo e(route('profesores.showp')); ?>" class="btn btn-secondary">
                                Acceso Propuestas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/profesores/index.blade.php ENDPATH**/ ?>