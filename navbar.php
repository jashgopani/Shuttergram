<?php
session_start();
    require("bootstrap.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- for setting logo -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <!-- for logout logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        #pagename{
            font-family: 'Pattaya', sans-serif;
            color: black;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="border-bottom:1px solid rgba(0,0,0,.1);">
    <div class="row justify-content-between text-center">
            <div class="col-2 text-left my-auto">
                <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModalCenter"><i style="font-size:24px ; color:gray; " class="fa">&#xf013;</i></button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5  class="modal-title" id="exampleModalLongTitle">Profile Settings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <button class="btn btn-block btn-sm btn-light">edit profile</button>
                            <button class="btn btn-block btn-sm btn-light">change password</button>
                            <button class="btn btn-block btn-sm btn-light">log out</button>
                            <button class="btn btn-block btn-sm btn-danger">delete account</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm ">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <a class="navbar-brand" href="#">
                    <!-- <img src="shuttergram.png" width="35" height="35" class="d-inline-block align-top" alt=""> -->
                    <span id="pagename"><i style='font-size:24px' class='fas'>&#xf083;</i> Shuttergram</span>
                </a>
            </div>
            
            <div class="col-2  text-right my-auto">
            <button class="btn btn-sm btn-light"><i style="font-size:24px; color:gray;" class="fa">&#xf08b;</i></button>
            </div>
    </div>
</div>
</body>
</html>