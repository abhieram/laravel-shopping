<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.partials.adminhead')
 </head>
 <body>
    @include('layouts.partials.adminsidebar')
    @yield('content')
    @include('layouts.partials.adminfooter-script')
 </body>
</html>