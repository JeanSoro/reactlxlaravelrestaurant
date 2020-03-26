@extends('layouts.app')

@section('content')
  <div id="waitlist-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-6">
                <h1>Get on the list</h1>
                <form>
                    <div class="form-group">
                      <label for="emailinput">Email address</label>
                      <input type="email" class="form-control" id="emailinput" placeholder="name@email.com" name="email">
                    </div>
                    <div class="form-group">
                      <label for="phoneinput">Phone Number</label>
                      <input type="text" class="form-control" id="phoneinput" placeholder="416-333-4567" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="guestsinput">How Many Guests</label>
                      <select class="form-control" id="guestsinput" name="guests">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Select Time</label>
                        <select class="form-control" id="timeinput" name="time">
                          <option value="6">6:00pm</option>
                          <option value="7">7:00pm</option>
                          <option value="8">8:00pm</option>
                          <option value="9">9:00pm</option>
                          <option value="10">10:00pm</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                      </div>
                  </form>
            </div>
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iste cumque fuga. Numquam voluptas impedit debitis consectetur praesentium aliquid fuga.</p>
            </div>
        </div>
      </div>
  </div>
  
@endsection