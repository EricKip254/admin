<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Commerce Platform" />
        <meta name="author" content="Sennar Development" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php  echo base_url();?>/public/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php  echo base_url();?>/public/css/styles.css" rel="stylesheet" />
    </head>
    
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <!-- Include sessions and roles settings using if loop -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php  echo base_url('home');?>">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item"><a class="nav-link" href="<?php  echo base_url('home');?>">Home</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="<?php  echo base_url('dashboard');?>">Admin Portal</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php  echo base_url('contact');?>">Contact</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3 text-end">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?php  echo base_url('login');?>">Sign In</a></li>
                            
                            <!-- <li class="nav-item"><a class="nav-link" href="<?php  echo base_url('users/add');?>">Register</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->