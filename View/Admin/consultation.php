<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<?php
    require_once('Partials/_head.php');
?>
<body>

<div id="ihealth-layout" class="theme-tradewind">
    
    <!-- sidebar -->
    <?php
        require_once('Partials/_header.php');
    ?>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <?php
            require_once('Partials/_topHeader.php');
        ?>

        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Liste des Consultations</h3>
                            <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#Consadd"><i class="icofont-plus-circle me-2 fs-6"></i>Nouvelle Consultation</button>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row mb-3">
                    <div class="card">
                        <div class="card-body">
                            <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id Consultation</th>
                                        <th>Nom du Patient</th>
                                        <th>Sexe du Patient</th>
                                        <th>Email du Patient</th>
                                        <th>Observation</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PT-0001</td>
                                        <td><img src="../assets/images/xs/avatar3.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Jean Pierre </span></td>
                                        <td>M</td>
                                        <td>monemail@gmail.com</td>
                                        <td>Palu, Fièvre</td>
                                        <td class="text-center"><a href="detailsConsultation.php" class="btn btn-primary mx-2">Voir détails</a></td>
                                    </tr>
                                    <tr>
                                        <td>PT-0001</td>
                                        <td><img src="../assets/images/xs/avatar3.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Jean Pierre </span></td>
                                        <td>M</td>
                                        <td>monemail@gmail.com</td>
                                        <td>Palu, Fièvre</td>
                                        <td class="text-center"><a href="detailsConsultation.php" class="btn btn-primary mx-2">Voir détails</a></td>
                                    </tr>
                                    <tr>
                                        <td>PT-0001</td>
                                        <td><img src="../assets/images/xs/avatar4.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Jean Pierre </span></td>
                                        <td>M</td>
                                        <td>monemail@gmail.com</td>
                                        <td>Palu, Fièvre</td>
                                        <td class="text-center"><a href="detailsConsultation.php" class="btn btn-primary mx-2">Voir détails</a></td>
                                    </tr>
                                    <tr>
                                        <td>PT-0001</td>
                                        <td><img src="../assets/images/xs/avatar5.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Jean Pierre </span></td>
                                        <td>M</td>
                                        <td>monemail@gmail.com</td>
                                        <td>Palu, Fièvre</td>
                                        <td class="text-center"><a href="detailsConsultation.php" class="btn btn-primary mx-2">Voir détails</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Modal Custom Settings-->
        <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog  modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Custom Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_setting">
                        <!-- Settings: Color -->
                        <div class="setting-theme pb-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                            <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="tradewind" class="active"><div class="tradewind"></div></li>
                                <li data-theme="monalisa"><div class="monalisa"></div></li>
                                <li data-theme="blue"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red"><div class="red"></div></li>
                            </ul>
                        </div>
                        <div class="sidebar-gradient py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                            <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="CheckGradient">
                                <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                            </div>
                        </div>
                        <!-- Settings: Template dynamics -->
                        <div class="dynamic-block py-3">
                            <ul class="list-unstyled choose-skin mb-2 mt-1">
                                <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                            </ul>
                            <div class="dt-setting">
                                <ul class="list-group list-unstyled mt-1">
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label>Primary Color</label>
                                        <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label>Secondary Color</label>
                                        <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 1</label>
                                        <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 2</label>
                                        <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 3</label>
                                        <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 4</label>
                                        <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 5</label>
                                        <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Settings: Font -->
                        <div class="setting-font py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                            <ul class="list-group font_setting mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                        <label class="form-check-label" for="font-poppins">
                                            Poppins Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                        <label class="form-check-label" for="font-opensans">
                                            Open Sans Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                        <label class="form-check-label" for="font-montserrat">
                                            Montserrat Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                        <label class="form-check-label" for="font-mukta">
                                            Mukta Google Font
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary lift">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- Add Department-->
         <div class="modal fade" id="Consadd" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="ConsaddLabel">Nouvelle Consultation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="GET" action="newConsultation.php">
                    <div class="modal-body">
                        <div>
                            <h6>Veuillez sélectionner un patient pour la consultation</h6>
                        </div>
                        <div class="deadline-form">
                            
                            <select name="patient" id="" class="form-control">
                                    <option value="Jean">Jean Dupont</option>
                                    <option value="Jean">Jean Dupont</option>
                                    <option value="Jean">Jean Dupont</option>
                                    <option value="Jean">Jean Dupont</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Continuer</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
  
</div>

<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js -->
<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/plugin/jqueryuicalandar/jquery-ui.min.js"></script>
<script src="../assets/plugin/owlcarousel/owl.carousel.js"></script>
<script src="../assets/bundles/dataTables.bundle.js"></script>      

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
<script src="../js/page/index.js"></script>
 <script>
      $('#myDataTable')
      .addClass( 'nowrap' )
      .dataTable( {
          responsive: true,
          columnDefs: [
              { targets: [-1, -3], className: 'dt-body-right' }
          ]
      });
 </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2024 19:54:50 GMT -->
</html> 