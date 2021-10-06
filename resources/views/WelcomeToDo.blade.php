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
      
      <!-- FROM PUBLIC FOLDER-> CSS NOT WORKING, Tried these 2 ways -->
      <!-- <link rel="stylesheet" type="text/css" href="{{url('css/WelcomeToDo.css')}}"> -->
      <!-- <link rel="stylesheet" type="text/css" href="/css/WelcomeToDo.css">-->

      <!-- FROM resources-> views -->
      <link rel="stylesheet" type="text/css" href="{{url('css/WelcomeToDo.css')}}">


</head>
<body class="body-color">
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-5">
                <div class="pt-5" style="float: right; margin-top: 100px;"> 
                   <img src="{{url('/img/undraw_Browsing_online_re_umsa.svg')}}" style="width: 90%;;" alt="">
               </div>
             </div>

            	<div class="col-lg-7 pt-5" style="margin-top: 150px; float:left">

                <h1>Welcome to <span style="color: #f55951;">ToDo</span><span style="color: #361d32;">.com</span>!</h1>
                <p class="para"> <span style="color: #f55951;">ToDo</span> is a free social networking microblogging service that allows registered members to broadcast short posts or blogs. Todo members can broadcast tweets and follow other users' tweets by using multiple platforms and devices. Tweets and replies to tweets can be sent by cell phone text message, desktop client or by posting at the <a href="#" style="color: #f55951";> Todo.com</a> website.
                Join and enjoy the kingdom of posts! <br></p>


                <h6 class="para">Haven't joined yet? its free! <a class="btn bttn" href="{{url('Reg_form')}}">Register Now</a></h6>
                
                <h6 class="para" >Already Joined? <a class="btn bttn" href="{{url('Login_form')}}">Login</a></h6>
               

           </div>
            
        </div>



    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>