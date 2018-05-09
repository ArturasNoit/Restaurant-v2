<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-4 bg-image" style="background-image: url({{asset('images/bg_3.jpg')}});"></div>
          <div class="col-lg-8 p-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <small>CLOSE </small><span aria-hidden="true">&times;</span>
            </button>
            <h1 class="mb-4">Reserve A Table</h1>

            <form action="{{route('reservations.store')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">First Name</label>
                  <input type="text" name="name" value="{{Auth::check() ? Auth::user()->name : '' }}" class="form-control" id="name">
                </div>
                <div class="col-md-6 form-group">
                  <label for="surname">Last Name</label>
                  <input type="text" name="surname" value="{{Auth::check() ? Auth::user()->surname : '' }}" class="form-control" id="surname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" value="{{Auth::check() ? Auth::user()->email : '' }}" class="form-control" id="email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="people_amount">How Many People</label>
                  <select name="people_amount" id="people_amount" class="form-control">
                    <option value="1">1 People</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                    <option value="5">5 People</option>
                    <option value="6+">6+ People</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" value="{{Auth::check() ? Auth::user()->phone : '' }}" class="form-control" id="phone">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="m_date">Date</label>
                  <input type="text" name="date" class="form-control" id="m_date">
                </div>
                <div class="col-md-6 form-group">
                  <label for="m_time">Time</label>
                  <input type="text" name="time" class="form-control" id="m_time">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
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
