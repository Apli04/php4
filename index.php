<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 CRUD</title>

    <!-- Bootstrap css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<h1 class="bg-dark text-light text-center py-2">DATA PENGGUNA</h1>
<div class="container">

<!--form modal--> 
<div class="modal fade" id="usermodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding or Updating User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <!--Username-->
      <label>Name:</label>
        <div class="form-group">
        <div class="input-group">
      <div class="input-group-prepend">
      <span class="input-group-text bg-dark"><i class="fas fa-user-alt"></i></span>
      </div>
      <input type="text" class="form-control" placeholder="enter your username" autocomplete="off" required="required"id="username">
        </div>
        </div>
     
      <!-- Email-->
      <div class="form-group">
        <label>Email:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fas fa-envelope-open text-light"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required="required" id="email">
        </div>
        </div>

        <!--Mobile-->
        <label>Mobile:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-phone text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter your phone" autocomplete="off" required="required" id="mobile" name="mobile" maxlength="10" minlength="10">
        </div>
        

      <!--Photo-->
      <label>Photo:</label>
      <div class="input-group">
            <label class="custom-file-label" for="userphoto">Choose File</label>
            <div class="input-group">
            <input type="file" class="custom-file-input" name="photo" id="userphoto">
        </div>
      </div>
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Input search and button section--> 
<div class="row mb-3">
  <div class="col 10">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark"><i class="fas fa-search text-light"></i></span>
      </div>
      <input type="text" class="form-control" placeholder="Search user...">
    </div>
  </div>
  <div class="col-2">
    <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#usermodal">
        Add New User
      </button>
  </div>
</div>


<!--Tabel -->
<table class="table" id="usertable">
  <thead class="table-dark">
    <tr>
    <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Picture1</th>
      <td>apli</td>
      <td>apli@gmail.com</td>
      <td>9843</td>
      <td>
        <span>Edit</span>
        <span>Profile</span>
        <span>Delete</span>
      </td>
    </tr>
  </tbody>
</table>

<!-- pagination -->
<nav aria-label="Page navigation example" id="pagination">
  <ul class="pagination justify-content-center" >
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

</div>


<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>