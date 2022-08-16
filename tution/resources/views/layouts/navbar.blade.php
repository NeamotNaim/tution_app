
<div class="container "  >
            <div class="menubar py-2">
                <nav class="navbar navbar-expand-lg navbar-light nav-sticky fs-5 ">
                    <img src="img/logo.png" style="height: 30px;" class="image-fluid;" alt="">
                    <div class="p-2 bg-primary " style="border-radius: 10px; color:#fff">
                      <a class="navbar-brandv" href="{{url('/')}}"><b>Tuition/Tutor</b></a>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto text-center ">
                        <li class="nav-item active " style="margin-left:5px; background-color:rgb(204, 203, 203); border-radius: 5px; color:rgb(0, 0, 0)">
                            <a class="nav-link mr-4" href="{{url('/')}}">Home<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item mr-4" style="margin-left:5px; background-color:rgb(204, 203, 203); border-radius: 5px; color:rgb(0, 0, 0)">
                            <a class="nav-link" href="{{route('reqTutor')}}">Request a tutor</a>
                        </li>
                        <li class="nav-item mr-4" style="margin-left:5px; background-color:rgb(204, 203, 203); border-radius: 5px; color:rgb(0, 0, 0)">
                            <a class="nav-link" href="{{route('findTuition')}}">Tuition</a>
                        </li>
                        <li class="nav-item mr-4" style="margin-left:5px; background-color:rgb(204, 203, 203); border-radius: 5px; color:rgb(0, 0, 0)">
                            <a class="nav-link" href="{{route('searchPage')}}">Search</a>
                        </li>
                        
                        <li class="nav-item mr-4" style="margin-left:5px; background-color:rgb(204, 203, 203); border-radius: 5px; color:rgb(0, 0, 0)">
                            <a class="nav-link" href="{{route('aboutUs')}}">About us</a>
                        </li>

                    </ul>
                    {{-- <form class="form-inline my-2 my-lg-0">

                        <button class=" search-btn btn btn-basic-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form> --}}
                    </div>
                </nav>
            </div>
        </div>

  