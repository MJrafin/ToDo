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
    
    	
      <!-- <link rel="stylesheet" href="{{url('/css/main.css')}}"> -->

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
    		height: 150px;
    	}


    	.modal-content{
                margin-top: 100px;
            }


        .large-btn{
        	width: 100%;
        	height: 70px;
        	text-align: left;
        	border: 1px solid #EFEFEF;
        }

        .large-btn:hover{

        	background-color: #DCDCDC;
        	border: 1px solid #543c52;
        }

        /*.text-container{
        	padding: 30px;
        }*/

    </style>


</head>
<body style="background-color: white; width: 100%;">
    
        <!-- Navbar -->
        <nav class="container-fluid navbar navbar-expand-lg nav-css navbar-dark">
            <a class="navbar-brand" style="margin-left: 100px;" href="#">ToDo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" style="color: #361d32;">
              <ul class="nav navbar-nav">
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
    <div class=" container justify-content-center mb-4 text-container" style="align-items: center; padding-bottom: 50px;">
       
    	<h5 class="pt-5" style="padding-left: 7px;">Write post</h5>
       <button type="button" class="btn btn-light large-btn" data-toggle="modal" data-target="#PostModal" data-whatever="@mdo">What's on your mind?</button>

       <div class="post-btn" style="float: left;">
                    <button type="button" class="btn mt-2 btn-primary btn-sm" data-toggle="modal" data-target="#PostModal">Post</button>
                </div>

   <div class="modal fade" id="PostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel"> Write post</h5>
        		<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         		 <span aria-hidden="true">&times;</span>
        		</button> -->
      	</div>
      		<div class="modal-body">
        		<form>
          
          			<div class="form-group">
            		<!-- <label for="message-text" class="col-form-label">Write Post</label> -->
            		<textarea class="form-control post-text" id="message-text" rows="2" cols="2" placeholder="What's on your mind?"></textarea>
          			</div>
        		</form>
      		</div>
      			<div class="modal-footer">
       			 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		 <button type="button" class="btn btn-primary">Post</button>
      			</div>
    		</div>
  </div>
</div>

        <!-- <form>
            
            <div class="form-group">
            <label for="PostTextArea"></label>
            <textarea class="form-control post-text" style="align-items: center;" id="PostTextArea" rows="2" cols="2"  placeholder="What's on your mind?"></textarea>
            </div>
               
                <div class="post-btn" style="float: right;">
                    <button type="button" class="btn mt-2 btn-primary btn-sm">Post</button>
                </div>
    	</form> -->
   

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

    
    


    <script>
  		$('#PostModal').on('show.bs.modal', function (event) {
  		var button = $(event.relatedTarget) // Button that triggered the modal
  		var recipient = button.data('whatever') // Extract info from data-* attributes
  		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  		var modal = $(this)
		//   modal.find('.modal-title').text('New message to ' + recipient)
		//   modal.find('.modal-body input').val(recipient)
		})
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>