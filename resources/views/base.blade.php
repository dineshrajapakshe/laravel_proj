<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Ticket Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
   @if ((Auth::user()->user_level) == '3')
    <li class="nav-item active">
      <a class="nav-link" href="/tickets">All Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/tickets/create">Create Jobs</a>
    </li>
     <li class="nav-item">
       <a class="nav-link" href="/password/reset">Edit Profile</a>
     </li>
     @endif
     @if ((Auth::user()->user_level) == '2')
         <li class="nav-item active">
           <a class="nav-link" href="/tickets">All Ticket</a>
         </li>

     @endif
     @if ((Auth::user()->user_level) == '1')
        <li class="nav-item active">
         <a class="nav-link" href="/tickets">All Tickets</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/tickets/create">Create Tickets</a>
       </li>
        <li class="nav-item">
          <a class="nav-link" href="/sysuser/create">Add User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/departments/create">Add Department</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/departments">All Department</a>
        </li>
     @endif
  </ul>
</nav>
  <div class="container">
    @yield('main')
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
