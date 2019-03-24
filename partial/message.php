<div class="alert alert-<?=$type?> " role="alert">
  <?php echo ( $message )??'' ?> 
  <?php unset($_SESSION['message']);unset($_SESSION['type'])?>
</div>