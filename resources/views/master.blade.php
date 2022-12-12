<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('headers')

  <body>
    @include('testing.photo_header')
    
    @include('buttons')
    @include('searchbox')

    @if(Session::has('success'))
        <div class="alert alert-success mt-4 mx-5">
            {{Session::get('success')}}
        </div>
    @elseif(Session::has('errors'))
        <div class="alert alert-danger mt-4 mx-5">
            {{Session::get('errors')}}
        </div>
    @endif
    {{-- @include('navbar') --}}

    @yield('content')

    {{-- @include('footer') --}}

    @yield('style')

    @include('scripts')

    @yield('js')

  </body>
</html>
