<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7614c333c.js"></script>

    <title>Recorder</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light">

     <a class="navbar-brand pr-4" href="{{url('/')}}"><i class="fa fa-eercast" aria-hidden="true"></i>  Adilo</a> 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Project <span class="sr-only" >(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tools & App
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
                  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Channels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Analytics</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Settings</a>
      </li>
       
      
    </ul>
     <ul class="nav navbar-nav navbar-right">
        <li class="nav-item" >
        <a class="nav-link" href="#">
          <img width="50px" class="rounded" src="download.jpeg"><label>My name</label>
         </a>

      </li>
      </ul>
  </div> 
  </div>

   
 
</div>
 <!-- 
  -->

</nav>
<div class="dropdown-divider"></div>

<br>
 <div class="row">

 	<div class="col-2"> </div>
 	
 	<div class="col-8 btn bg-light" style="height:auto; width: auto;" >
    <div class="fa fa-dot-circle-o"  style="float:left; margin-left: 10%;" >Live Recording</div><br>
 		<video id="player" class="col-10" controls></video><br>


<button  onclick="myFunction()" class="btn btn-primary ml-3">Start Recording</button>

 		
 	</div>
	<div class="col-1"></div>  

</div>
  <hr>
  </body>
<script>
function myFunction() {

  var player = document.getElementById('player');

  var handleSuccess = function (stream) {
    player.srcObject = stream;
    stream.start();

  };
  navigator.mediaDevices
    .getUserMedia({audio: true, video: true,screen: true,})
    .then(handleSuccess)

    if (handleSuccess.state =='denied') {

      location.reload();
    }


  navigator.permissions.query({name: 'camera',name:'audio'}).then(function (result) {
  if (result.state == 'granted') {
  } else if (result.state == 'prompt') {
  } else if (result.state == 'denied') {

                    alert('Lack of permission!');
                    // location.reload();
                 }
  result.onchange = function () {};
});


  }
</script>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>