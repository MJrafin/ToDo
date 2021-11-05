<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
	  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
 -->
    <!-- NOT WORKING  -->
    <!-- <link rel="stylesheet" href="{{url('css/home.css')}}"> -->
    <!-- <link rel="stylesheet" href="/css/home.css"> -->

    <!-- FROM RESOURCES ->views -->
   <link rel="stylesheet" href="home.css">

    <style>
    	


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

    	
    	.like-btn{
     		
     		display: flex;  
            cursor: pointer;
            user-select: none;
            border: none;
            background-color: white;
        }

        .like-btn:hover{
            color: black;
        }

        .fa-thumbs-up-liked{
            color: darkblue;
        }

        .dislike-btn{
     		
     		display: flex;  
            cursor: pointer;
            user-select: none;
            border: none;
            background-color: white;
            color: grey;
        }

        .dislike-btn:hover{
            color: black;
        }
        .fa-thumbs-down-disliked{
        	color: red;
        }
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
                  <a class="nav-link" href="{{url('viewposts')}}">Home<span class="sr-only">(current)</span></a>
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
        		<form action="{{url('dopost')}}" method="post">
                @csrf
          			<div class="form-group">
            		<!-- <label for="message-text" class="col-form-label">Write Post</label> -->
            		<input type="text" name="content" class="form-control post-text" id="message-text" rows="2" cols="2" placeholder="What's on your mind?"></input>
          			</div>
        		
      		</div>
      			<div class="modal-footer">
       			 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		 <button type="submit" class="btn btn-primary">Post</button>
      			</div>
    		</div>
      </form>
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
   @foreach($posts as $post)  <!-- takes the posts one by one and shows in the desired position   -->
   <div class=" container justify-content-center pt-2 pb-2" style="align-items: center;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$post->name}}</h5>
        <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>  <!-- diffForHuman() is a function of CARBON library whichs returns a time that a human can easily understand -->
        <p class="card-text">{{$post->content}}</p>
        <div class="card-footer bg-white post-options">
      <!-- <form action="{{url('like')}}" method="post">
        @csrf -->
          <button  class="like-btn" id="like_button{{$post->id}}">
            <input type="number" name="post_id" value="{{$post->id}}" hidden>
      		<i class="fas fa-thumbs-up pt-1" ><span style=" padding-left: 2px; padding-right: 10px"><div id="like_count{{$post->id}}">{{$post->number_of_like}}</div> Like</span></i>
    	  </button>
    	   <!-- </form> -->
         <form action="{{url('dislike')}}" method="post">
        @csrf
          <button tupe="submit" class="dislike-btn">
            <input type="number" name="post_id" value="{{$post->id}}" hidden>
          <i class="fas fa-thumbs-down pt-1" ><span style="padding-left: 2px; padding-right: 10px">{{$post->number_of_dislike}} Dislike</span></i>
          </button>
          </form>

          <div class="share-btn">
          <i class="fas fa-share"></i><span> Share</span>
          </div>
        </div>
          <!-- <button type="button" class="btn mt-2 btn-primary btn-sm">Like</button>
          <button type="button" class="btn mt-2 btn-primary btn-sm">Share</button> -->
        
      </div>
    </div>
  </div>
  
<script>
    
    
    
    document.getElementById('like{{$post->id}}').onclick = function like() {
      var color1 = document.getElementById('like{{$post->id}}');
      if(color1.style.color == "blue")
      {
      color1.style.color = "grey";
      } 
      else{
      color1.style.color = "blue";
      }
      color2.style.color = "grey";
    }
    document.getElementById('dislike{{$post->id}}').onclick = function dislike() {
      var color2 = document.getElementById('dislike{{$post->id}}');
      if (color2.style.color == "red")
      {
      color2.style.color = "grey";
      } 
      else 
      {
      color2.style.color = "red";
      }
      color1.style.color = "grey";
    }
  </script>
<script>
    $(document).ready(function(){
      
      $("#like_button{{$post->id}}").click(function(){
        const pi = {{$post->id}};
        console.log(pi);
        $("#like_count{{$post->id}}").load("{{url('like')}}",{
          post_id: {{$post->id}}
        });
        $.ajaxSetup({
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      });
    });
  </script>

  @endforeach
  
   <!-- <div class=" container justify-content-center pt-3" style="align-items: center;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mashrur Jamil Rafin</h5>
        <p class="card-text"><small class="text-muted">5 mins ago</small></p>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="card-footer bg-white post-options">
          <bbutton class="like-btn">
      		<i class="fas fa-thumbs-up pt-1" onclick="like()"><span style="padding-left: 2px; padding-right: 10px"> Like</span></i>
    	  </bbutton>
    	   
          <bbutton class="dislike-btn">
          <i class="fas fa-thumbs-down pt-1" onclick="dislike()"><span style="padding-left: 2px; padding-right: 10px"> Dislike</span></i>
          </bbutton>

          <div class="share-btn">
          <i class="fas fa-share"></i><span> Share</span>
          </div>
         </div>
        <img class="card-img-bottom" src=".../100px180/" alt="Card image cap"> 
    </div>
  </div>
 </div>  -->
    
    <!-- FAILED Attempt scripts (using toggle) -->
    <!-- LIKE BUTTON SCRIPT -->
   <!--  <script>
      $('bbutton').click(function () {
        $('#tgl').toggleClass('fa-thumbs-up-liked');   
      }); 
	</script> -->


	<!-- DISLIKE BUTTON SCRIPT -->
    <!-- <script>
      $('bbutton2').click(function () {
        $('#dis-tgl').toggleClass('fa-thumbs-down-disliked');   
      });
	</script>
 	-->
 



	<!-- POPUP WRITE POST JS -->
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