<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
    <style>


    </style>

</head>
<body>
    
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" style="margin-left: 50px;" href="#">ToDo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent"  style="margin-left: 1000px;">
              <ul class="navbar-nav" style="margin-left: 60px;">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="UserDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mashrur Jamil Rafin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="UserDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>

    
        
    <!-- Post Text Field -->
    <div class=" container justify-content-center" style="align-items: center; padding-bottom: 50px;">
        <form>
            <div class="form-group">
            <label for="PostTextArea"></label>
            <textarea class="form-control post-text" style="align-items: center;" id="PostTextArea" rows="2" cols="2"  placeholder="What's on your mind?"></textarea>
            </div>
               
                <div class="post-btn" style="float: right;">
                    <button type="button" class="btn mt-2 btn-primary btn-sm">Post</button>
                </div>
    </form>
   </div>


   <!-- Posts Timeline-->
   <div class=" container justify-content-center" style="align-items: center;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mashrur Jamil Rafin</h5>
        <p class="card-text"><small class="text-muted">3 mins ago</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="card-footer bg-white">
          <!-- <div>
          <span class="material-icons-outlined">thumb_up</span>
          <p>Like</p>
          </div> -->
          <button type="button" class="btn mt-2 btn-primary btn-sm">Like</button>
          <button type="button" class="btn mt-2 btn-primary btn-sm">Share</button>
        </div>
        
      </div>
      <!-- <img class="card-img-bottom" src=".../100px180/" alt="Card image cap"> -->
    </div>
  </div>

  <div class=" container justify-content-center pt-3" style="align-items: center;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mashrur Jamil Rafin</h5>
        <p class="card-text"><small class="text-muted">3 mins ago</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="card-footer bg-white">
          <button type="button" class="btn mt-2 btn-primary btn-sm">Like</button>
          <button type="button" class="btn mt-2 btn-primary btn-sm">Share</button>
        </div>
      </div>
      <!-- <img class="card-img-bottom" src=".../100px180/" alt="Card image cap"> -->
    </div>
  </div>

    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>