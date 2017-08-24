@extends('layouts.app')

@section('title')
<title>NiagaArt | Contact</title>
@endsection

@section('content')
    <section>
    <div class="container service-scope1">
    @if (Session::has('flash_message'))
          <div class="container" style="margin-top: 100px;">
              <div class="alert alert-success fade in">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ Session::get('flash_message') }}
              </div>
          </div>
      @endif
        <div class="row">
          <div class="container map-info">
            <div class="row">
              <div class="col-md-7 google-map">
                <h1>@lang('content.contact-us')</h1>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3961.2035280902023!2d107.5357772!3d-6.8661972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4662e1bf133%3A0xc7286f3552020388!2sNiaga+Art!5e0!3m2!1sen!2sid!4v1500448170435" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="container col-lg-5 col-md-4 address">
                <h3>@lang('content.office-contact')</h3>
                <br>
                <p class="wow fadeInUp">{{ $contact->address }}</p>
                <br>
                <p class="wow fadeInUp">@lang('content.phone') : <a href="tel:{{ str_replace (" ", "", $contact->phone) }}" title="Contact Phone | Niaga Art">{{ $contact->phone }}</a></p>
                <br>
                <p class="wow fadeInUp">@lang('content.message') : <a href="tel:{{ str_replace (" ", "", $contact->other_phone) }}" title="Contact Message | Niaga Art">{{ $contact->other_phone }}</a></p>
                <br>
                <p class="wow fadeInUp">@lang('content.email') : <a href="mailto:{{ $contact->email }}" title="Contact Email | Niaga Art">{{ $contact->email }}</a></p>
                <br>
              @foreach($workHours as $workHour)
                <p class="wow fadeInUp">{{ $workHour }}</p>
                <br>
              @endforeach
                <div class="address-socicon wow fadeInRight">
                  @foreach ($socials as $social)
                    <a href="{{ url($social->url) }}" title="{{ $social->name }} | Niaga Art" target="_blank"><i class="{{ $social->icon }}"></i></a>
                    &nbsp;&nbsp;
                  @endforeach
                </div>
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
              <h3>@lang('content.leave-message')</h3>
              <br>
                    {!! Form::open(array('route' => 'send.message', 'class' => 'form message-form')) !!}
                      <div class="form-group">
                         <label for="nameField">@lang('content.name')</label>
                         <input type="text" class="form-control form-line" name="name" placeholder="Your Name" id="nameField" required />
                      </div>
                      <div class="form-group">
                         <label for="emailField">@lang('content.email')</label>
                         <input class="form-control form-line" name="email" placeholder="Your Email" id="emailField" required type="email" x-moz-errormessage="Please enter the valid email format (e.g. example@email.com)" />
                      </div>
                      <div class="form-group">
                         <label for="phoneField">@lang('content.phone-number')</label>
                         <input type="number" class="form-control form-line" name="phone" placeholder="Your Phone Number" id="phoneField" />
                      </div>
                      <div class="form-group">
                         <label for="descField">@lang('content.message')</label>
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
