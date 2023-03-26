<?php
    if(isset($_SESSION['message'])) :  //To check in any message is set or not.
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Wow 😍</strong> <?= $_SESSION['message']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<?php
    unset($_SESSION['message']);  // To delete the message. It won't show again after showing once.
    endif;
?>