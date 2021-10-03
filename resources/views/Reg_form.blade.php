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
      
    
    <link href="main.css" rel="stylesheet">
    
    <!-- <style>

        .login-btn{
         
        background-color: #543c52;
        color: #f1e8e6;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
      }

      .login-btn:hover{

        background-color: #f55951;
        color: white;
      } 
      
    </style> -->

</head>
<body style="background-color: #f1e8e6;">
    
    <div>
    
        <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
            
            <div class="col-lg-6" style="align-items: center;">
                <img src="{{url('img/undraw_online_ad_re_ol62.svg')}}" style="width: 900px;" alt="">
            </div>

            <div class="col-lg-6" style="align-items: center;">
                <div class="container" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; width: 700px; height: 550px; background: white; margin-top: 70px;">
                   
                    <div class="contact-form p-3">
                        <div class="title text-center mb-3 pt-4 text-white">
                            <h3 class="font-weight bolder" style="color:  #361d32;">Registration Form</h3>
                        </div>
                        <form class="" action="{{url('registration')}}" method="post">
                            @csrf
                              <div>
                              <span>@error('first_name'){{$message}}@enderror</span>
                                <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" placeholder="First name">
                              </div>
                              <div class="Lname pt-3">
                                <span>@error('last_name'){{$message}}@enderror</span>
                                <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" placeholder="Last name">
                              </div>
                              <div class="email pt-3">
                                <span>@error('email'){{$message}}@enderror</span>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="E-mail">
                              </div>
                              <div class="phone pt-3">
                                <span>@error('phone'){{$message}}@enderror</span>
                                <input type="number" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Phone No." min="0">
                              </div>
                              <div class="password pt-3">
                                <span>@error('password'){{$message}}@enderror</span>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                              </div>

                              <div class="form-check pt-3">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">I agree to all <a href="#">Terms and Conditions</a></label>
                                </div>

                              <div class="text-center">
                              <button type="submit" class="btn mt-5 login-btn">Register</button>
                            </div>
                          </form>
                        
                            
                            

                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>