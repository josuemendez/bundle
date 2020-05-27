<?php include ('inc/header.php'); ?>
<?php require_once 'db/dbcon.php';?>
<?php $loteLote = $_POST['seleccionarLote']; ?>
<?php 
$resultados = mysqli_query($conexion,"SELECT clienteLote,nombreCliente,nombreMeses,loteLote,idMeses,mesesLote,MAX(mesesPagados) AS mesesPagados 
FROM $tabla_lotes 
INNER JOIN $tabla_clientes ON lotes.clienteLote = clientes.idCliente 
INNER JOIN $tabla_pagos ON lotes.loteLote = pagos.lotePago
INNER JOIN $tabla_meses ON pagos.mesesPago = meses.idMeses
WHERE loteLote = '$loteLote'");
  while($consulta = mysqli_fetch_array($resultados))
  {
    $clientePago = $consulta['clienteLote'];
    $nombreClientePago = $consulta['nombreCliente'];
    $lotePago = $consulta['loteLote'];
    $mesesPago = $consulta['mesesLote'];
    $idMeses = $consulta['idMeses'];
    $nombreMeses = $consulta['nombreMeses'];
    $mesesPagados = $consulta['mesesPagados'];
    $mesesPagados = $mesesPagados + 1;
  }
?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Buttons Examples</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Datatables </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Datatables.net </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Extensions </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Buttons </a>
                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip"
                        title="Reports" data-placement="top"><i class="flaticon2-writing"></i></a>
                    <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip"
                        title="Calendar" data-placement="top"><i class="flaticon2-hourglass-1"></i></a>
                    <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions"
                        data-placement="top">
                        <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown"
                            data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon2-add-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="kt-nav kt-nav--active-bg" role="tablist">
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-psd"></i>
                                        <span class="kt-nav__link-text">Document</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" role="tab">
                                        <i class="kt-nav__link-icon flaticon2-supermarket"></i>
                                        <span class="kt-nav__link-text">Message</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
                                        <span class="kt-nav__link-text">Product</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" role="tab">
                                        <i class="kt-nav__link-icon flaticon2-chart2"></i>
                                        <span class="kt-nav__link-text">Report</span>
                                        <span class="kt-nav__link-badge">
                                            <span
                                                class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">pdf</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-sms"></i>
                                        <span class="kt-nav__link-text">Post</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                        <span class="kt-nav__link-text">Customer</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions"
                        data-placement="top">
                        <a href="#" class="btn btn btn-label btn-label-brand btn-bold" data-toggle="dropdown"
                            data-offset="0 0" aria-haspopup="true" aria-expanded="false">
                            Reports
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav kt-nav--active-bg" id="kt_nav_1" role="tablist">
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-psd"></i>
                                        <span class="kt-nav__link-text">Products</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" role="tab" id="kt_nav_link_1">
                                        <i class="kt-nav__link-icon flaticon2-supermarket"></i>
                                        <span class="kt-nav__link-text">Customers</span>
                                        <span class="kt-nav__link-badge">
                                            <span
                                                class="kt-badge kt-badge--success kt-badge--inline kt-badge--rounded">6</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
                                        <span class="kt-nav__link-text">Orders</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" role="tab" id="kt_nav_link_2">
                                        <i class="kt-nav__link-icon flaticon2-chart2"></i>
                                        <span class="kt-nav__link-text">Console</span>
                                        <span class="kt-nav__link-badge">
                                            <span
                                                class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">new</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-sms"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Seleccione Lote <? echo $mesesPagados; ?>
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-toolbar-wrapper">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="la la-plus"></i> Tools
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Export Tools</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" id="export_print">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" id="export_copy">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" id="export_excel">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" id="export_csv">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" id="export_pdf">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="form-group row">
                <form role="form" method="POST" action="registrar-pago-paso2.php">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Lote</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    value="<?php echo $lotePago ;?>" name="lotePago" id="lotePago"
                                                    required readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 d-none">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control d-none" placeholder=""
                                                    value="<?php echo $clientePago ;?>" name="clientePago"
                                                    id="clientePago" required readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Cliente</label>
                                                <input type="text" class="form-control"
                                                    placeholder="<?php echo $nombreClientePago ;?>" value=""
                                                    name="nombreClientePago" id="nombreClientePago" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                        <div class="form-group" >
                                        <label>Fecha de Pago</label>
						                <input type="text" class="form-control" placeholder="Seleccione fecha" id="kt_datetimepicker_6" name="fechaPago" id="fechaPago" required />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Meses</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $nombreMeses ;?>" name="mesesPago" id="mesesPago" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tipo de Pago</label>
                                                <select id="operacionPago" name="operacionPago" class="custom-select">
                                                    <option id="loteLote1" name="loteLote1" value="0">Seleccione
                                                    </option>
                                                    <option id="loteLote1" name="loteLote1" value="1">1.- Apartado
                                                    </option>
                                                    <option id="loteLote2" name="loteLote2" value="2">2.- Enganche
                                                    </option>
                                                    <option id="loteLote3" name="loteLote3" value="3">3.- Mensualidad
                                                    </option>
                                                    <option id="loteLote4" name="loteLote4" value="4">4.- Contado
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>No. de Mes (<?php echo  $mesesPagados; ?>)</label>
                                                <input type="text" class="form-control" placeholder="<?php echo $mesesPagados ;?>" value="<?php echo $mesesPagados ;?>"
                                                    name="mesesPagados" id="mesesPagados" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Cantidad a Pagar</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text" class="form-control" placeholder="1300"
                                                        value="1300" name="cantidadPago" id="cantidadPago"
                                                        maxlength="12" size="12" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="submit" value="Registrar" class="btn btn-success"
                                                name="btn_registrar"><?php echo $mesesPagados; ?>
                                        </div>
                                    </div>
                                </form>
                </div>
            </div>
           
        </div>
    </div>
    <div>
    <?php
 
    $lotePago = $_POST['lotePago'];
    $clientePago = $_POST['clientePago'];    
    $fechaPago = $_POST['fechaPago'];
    $operacionPago = $_POST['operacionPago'];
    $mesesPago = $idMeses;
    $cantidadPago = $_POST['cantidadPago'];
    if(isset($_POST['btn_registrar']))
    {
            $ejecutar= mysqli_query($conexion, "INSERT INTO $tabla_pagos (clientePago,lotePago,operacionPago,mesesPago,fechaPago,cantidadPago,mesesPagados) 
                                VALUES ('$clientePago','$lotePago','$operacionPago','$mesesPago','$fechaPago','$cantidadPago','$mesesPagados')");
                                if(!$ejecutar){
                                    
                                    echo '
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
        <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Pago no registrado</h5>
        Revise los datos e intente de nuevo
        
        </div></div></div></div>
      ';      

                                }
        else{  
            echo $mesesPagados;                        
            echo '
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Pago Registrado Correctamente</h5>
        <a href="registrar-pago.php">Registrar Otro Pago</a>
        </div></div></div></div>
      ';   

          }
        
    }
    ?>
    </div>
    <!-- end:: Content -->
</div>
<?php include ('inc/prefooter.php'); ?>
</div><!-- end:: Wrapper -->
</div><!-- end:: Page -->
</div><!-- end:: Root -->
<?php include('inc/footer.php'); ?>