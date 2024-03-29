<div id="layoutAuthentication_content">
    <main>
        <div class="container">
        <section class="py-5">
                <div class="container px-5">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row ">
                                <div class="col-lg-6 col-xl-5 py-lg-0">
                                    
                                    <div class="p-4 p-md-5">

                                        
                                        <div class="h2 fw-bolder"><center>Sign In</center></div>
                                        <div class="card-body">
                                            <?php echo form_open('login/login');?>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                                <!-- <div class="form-check mb-3">
                                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                    <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                                </div> -->
                                                <div class="d-flex align-items-center text-decoration-none justify-content-between mt-4 mb-0">
                                                    <a class="small nav-link nav-light" href="<?php echo base_url('login/recovery')?>">Forgot Password?</a>
                                                    <a class="btn btn-secondary" type="submit">Login</a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="text-center py-3">
                                            <div class="small"><a class="nav-link" href="<?php  echo base_url('user/register');?>">Need an account? Sign up!</a></div>
                                            <div class="small"><a class="nav-link" href="<?php  echo base_url('home');?>">Return to Home page</a></div>

                                        </div>
                                        <div class="text-center small">
                                                    <div class="text-muted">Copyright &copy; Sennar Development 2022</div>
                                                    
                                                </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6 col-xl-7" style="background-image: url('https://dummyimage.com/700x350/343a40/6c757d'); background-size: 100% 100%; background-repeat: no-repeat;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
    </main>
</div>