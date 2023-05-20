<<<<<<< HEAD
<section class="py-5">
    <div class="container px-5">
        <div class="row">      
            <div class="col-lg-8">
                 <!-- Contact form-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5"> 
                    <div class="text-center mb-5">
                        <div class="text-black rounded-3 mb-3"><i class="bi bi-file-earmark-text"></i></div>
                        <h1 class="fw-bolder">Register</h1>
                        <p class="lead fw-normal text-muted mb-0">Fill the form below</p>
                    </div>
                    <?php echo form_open('user/register')?>
                        <div class="row d-flex justify-content-center">
                            <div class="col-dm-1"></div>
                            <div class="col-md-10">
                                
                                <div class="form-group">
                                    <label>First Name<strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" name="FName" placeholder="First Name" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Last Name<strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" name="LName" placeholder="Last Name" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Other Name</label>
                                    <input type="text" class="form-control" name="OName" placeholder="Other Name" >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Email<strong class="text-danger">*</strong></label>
                                    <input type="email" class="form-control" name="Email" placeholder="Email" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Phone Number<strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" name="Phone" placeholder="Phone Number" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Password<strong class="text-danger">*</strong></label>
                                    <input type="password" class="form-control" name="Password" placeholder="Password" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Confirm Password<strong class="text-danger">*</strong></label>
                                    <input type="password" class="form-control" name="Password2" placeholder="Confirm Password">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-secondary d-flex">Submit</button>
                                </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 bg-light">
                    <div class="card-body p-4 py-lg-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="h6 fw-bolder">Have more questions?</div>
                                <p class="text-muted mb-4">
                                    Contact us at
                                    <br />
                                    <a>support@domain.com</a>
                                </p>
                                <div class="h6 fw-bolder">Follow us</div>
                                <a class="fs-5 px-2"><i class="bi bi-twitter"></i></a>
                                <a class="fs-5 px-2"><i class="bi-facebook"></i></a>
                                <a class="fs-5 px-2"><i class="bi-linkedin"></i></a>
                                <a class="fs-5 px-2"><i class="bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
=======
A
<!-- Set Flash data and session data -->
<div class="container-fluid px-4">
                        
    <ol class="breadcrumb mb-4">
       <h1>Register User</h1>
    </ol>
   
</div>
<div class="alert alert-warning" role="alert">
<?php echo validation_errors();?>
</div>
<?php echo form_open('user/register')?>
<div class="row d-flex justify-content-center">
    <div class="col-md-9">
        
        <div class="form-group">
            <label>First Name<strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="FName" placeholder="First Name" required>
        </div>
        <br>
        <div class="form-group">
            <label>Last Name<strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="LName" placeholder="Last Name" required>
        </div>
        <br>
        <div class="form-group">
            <label>Other Name</label>
            <input type="text" class="form-control" name="OName" placeholder="Other Name" >
        </div>
        <br>
        <div class="form-group">
            <label>System role <strong class="text-danger">*</strong></label>
            <div>
                <select class="form-control select2" name="Role" title="System Role" required>
                    <option>Select</option>
                    <?php foreach( $roles as $role ) : ?>
                        <option value="<?php echo $role->id; ?>"><?php echo ucwords(strtolower($role->RName)) ; ?></option>
                    <?php endforeach; ?>   
                </select>
>>>>>>> 3f119e9cd074f3c147cc57946731b0be4736dca7
            </div>
        </div>
       
        <!-- Contact cards-->
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
            <div class="col">
                <div class="text-black rounded-6 mb-3"><i class="bi bi-chat-dots"></i></div>
                <div class="h5 mb-2">Chat with us</div>
                <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
            </div>
            <div class="col">
                <div class="text-black rounded-6 mb-3"><i class="bi bi-people"></i></div>
                <div class="h5">Ask the community</div>
                <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
            </div>
            <div class="col">
                <div class="text-black rounded-6 mb-3"><i class="bi bi-question-circle"></i></div>
                <div class="h5">Support center</div>
                <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
            </div>
            <div class="col">
                <div class="text-black rounded-6 mb-3"><i class="bi bi-telephone"></i></div>
                <div class="h5">Call us</div>
                <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
            </div>
        </div>
    </div>
</section>
