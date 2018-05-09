<!DOCTYPE html>
<html lang="en">

  @include('layout.head')
  <body class="{{Request::is('/') ? '' : 'black-text-color' }}" data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    @include('layout.nav')

        @yield('content')

    @include('layout.footer')

    @if (Request::is('/'))
      @include('modals.reservation')
    @endif
    @guest
      @include('modals.login')
      @include('modals.register')
    @endguest
    @include('layout.scripts')
  </body>
</html>
