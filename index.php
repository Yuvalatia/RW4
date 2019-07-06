<?php
$TITLE = "Home";
include("header.php"); 
?>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nam, reprehenderit perferendis excepturi necessitatibus assumenda quo tenetur odio dolorem consequuntur quod, facilis dicta laborum laudantium nisi expedita earum tempore repellat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla culpa aut, alias illo facilis voluptatum ea ipsum molestiae modi a distinctio consequuntur deserunt, nihil consectetur ratione et exercitationem, velit architecto.</p>
<?php
include("footer.php");
?>

<?php
    // Checks for new account added
    if(isset($_GET['newUser'])){

      // including modal for new user
      include ('modals/newUserModal.php');


    }
?>
