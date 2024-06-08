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
            <div class="col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Dossiers récents</h6>
                            </div>
                            <div class="card-body">
                                <div class="room_book">
                                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 row-cols-lg-6 g-3">
                                        <div class="room col">
                                        <input type="checkbox" id="1A" checked/>
                                        <label for="1A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room A-101</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1B" />
                                        <label for="1B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room B-102</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1C" />
                                        <label for="1C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room C-103</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" disabled id="1D" />
                                        <label for="1D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Occupied</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1E" />
                                        <label for="1E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room D-104</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1F" checked/>
                                        <label for="1F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room E-105</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2A" />
                                        <label for="2A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room F-106</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2B" />
                                        <label for="2B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room G-107</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2C" checked/>
                                        <label for="2C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room H-108</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2D" />
                                        <label for="2D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room I-109</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2E" checked/>
                                        <label for="2E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room J-110</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2F" />
                                        <label for="2F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room K-111</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3A" checked/>
                                        <label for="3A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room L-112</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3B" />
                                        <label for="3B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room M-113</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3C" />
                                        <label for="3C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room N-114</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3D" />
                                        <label for="3D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room O-115</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3E" checked/>
                                        <label for="3E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room P-116</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3F" />
                                        <label for="3F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room Q-117</span></label>
                                        </div>
                                    </div>
                                </div>
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
</html> 