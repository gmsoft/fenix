<?php $this->load->view('administrador/dashboard/header'); ?>
<!-- BEGIN PAGE -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <?php $this->load->view('administrador/dashboard/sidebar'); ?>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->  
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        
                        Consulta de Lista VW
                    </h3>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>

            <div class="row-fluid">
                <?php $this->load->view('consulta_articulo/campos_filtro_vw.php'); ?>    
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget red">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Listado de Articulos</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <!--<a href="javascript:;" class="icon-remove"></a>-->
                            </span>
                        </div>
                        <div class="widget-body">
                            <div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="table table-striped table-bordered dataTable" id="sample_1" aria-describedby="sample_1_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 13px;" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes">
                                            </th>
                                            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="OEM" style="width: 175px;">
                                                OEM
                                            </th>
                                            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Descripcion" style="width: 430px;">
                                                Descripcion
                                            </th>
                                            
                                            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Prov" style="width: 150px;">
                                                Precio Publico
                                            </th>
                                            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Prov" style="width: 150px;">
                                                Reemplazo
                                            </th>
                                            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Prov" style="width: 150px;">
                                                Cod.Dto / %
                                            </th>                                            
                                        </tr>
                                    </thead>

                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php
                                        foreach($articulo as $campo => $valor){
                                            $codigo_dto = $valor['cod_dto'];
                                            $precio_publico = $valor['precio_publico'];
                                            $precio_iva = $valor['precio_iva'];

                                            $precio_iva = ($precio_iva * 1) / 100;
                                            $margen = 1.6666;
                                            
                                            //Precio Mas IVA
                                            $precio_venta = $precio_iva; 
                                            
                                            //Porcentaje de DTO
                                            /*
                                            $sql_dto = "select d.`porcentaje_dto` from proveedor_dto_vw d where d.`id` IN(
                                                        select id from proveedores p where p.`codigo_proveedor` in(
                                                        select proveedor FROM lista_fenix WHERE codigo_oem = '" . $valor['original'] . "'))";*/
                                            
                                            //consulta la tabla de dtos del proveedor 5 (001 => FENIX)
                                            $sql_dto = "select porcentaje_dto from proveedor_dto_vw where proveedor_id = 5 and codigo = '$codigo_dto'";
                                            $res_dto = mysql_query($sql_dto);
                                            $row_dto = mysql_fetch_array($res_dto);
                                            $porc_dto = $row_dto['porcentaje_dto'];
                                            
                                           
                                            $precio_venta = $precio_venta - (($precio_venta * $porc_dto) / 100);

                                            //Margen de Ganancia    
                                            $precio_venta = $precio_venta * $margen;
                                            
                                            //$precio_venta = $precio_iva;
                                            $precio_venta = number_format($precio_venta, 2, '.', ',');

                                            ?>
                                            <tr class="gradeX odd">
                                                <td class=" sorting_1"><input type="checkbox" class="checkboxes" value="1"></td>
                                                <td class=" ">
                                                    <a href="consulta_articulos?oem_vw=<?php echo $valor['original']?>"><?php echo $valor['original'];?></a>
                                                </td>
                                                <td class=" "><a href="consulta_articulos?oem_vw=<?php echo $valor['original']?>"><?php echo $valor['descripcion'];?></a></td>
                                                <td class=" " style="text-align:right"><?php echo $precio_venta;?></td>
                                                <td class=" "><?php echo $valor['reemplazo'];?></td>
                                                <td class=" " style="text-align:center"><?php echo $codigo_dto . ' / ' . $porc_dto . '%';?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

        </div>
        <!-- END PAGE -->  
    </div>


    <!-- END PAGE -->
    <?php $this->load->view('administrador/dashboard/footer'); ?>

    <script>
        function consultarArt() {
            //$('#detalles-articulo').attr('style','display:bock');
            $('#form_consulta').submit();
        }

        $('input[type=text]').keypress(function(e) {
            if (e.which == 13) {
                $('#form_consulta').submit();
            }
        });
    </script>
