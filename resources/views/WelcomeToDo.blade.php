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
      
    
    <style>
        
        .body-color{
            background: rgb(237,210,203);
            background: linear-gradient(90deg, rgba(237,210,203,1) 28%, rgba(241,232,230,1) 62%);
        }

        .para{
            font-size: larger;
        }

        .reg-hov{
            color: #f55951;
            font-weight: bolder;
            font-size: x-large;
            /* animation: blink 1s linear infinite; */
        }

        .reg-hov:hover{
            color: #543c52;
        }

        /* .b{
            animation: blink 1s linear infinite; 
        } */

        /* @keyframes blink{
        0%{opacity: 0;}
        50%{opacity: .5;}
        100%{opacity: 1;}
        } */


        .log-hov{
            color: #f55951;
            font-weight: bolder;
            font-size: x-large;
        }

        .reg-hov:hover{
            color: #543c52;
        }

        .bttn{
           background-color:  #f55951;
           color: white;    
        }

        .bttn:hover{
            background-color:  #f1e8e6;
           color: #f55951;
           box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

    </style>

</head>
<body class="body-color">
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-5">
                <div class="pt-5" style="float: right; margin-top: 100px;"> 
                   <img src="undraw_Browsing_online_re_umsa.svg" style="width: 90%;;" alt="">
               </div>
             </div>

            <div class="col-lg-7 pt-5" style="margin-top: 150px; float:left">

                <h1>Welcome to <span style="color: #f55951;">ToDo</span><span style="color: #361d32;">.com</span>!</h1>
                <p class="para"> <span style="color: #f55951;">ToDo</span> is a free social networking microblogging service that allows registered members to broadcast short posts or blogs. Todo members can broadcast tweets and follow other users' tweets by using multiple platforms and devices. Tweets and replies to tweets can be sent by cell phone text message, desktop client or by posting at the <a href="#" style="color: #f55951";> Todo.com</a> website.
                Join and enjoy the kingdom of posts! <br></p>

                <!-- <h6 class="para">Haven't joined yet? <span class="blink"><a class="reg-hov" href="Reg_form.html">Register</a></span> NOW! its free.</h6> 
                <h6 class="para">Already Joined? <a  href="#" class="log-hov">Login</a> from here.</h6>
                <div class="pt-5"></div>
                <div class="pt-5"></div> -->

                <h6 class="para">Haven't joined yet? its free! <button type="button" class="btn bttn">Register Now</button></h6>
                <h6 class="para">Already Joined? <button type="button" class="btn bttn">Login</button></h6>
               

           </div>
            
        </div>



    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>