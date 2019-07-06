<!-- The Modal -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-sign-in-alt"></i>  LOGIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white;">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <form name="login-form" action="includes/login-inc.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label for="loginEmail"><i class="fas fa-envelope"></i></i>  Email</label>
                                <input type="email" class="form-control" id="loginEmail" name="loginEmail">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="loginPass"><i class="fas fa-key"></i>  Password</label>
                                <input type="password" class="form-control" id="loginPass" name="loginPass">
                            </div>
                            <div class="form-group col-sm-12">
                                <button type="submit" id="loginSubmit" name="loginSubmit" class="btn btn-success btn-lg btn-block"><i class="fas fa-unlock-alt"></i> Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>