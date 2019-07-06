<!-- The Modal -->
<div class="modal fade" id="modal-newUser" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Account Created Successfully</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                You can now log in to your account with email and password.
                <h1 style="color:darkgoldenrod;"><?php echo $_GET['newUser'] ?></h1>
                <img src="imgs/newUserPic.png" height="520px" width="400" alt="success" id="sucPic">
            </div>
        </div>
    </div>
</div>
<script>$('#modal-newUser').modal('show') </script>
