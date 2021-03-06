<?php include ('inc/header.php'); ?>
<?php require_once 'db/dbcon.php';?>
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
                    <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Reports" data-placement="top"><i class="flaticon2-writing"></i></a>
                    <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Calendar" data-placement="top"><i class="flaticon2-hourglass-1"></i></a>
                    <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
                        <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
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
                                            <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">pdf</span>
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
                    <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
                        <a href="#" class="btn btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0 0" aria-haspopup="true" aria-expanded="false">
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
                                            <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--rounded">6</span>
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
                                            <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">new</span>
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

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Listado de Clientes
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                            <th>Asesor</th>
                            <th>Lotes</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>   
                        <?php 
$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_clientes INNER JOIN asesores ON clientes.asesorCliente = asesores.idAsesorCliente");
  while($row = mysqli_fetch_array($resultados)){
      ?>
    <tr>
    <td><?php echo $row['nombreCliente']; ?></td> 
<td><?php echo $row['emailCliente']; ?></td> 
<td><?php echo $row['celularCliente']; ?></td> 
<td><?php echo $row['direccionCliente']; ?></td>
<td><?php echo $row['nombreAsesor']; ?></td>
<?php
$idCliente = $row['idCliente'];
$resultados2 = mysqli_query($conexion,"SELECT loteLote FROM $tabla_lotes WHERE clienteLote = $idCliente");
while($row2 = mysqli_fetch_array($resultados2)){
    
    
  
    $string =$string .'<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--rounded kt-badge--boldest">'. $row2['loteLote'].'</span>';
   
}
?>
<td><?php echo $string; ?></td>
<?php unset($string); ?>
<td>
<a text-align="center" href="pago-clientes.php?idCliente=<?php echo $row['idCliente']; ?>" class="btn btn-accent btn-icon" type="button"><i class="fa fa-edit"></i></a>

</td>
</tr>
<?php  } ?>
                            
                       
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Nombre</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                            <th>Asesor</th>
                            <th>Lotes</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
     </div>

    <!-- end:: Content -->
</div>


<?php include ('inc/prefooter.php'); ?>
</div><!-- end:: Wrapper -->
</div><!-- end:: Page -->
</div><!-- end:: Root -->
<?php include('inc/footer.php'); ?>