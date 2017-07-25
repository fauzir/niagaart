@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
    <section>
    <div class="container service-scope1">
        <div class="row">
          <div class="container map-info">
            <div class="row">
              <div class="col-md-7 google-map">
                <h3>CONTACT US</h3>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3961.2035280902023!2d107.5357772!3d-6.8661972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4662e1bf133%3A0xc7286f3552020388!2sNiaga+Art!5e0!3m2!1sen!2sid!4v1500448170435" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="container col-lg-5 col-md-4 address">
                <h3>OFFICE</h3>
                <br>
                <p>{{ $contact->address }}</p>
                <br>
                <p>Phone : <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                <br>
                <p>Message/Whatsapp : <a href="{{ $contact->other_phone }}">{{ $contact->other_phone }}</a></p>
                <br>
                <p>email : <a href="mailto:niagac7@gmail.com">niagac7@gmail.com</a></p>
                <br>
              @foreach($workHours as $workHour)
                <p>{{ $workHour }}</p>
                <br>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <section>
      <div class="container-fluid message-panel">
        <div class="container mailbox">
          <div class="row">
            <div class="container col-md-6 mail-panel">
              <h3>LEAVE US A MESSAGE</h3>
                    {!! Form::open(array('route' => 'send.message', 'class' => 'form message-form')) !!}
                      <div class="form-group">
                         <label for="nameField">Name</label>
                         <input type="text" class="form-control form-line" name="name" id="nameField" placeholder="Your Name" required />
                      </div>
                      <div class="form-group">
                         <label for="emailField">Email</label>
                         <input type="email" class="form-control form-line" name="email" id="emailField" placeholder="Your Email" required type="email" x-moz-errormessage="Please enter the valid email format (e.g. example@email.com)" />
                      </div>
                      <div class="form-group">
                         <label for="phoneField">Phone Number</label>
                         <input type="number" class="form-control form-line" name="phone" id="phoneField" placeholder="Your Phone Number" />
                      </div>
                      <div class="form-group">
                         <label for="descField">Message</label>
                         <textarea class="form-control" name="user_message" id="descField" placeholder="Message Here"></textarea>
                      </div>
                          {{ csrf_field() }}
                         <button type="submit" class="btn btn-block btn-send">Submit</button>
                    {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection
