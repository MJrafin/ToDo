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


    </style>

</head>
<body>
    
    <div style="background-color: #f1e8e6;">
    
        <div class="row pt-5 pb-3 justify-content center" style="align-items: center;">
            
            <div class="col-lg-6" style="align-items: center;">
                <img src="undraw_online_ad_re_ol62.svg" style="width: 900px;" alt="">
            </div>

            <div class="col-lg-6" style="align-items: center;">
                <div class="container" style="border:#361d32 solid; width: 700px; height: 550px; background: white;">
                   
                    <div class="contact-form p-3">
                        <div class="title text-center mb-3 pt-4 text-white">
                            <h3 class="font-weight bolder" style="color:  #361d32;">Registration Form</h3>
                        </div>
                        <form class="" action="{{url('registration')}}" method="post">
                            @csrf
                              <div class="Fname pt-3">
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
                              <button type="submit" class="btn pt-3" style="color: #f55951;">Sign Up</button>
                          </form>
                          

                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>