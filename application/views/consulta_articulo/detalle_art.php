<?php
//print_r($articulo); die;
?>
<div class="span7">
    <div class="widget green">
        <div class="widget-title">
            <h4><i class="icon-reorder"></i> Datos de Articulo </h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>                                
            </span>
        </div>
        <div class="widget-body">
            <form method="post" action="consulta_articulos" id="form_consulta">
                <div class="row-fluid">
                    <div class="span5">
                        <div class="control-group">
                            <label class="control-label">Codigo Fenix</label>
                            <h2><?php echo $articulo['codigo_fenix'];?></h2>
                            <!--
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" placeholder="Articulo" name="articulo" value="<?php echo $articulo['codigo_fenix'];?>">
                            </div>
                        -->
                        </div>
                    </div>
                    <div class="span5">
                        <div class="control-group">
                            <label class="control-label">Codigo OEM</label>
                            <h3><?php echo $articulo['codigo_oem'];?></h3>
                            <!--
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" placeholder="OEM" name="oem" value="<?php echo $articulo['codigo_oem'];?>">
                            </div>-->
                        </div>
                    </div>
                    <div class="span2">
                        <div class="control-group">
                            <label class="control-label">Precio Lista</label>
                            <h3><?php echo $articulo['precio_lista'];?></h3>
                            <!--
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" placeholder="OEM" name="oem" value="<?php echo $articulo['codigo_oem'];?>">
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span10">
                        <h3><?php echo $articulo['descripcion'];?></h3>
                        <!--<div class="control-group">
                            <div class="controls controls-row">
                                <input type="text" class="input-block-level" placeholder="Descripcion" name="descripcion" value="<?php echo $articulo['descripcion'];?>">
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span3">
                        <label class="control-label">Proveedor</label>
                        <?php 
                        $sql_proveedor = "select nombre_proveedor from proveedores where id = " . $articulo['rubro'];
                        $res = mysql_query($sql_proveedor);
                        $row = mysql_fetch_array($res);
                        echo '<h3>' . $row['nombre_proveedor'] . '</h3>';
                        ?>
                    </div>
                    <div class="span2">
                        <label class="control-label">Reemplazo</label>
                        <h2>11088</h2>
                    </div>
                    <div class="span2">
                        <label class="control-label">Rubro</label>
                        <?php 
                        $sql_rubro = "select nombre from rubros where id = " . $articulo['rubro'];
                        $res = mysql_query($sql_rubro);
                        $row = mysql_fetch_array($res);
                        echo '<h3>' . $row['nombre'] . '</h3>';
                        ?>
                    </div>
                    <div class="span2">
                        <label class="control-label">Marca</label>
                        <?php 
                        $sql_marca = "select nombre from marcas where id = " . $articulo['marca'];
                        $res = mysql_query($sql_marca);
                        @$row = mysql_fetch_array($res);
                        $marca = $row['nombre'];
                        if ($marca == '')
                            echo '<h3>' . $marca . '</h3>';
                        ?>
                    </div>
                    <div class="span2">
                        <label class="control-label">Utilidad</label>
                        <h3><?php echo $articulo['utilidad'];?>%</h3>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>