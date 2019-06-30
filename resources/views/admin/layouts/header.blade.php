<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ URL::to('admin/home') }}">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('admin/home') }}">HOME</a></li>
        <li><a href="{{ route('admin.loanstatus') }}">Loan</a></li>
        <li><a href="{{ route('admin.user') }}">Add User</a></li>
        <li class="dropdown">
        
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          
              <!--  <li><a href="{{ route('admin.register') }}">Staff Add</a></li> -->
             <!--   <li><a href="{{ URL::to('admin/user') }}"> User Add</a></li>  -->
               
             <!--  {{ Auth::user()->name }} -->
                   <li><a href="{{ route('admin.profile') }}">Profile</a></li>
                 <!--     <li><a href="{{ route('admin.register') }}">Create Staff</a></li> -->
   
             <li>
                             <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                      Logout
                              </a>

                                        <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </li>             
              
          <!--
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
            -->
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>