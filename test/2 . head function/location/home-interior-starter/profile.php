<?php

include_once("header.php");
include_once("navbar.php");

?>


<div class="container p-2">
    <div class="row">
        <div class="col-4 bg-dark text-white">
            <p class="text-center">Welcome To : <?php echo $_SESSION["email"];?></p>
        </div>

        <div class="col-8">
            <h3 class="text-center">Update your profile</h3>
            <center>
                <form method="post">
                    <button type="button" name="edit" class="btn btn-primary mx-auto">click to edit your profile >></button>
                </form>
            </center>
        </div>
    </div>
</div>


<?php

include_once("footer.php");

?>