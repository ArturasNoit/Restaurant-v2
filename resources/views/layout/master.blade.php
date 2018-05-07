<!DOCTYPE html>
<html lang="en">

  @include('layout.head')
  <body class="{{Request::is('/') ? '' : 'black-text-color' }}" data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    @include('layout.nav')

        @yield('content')

    @include('layout.footer')

    @include('modals.reservation')
    @include('modals.login')
    @include('modals.register')
    @include('layout.scripts')
  </body>
</html>
