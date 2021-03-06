<body>
	{{-- NAVBAR --}}
	<div class="container-fluid">
   
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Asset Management</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="{{url('add/asset')}}">Add Asset</a></li>
            <li><a href="{{url('all/assets')}}">Assets</a></li>
            
            <li><a href="{{url('all/maintenance')}}">Maintenance History</a></li>
          {{--   <li><a href="#">Contracts</a></li> --}}
            <li><a href="{{url('transaction/all')}}">Transaction History</a></li>
            @if(Auth::check())
              @if(Auth::user()->role=="admin")
              <li><a href="{{url('user/actions')}}">Users</a></li>
              @endif
            <li><a href="{{url('logs')}}">Logs</a></li>
              <li><a href="{{url('auth/logout')}}">Logout</a></li>
            @endif
            <li>
              <a href="{{url('search')}}" class="btn">Search</a>
              
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-left " id="nav-collapse3">
           {{-- @include('search') --}}
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
 
</div><!-- /.container-fluid -->

	{{-- NAVBAR --}}
	<div class="container">
		@yield('content')
	</div>
</body>