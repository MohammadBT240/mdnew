<?php
if (isset($_SESSION['log_message']))  :
?>


<div class="alert <?php if ( $_SESSION['log_message'] == "You have been logged out!" || $_SESSION['log_message'] == "Please login to access this page") {
  echo "alert-danger";
} else {
  echo "alert-success";
} ?> alert-dismissible fade show" role="alert">
 <strong></strong> <?= $_SESSION['log_message']; ?>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>


<?php
unset($_SESSION['log_message']);
endif;
?>

