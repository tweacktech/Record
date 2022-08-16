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
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New Regording</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>save the recording</div>
        <select class="btn btn-lg m-3" style="width:80%;">
          <option class="bg-light" style="text-decoration-color: gray;">Select a Project</option>
        </select><br>
 <div> Record Screen      
<label class="switch" style="float: right;">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
<br>
 <div> Record Camera      
<label class="switch" style="float: right;">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
<br>
 <div> Record Mic      
<label class="switch" style="float: right;">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
     
      </div>
      <div class="modal-footer">
       
          <a href="{{url('/rec')}}"  class="btn btn-primary ml-3">Start Recording</a>
      </div>
    </div>
  </div>
</div>


 <div class="row">
    <div class="col-2 btn bg-light">
    <br>
      
     <i class="fa fa-film"></i> <button type="button" class="btn fa fa-movies" 
      data-toggle="modal" data-target="#exampleModalCenter">
      My Recordings
      </button><br><br>
       <i class="fa fa-share-alt"></i><button class="btn">Requested</button>
      
    </div>
    <div class="col-10" style="background-color: ;">
      <div class="col-10"> <br>
        <div class="col-6"><h6 style="color:grey;">Snapbyte  >  My Recordings</h6> </div></div>
      <br>
      <div class="col-10" >
        <div class="row">
        <div class="col-3"><h4>My Recodings</h4></div>
        <div class="col-1"><h4 style="color:grey;">25</h4></div>
        <div class="col-2"><button class="fa fa-sort rounded">By Date</button></div>
        <div class="col-2"><button class="fa fa-filter rounded">Add FIlter</button></div>
        <div class="col-2"><button class="bnt btn-primary rounded">New Request</button></div>
        <div class="col-2"><button class="fa fa-save bnt btn-danger rounded" data-toggle="modal" data-target="#exampleModalCenter" type="button">

     
        Start Record</button></div>
        </div>
      </div>
<br>
        <div class="row">
        <div class="col-2"><b>Records</b></div>
        <div class="col-4"><b>Title</b></div>
        <div class="col-2"><b>View</b></div>
        <div class="col-1"><b>Size</b></div>
        <div class="col-2"><b>Last Modified</b></div>
        <div class="col-1"></div>
      </div>
      <br>
       <div class="row">
        <div class="col-2"><img width="150px" class="rounded" src="download.jpeg"></div>
        <div class="col-4"><h4>Getting my first </h4>
          <h6>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
           </div>
        <div class="col-2">320</div>
        <div class="col-1">300kb</div>
        <div class="col-2">4 month ago</div>
        <div class="col-1"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
      </div><br>

      <div class="row">
        <div class="col-2"><img width="150px" class="rounded" src="download.jpeg"></div>
        <div class="col-4"><h4>Getting my first </h4>
          <h6>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
           </div>
        <div class="col-2">320</div>
        <div class="col-1">300kb</div>
        <div class="col-2">4 month ago</div>
        <div class="col-1"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
      </div><br>
      <div class="row">
        <div class="col-2"><img width="150px" class="rounded" src="download.jpeg"></div>
        <div class="col-4"><h4>Getting my first </h4>
          <h6>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
           </div>
        <div class="col-2">320</div>
        <div class="col-1">300kb</div>
        <div class="col-2">4 month ago</div>
        <div class="col-1"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
      </div><br>
      <div class="row">
        <div class="col-2"><img width="150px" class="rounded" src="download.jpeg"></div>
        <div class="col-4"><h4>Getting my first </h4>
          <h6>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
           </div>
        <div class="col-2">320</div>
        <div class="col-1">300kb</div>
        <div class="col-2">4 month ago</div>
        <div class="col-1"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
      </div><br>
      <div class="row">
        <div class="col-2"><img width="150px" class="rounded" src="download.jpeg"></div>
        <div class="col-4"><h4>Getting my first </h4>
          <h6>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
           </div>
        <div class="col-2">320</div>
        <div class="col-1">300kb</div>
        <div class="col-2">4 month ago</div>
        <div class="col-1"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
      </div>

    </div>
</div>
  <hr>


  </body>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>