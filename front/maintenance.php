<?php
//------------------------------------------------------------------------------
//  Pi.Alert
//  Open Source Network Guard / WIFI & LAN intrusion detector 
//
//  devices.php - Front module. Server side. Manage Devices
//------------------------------------------------------------------------------
//  Puche 2021        pi.alert.application@gmail.com        GNU GPLv3
//  jokob-sk 2022        jokob.sk@gmail.com        GNU GPLv3
//------------------------------------------------------------------------------


//------------------------------------------------------------------------------
?>

<?php
  require 'php/templates/header.php';
?>
<!-- Page ------------------------------------------------------------------ -->
<div class="content-wrapper">

<!-- Content header--------------------------------------------------------- -->
    <section class="content-header">
    <?php require 'php/templates/notification.php'; ?>
      <h1 id="pageTitle">
         Maintenance tools
      </h1>
    </section>

    <!-- Main content ---------------------------------------------------------- -->
    <section class="content">


    <div class="col-xs-12">
      <div class="center">
          <button type="button" class="btn btn-default pa-btn pa-btn-delete"  style="margin-left:0px;"
            id="btnDeleteMAC"   onclick="askDeleteDevicesWithEmptyMACs()">   Delete Devices with empty MACs </button>     
      </div>
      
      <div class="center">
          <button type="button" class="btn btn-default pa-btn pa-btn-delete"  style="margin-left:0px;"
            id="btnDeleteMAC"   onclick="askDeleteAllDevices()">   Delete All Devices </button>     
      </div>
    </div>


    <!-- ----------------------------------------------------------------------- -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- ----------------------------------------------------------------------- -->
<?php
  require 'php/templates/footer.php';
?>


<script>

// delete devices with emty macs

  function askDeleteDevicesWithEmptyMACs () {
  // Ask delete device 

  showModalWarning('Delete Devices', 'Are you sure you want to delete all devices with empty MAC addresses?<br>(maybe you prefer to archive it)',
    'Cancel', 'Delete', 'deleteDevicesWithEmptyMACs');
}


function deleteDevicesWithEmptyMACs()
{ 
  // Delete device
  $.get('php/server/devices.php?action=deleteAllWithEmptyMACs', function(msg) {
    showMessage (msg);
  });
}

// delete all devices 
function askDeleteAllDevices () {
  // Ask delete device 

  showModalWarning('Delete Devices', 'Are you sure you want to delete all devices?',
    'Cancel', 'Delete', 'deleteAllDevices');
}


function deleteAllDevices()
{ 
  // Delete device
  $.get('php/server/devices.php?action=deleteAllDevices', function(msg) {
    showMessage (msg);
  });
}





</script>


