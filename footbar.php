<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("head.php"); ?>
    <link rel="stylesheet" href="footbar.css">
    <!-- for home , serach , add-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- for user profile  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <div class=" container-fluid fixed-bottom" style="border-top:1px solid rgba(0,0,0,.1);">
        <div class="footbar row justify-content-between  text-center">
            <div  class=" footbar col-3 my-auto">
                <a href="timeline.php"><i class="icon fa">&#xf015;</i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href="search.php"><i class="icon fa">&#xf002;</i></a>
            </div>
            <div  class=" footbar col-3 my-auto" >
                <a href="upload.php"><i class="icon fas fa-upload" ></i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href="profile.php"><i class="icon fas fa-user-alt"></i></a>
            </div>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
    
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>

    
    
</html>

