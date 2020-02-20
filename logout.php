<?php
session_start();
unset($_SESSION['user']);
session_destroy();
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">';
echo '<script type="text/javascript">';
echo 'setTimeout(function () {';
echo 'swal("ออกจากระบบสำเร็จ","ขอบคุณที่ใช้บริการค่ะ","success").then( function(val) {';
echo 'if (val == true) window.location.href = \'./\';';
echo '});';
echo '}, 200);  </script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>';
?> 