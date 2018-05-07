<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-4 bg-image" style="background-image: url({{asset('images/bg_3.jpg')}});"></div>
          <div class="col-lg-8 p-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <small>CLOSE </small><span aria-hidden="true">&times;</span>
            </button>
            <h1 class="mb-4">Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">First Name</label>
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="col-md-6 form-group">
                  <label for="surname">Last Name</label>
                  <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
                  @if ($errors->has('surname'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('surname') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="surname">Birthday</label>
                  <input id="birthday" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required autofocus>
                  @if ($errors->has('birthday'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('birthday') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="col-md-6 form-group">
                  <label for="phone">Phone Number</label>
                  <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                  @if ($errors->has('phone'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
                </div>
              </div>


              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="address">Address</label>
                  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>
                  @if ($errors->has('address'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
                </div>

              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="city">City</label>
                  <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                  @if ($errors->has('city'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('city') }}</strong>
                      </span>
                  @endif
                </div>

              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="password">Pasword</label>

                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>

              </div>

              <div class="row">

                <div class="col-md-12 form-group">

                  <label for="password-confirm" >{{ __('Confirm Password') }}</label>


                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                </div>

              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register Now">
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- END Modal -->
