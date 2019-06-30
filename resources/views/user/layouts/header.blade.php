<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ route('user.home') }} ">Logo</a>  <!--href="{{ URL::to('home') }}-->
    </div>

    <!--<div class="collapse navbar-collapse" id="myNavbar">-->
      <ul class="nav navbar-nav navbar-left">
        <li><a href="{{ URL::to('home') }}">HOME</a></li>
        <li><a href="{{ route('user.account') }}">Account Information</a></li>
        <li><a href="{{ route('user.request') }}">Request Loan</a></li>
        <li><a href="{{ route('user.request') }}">Loan Status</a></li> 
        <li><a href="{{ route('user.recharge') }}">Cash In</a></li> 
        <li><a href="{{ route('user.deposite') }}">Add Deposite</a></li> 



      
          </ul>
        </li>
      </ul>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">More
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('user.profile') }}">Profile</a></li>
            <li>
                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Logout
                </a>

                 <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('logout') :   route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                </form>
             </li>     
      </ul>
    </div>
  </div>
</nav>