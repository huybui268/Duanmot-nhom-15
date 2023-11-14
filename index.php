<?php

include "model/pdo.php";
include "model/hotel.php";
?>
<?php

include "header.php";
?>

<section class="main">
      <?php
include "home2.php";
?> 
<?php
    
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
           
            case "listhotel":
                $listhotel = loadall_hotel();
                include "listhotel.php";
                break;
    
                case "hard_delete":
                    if (isset($_GET['idht'])) {
                        hard_delete($_GET['idht']);
                    }
                    $listhotel = loadall_hotel("",0);
                    include "listhotel.php";
                    break;
                       
           
    
       case "home":
        include "home.php";
        break;
    
        }
    } else {
        include "home2.php";
    }
    ?>
    </section>

     
  </body>

  </html>
</span>



