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
                        <button class="btn btn-danger" onclick="window.history.back()"><i class="icon-arrow-left"></i></button>
                        Consulta de Articulos
                    </h3>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>

            <div class="row-fluid">
                <?php $this->load->view('consulta_articulo/detalle_art'); ?>

                <?php
                if (isset($articulo)) {
                    if (count($articulo) > 0) {
                        ?>

                        <div class="span2"  id="foto-articulo">
                            <div class="widget red">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i> Foto</h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <img src="<?php echo base_url() . 'assets/uploads/files/fotos_articulos/' . ($articulo['imagen']==''?'artsinfoto.jpg':$articulo['imagen']);?>" >
                                </div>
                            </div>
                        </div>
                         
                        <div class="span6"  id="detalles-articulo">
                            <div class="widget red">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i> Detalles del Articulo</h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                    </span>
                                </div>

                                <div class="widget-body">
                                    <div class="bs-docs-example">
                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="active"><a data-toggle="tab" href="#comparativo">Comparativo</a></li>
                                            <li class=""><a data-toggle="tab" href="#compras">Compras</a></li>
                                            <li class=""><a data-toggle="tab" href="#stock">Stock</a></li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div id="comparativo" class="tab-pane fade active in">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>PROVEEDOR</th>
                                                            <th>CODIGO</th>
                                                            <th>DESCRIPCION</th>                                                            
                                                            <th>PRECIO</th>
                                                            <th>MARCA NRO</th>
                                                            <th>MARCA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql_vw = "SELECT original, precio_publico, descripcion
                                                        FROM lista_vw 
                                                        WHERE original = '" . $articulo['codigo_oem'] . "'";    
                                                        $res = mysql_query($sql_vw);
                                                        while ($row = mysql_fetch_array($res)) {
                                                            $precio_publico = $row['precio_publico'];
                                                            $precio_publico = ($precio_publico * 1) / 100;
                                                            $precio_publico = number_format($precio_publico, 2 ,'.', ',');
                                                        ?>
                                                            <tr>
                                                                <td>VW</td>
                                                                <td><?php echo $row['original'];?></td>
                                                                <td><?php echo $row['descripcion'];?></td>
                                                                <td><?php echo $precio_publico;?></td>
                                                            </tr>
                                                        <?php    
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="compras" class="tab-pane fade">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>CODIGO</th>
                                                            <th>PROVEEDOR</th>
                                                            <th>PRECIO</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="stock" class="tab-pane fade">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Sucursal</th>
                                                            <th>Ubicacion</th>
                                                            <th>Stock</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql_stock = "SELECT cantidad, c.`nombre`,ubicacion FROM stock s INNER JOIN sucursales c ON c.`id` = s.`sucursal_id` WHERE articulo_fenix = '" . $articulo['codigo_fenix'] . "'";    
                                                        $res = mysql_query($sql_stock);
                                                        while ($row = mysql_fetch_array($res)) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $row['nombre'];?></td>
                                                                <td><?php echo $row['ubicacion'];?></td>
                                                                <td><?php echo $row['cantidad'];?></td>
                                                            </tr>
                                                        <?php    
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        


                        <?php
                    }
                }
                ?>

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
