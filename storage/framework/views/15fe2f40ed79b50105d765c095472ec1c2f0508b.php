<?php $__env->startSection('css'); ?>
    ##parent-placeholder-2f84417a9e73cead4d5c99e05daff2a534b30132##
    <link href="<?php echo e(asset('css/publicaciones.css')); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="col-12 col-md-6 offset-md-3 white padding-bottom-50" style="border-right: 1px solid #eeeeee;border-left: 1px solid #eeeeee;">
            <div class="col-12 col-md-10 offset-md-1 no-padding fuelux">
                <?php if(Auth::user()->tieneFuncion($identificador_modulo,'crear',$privilegio_superadministrador)): ?>
                    <button type="button" class="btn btn-lg btn-primary btn-circle btn-nueva-publicacion" data-toggle="modal" data-target="#modal-nueva-publicacion" data-toggle="tooltip" data-placement="left" title="Agregar publicación"><i class="fa fa-plus white-text"></i></button>
                <?php endif; ?>
                <div class="row no-padding" id="publicaciones">
                    <?php if($cant_publicaciones == 0): ?>
                        <div class="alert alert-warning alert-dismissible margin-top-50" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            No existen publicaciones visibles para su cuenta de usuario.
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-12 no-padding hide" id="load-publicaciones"></div>
            </div>
        </div>
    </div>
</div>

<?php if(Auth::user()->tieneFuncion($identificador_modulo,'crear',$privilegio_superadministrador)): ?>
    <div class="modal fade" id="modal-nueva-publicacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Nueva publicaciòn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <?php echo $__env->make('layouts.alertas',["id_contenedor"=>"alertas-nueva-publicacion"], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::open(['id'=>'form-nueva-publicacion','enctype'=>'multipart/form-data']); ?>


                    <?php if(Auth::user()->tieneFuncion($identificador_modulo,'uploads',$privilegio_superadministrador)): ?>
                        <div class="card">
                            <div class="card-header">Imagenes</div>
                            <div class="card-body">
                                <div id="imagenes-publicacion">
                                    <div class="form-group">
                                        <?php echo Form::label('imagen_principal','Imagen principal'); ?>

                                        <?php echo Form::file('imagen_principal',null,['id'=>'imagen_principal']); ?>

                                    </div>
                                </div>

                                <a href="#!" id="btn-nueva-imagen-publicacion" class="btn btn-primary btn-circle right" style="margin-top: -40px;" data-toggle="tooltip" data-placement="left" title="Agregar imagen"><i class="fa fa-plus white-text"></i></a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="card">
                        <div class="card-header">Publicación</div>
                        <div class="card-body">
                            <div class="md-form">
                                <?php echo Form::textarea('publicacion',null,['id'=>'texto_publicacion','class'=>'md-textarea','placeholder'=>'Ingrese el texto que aparecerá en la publicación','rows'=>'3']); ?>

                            </div>
                        </div>
                    </div>
                <?php echo Form::close(); ?>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" id="btn-guardar-nueva-publicacion">Guardar</button>
            </div>
        </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
    <script src="<?php echo e(asset('js/publicacion/publicacion.js')); ?>"></script>
    <script>
        $(function () {
            <?php if($cant_publicaciones > 0): ?>
                cargarPublicacionesAnteriores();
            <?php endif; ?>
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>