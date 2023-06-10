<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/colores.scss"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/colores.min.css')); ?>">
    <title>Inicio</title>
</head>
<body style="background: linear-gradient(to right, #252d80 50%, #41d7eb 100%);">
    <!-- NavBar -->
    <div class="container-flex">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid" >
              <a class="navbar-brand text-white" href="<?php echo e(route('home.index')); ?>" >Taller Sistemas de Informacion</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item " >
                    <a class="nav-link active text-white" aria-current="page" href="<?php echo e(route('home.index')); ?>" >Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?php if(Route::current()->getName()=='estudiante.index'): ?> active <?php endif; ?> dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Estudiante
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?php echo e(route('estudiantes.create')); ?>">Ingresar Propuesta</a></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('estudiantes.show')); ?>">Estado Propuesta</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('estudiantes.index')); ?>">Vista Estudiante</a></li>

                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?php if(Route::current()->getName()=='profesor.index'): ?> active <?php endif; ?> dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Profesor
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?php echo e(route('profesores.showp')); ?>">Acceso Propuestas</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('profesores.index')); ?>">Vista Profesor</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?php if(Route::current()->getName()=='administrador.index'): ?> active <?php endif; ?> dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Administrador
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?php echo e(route('administradores.profesores')); ?>">Profesores</a></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('administradores.estudiantes')); ?>">Estudiantes</a></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('administradores.propuesta')); ?>">Estado Propuesta</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('administradores.index')); ?>">Vista Administrador</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <?php echo $__env->yieldContent('contenidoPrincipal'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\Sackert\Documents\GitHub\Proyecto-Web2\certamen2.2\resources\views/templates/master.blade.php ENDPATH**/ ?>