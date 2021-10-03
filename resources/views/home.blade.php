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
    	
    	.fa-thumbs-up{
    		
    		/*text-shadow: 0 0 1px black;
  			color: white;*/
  			color: #808080;

    	}

    	.fa-thumbs-up:hover{
    		
    		text-shadow: 0 0 1px black;
  			color: #00008B;
    	}

    	.fa-share{
    		text-shadow: 0 0 1px black;
  			color: white;	
    	}

    	.fa-share:hover{
    		
    		text-shadow: 0 0 1px black;
  			color: #543c52;
    	}

    	.post-options{
    		display: flex;
    		padding-bottom: 5px;
    		margin-bottom: -5px;

    	}

    	.nav-css{
    		
    		background-color: #361d32;
    		color: #361d32;
    		
    		/*Changed navbar color to gradient*/
    		/*background: rgb(245,89,81);
			background: linear-gradient(90deg, rgba(245,89,81,1) 22%, rgba(84,60,82,1) 46%);*/
    	}

    	.post-text{

    		resize: none;
    	}

    </style>


</head>
<body style="background-color: white;">
    
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg nav-css navbar-dark">
            <a class="navbar-brand" style="margin-left: 50px;" href="#">ToDo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent"  style="margin-left: 1000px; color: #361d32;">
              <ul class="navbar-nav" style="margin-left: 60px;">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('Home')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                @if(!session()->has('user'))  <!-- if there is no user loged in, register and Login button will be shown in the header-->
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('Reg_form')}}">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('Login_form')}}">Login</a>
                  </li> 
                @endif
                @if(session()->has('user'))  
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="UserDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{session('user')->first_name}} {{session('user')->last_name}}  <!-- if there is any user loged in, his name will be shown -->
                  </a>
                  <div class="dropdown-menu" aria-labelledby="UserDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('Logout')}}">Logout</a>
                  </div>
                </li>
                @endif
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
        <div class="card-footer bg-white post-options">
          <div class="like-btn">
          <i onclick="myFunction(this)" class="fas fa-thumbs-up"></i><span style="padding-left: 2px; padding-right: 10px"> Like</span>
          </div>
          <div class="share-btn">
          <i class="fas fa-share"></i><span> Share</span>
          </div>
          <!-- <button type="button" class="btn mt-2 btn-primary btn-sm">Like</button>
          <button type="button" class="btn mt-2 btn-primary btn-sm">Share</button> -->
        </div> 
      </div>
    </div>
  </div>

  <div class=" container justify-content-center pt-3" style="align-items: center;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mashrur Jamil Rafin</h5>
        <p class="card-text"><small class="text-muted">5 mins ago</small></p>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="card-footer bg-white post-options">
          <div class="like-btn">
          <i class="fas fa-thumbs-up"></i><span style="padding-left: 2px; padding-right: 10px"> Like</span>
          </div>
          <div class="share-btn">
          <i class="fas fa-share"></i><span> Share</span>
          </div>
      </div>
      <!-- <img class="card-img-bottom" src=".../100px180/" alt="Card image cap"> -->
    </div>
  </div>

    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>