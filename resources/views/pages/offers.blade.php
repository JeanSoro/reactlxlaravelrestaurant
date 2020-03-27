@extends('layouts.app')

@section('content')
  <div id="offers-page">
      <div class="content-box">
          <div class="row">
              <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Sign Up for Special Offers</h1>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstnameinput">First Name</label>
                          <input type="text" class="form-control" id="firstnameinput" placeholder="mr" name="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastnameinput">Last Name</label>
                          <input type="text" class="form-control" id="lastnameinput" placeholder="bison" name="lname">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="emailinput">Email address</label>
                          <input type="email" class="form-control" id="emailinput" placeholder="name@email.com" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="phoneinput">Phone Number</label>
                          <input type="text" class="form-control" id="phoneinput" placeholder="416-333-4567" name="phone">
                        </div>
                    </div>
                  </div>

                   <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis eos quibusdam harum voluptatum vitae nostrum obcaecati veritatis laborum. Nemo, tenetur?</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                        </div>
                     </div>
                   </div>

                  </form>
            </div>
        </div>
      </div>
  </div>
  
@endsection