<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials/header')
  <title>Register your Hangprinter</title>
  <style>
    .form-container{
      border: 1px solid #333;
      margin-top: 20px;
      padding: 10px;
    }
  </style>
</head>
<body>
<div class="hero__image">
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
        @include('partials/navigation')
        <div class="container">
          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
          <h3>Register</h3>
          <p>
            <div style="text-align:center">
              <div>
                Register yourself so we can keep you updated:
              </div>
                <div class="col-sm-offset-4 col-sm-4 form-container">
                  <form method="post" action="/register">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input id="nick" type="text" class="form-control" name="nick" placeholder="Your Nick (something to know you by)" autocomplete="off">
                      <span id="error_nick"></span>
                    </div>
                    <div class="form-group">
                      <input id="email" type="text" class="form-control" name="email" placeholder="Email (to notify you of community events)" autocomplete="off">
                      <span id="error_email"></span>
                    </div>
                    <div class="form-group">
                      <select id="" class="form-control" name="referrerNickId" placeholder="Nick of the person who introducted you">
                          <option value="0" default>Nick of the person who introduced you</option>
                          @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->nick}}</option>
                          @endforeach
                      </select>
                    </div>
                    <button id="register" class="btn btn-primary">Submit</button>

                  </form>
                </div>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@include('partials/footer')
</body>
<script>
$(document).ready(function() {

  $('#email').keyup(function() {

    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(!filter.test(email)) {

      $('#error').addClass('has-error');
      $('#error_email').html('<label class="text-danger">Invalid email</label>');
      $('#register').attr('disabled', 'disabled');

    } else {

      $.ajax({
        url: "checkEmailAvailable",
        method: "POST",
        data: {email: email, _token: _token},
        success: function(result) {
          if(result == 'unique') {

            $('#error_email').html('<label class="text-success">Email available</label>');
            $('#error').removeClass('has-error');
            $('#register').attr('disabled', false);

          } else {

            $('#error').addClass('has-error');
            $('#error_email').html('<label class="text-danger">Email not available</label>');
            $('#register').attr('disabled', 'disabled');

          }
        }
      })

    }

  });

  $('#nick').keyup(function() {

    var error_nick = '';
    var nick = $('#nick').val();
    var _token = $('input[name="_token"]').val();
    console.log(nick);

    $.ajax({
      url: "checkNickAvailable",
      method: "POST",
      data: {nick: nick, _token: _token},
      success: function(result) {
        if(result == 'unique') {

          $('#error_nick').html('<label class="text-success">Nick available</label>');
          $('#error').removeClass('has-error');
          $('#register').attr('disabled', false);

        } else {

          $('#error').addClass('has-error');
          $('#error_nick').html('<label class="text-danger">Nick not available</label>');
          $('#register').attr('disabled', 'disabled');

        }
      }
    });

  });

})
</script>
</html>
