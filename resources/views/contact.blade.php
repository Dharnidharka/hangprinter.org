<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials/header')
  <title>Hangprinter</title>
</head>
<body>
<div class="hero__image">
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
        @include('partials/navigation')
        <div class="container">
          <h3>Channels</h3>
          <p>
            <div style="text-align:center">
                <a href="https://www.facebook.com/groups/hangprinter">Facebook group</a><br />
                <a href="http://forums.reprap.org/read.php?1,792937">Forum thread for version 3</a><br />
                <a href="https://github.com/tobbelobb/hangprinter">Github</a><br />
                <a href="/register">Register your hangprinter</a><br />
            </div>
          </p>
          <h3>Lead Developer</h3>
          <p>
            <div style="text-align:center">
                <a href="mailto:tobben@hangprinter.org">tobben@hangprinter.org</a>
            </div>
          </p>
          <div class="row" style="margin-top: 20px;">
            <div class="col-xs-12"><i>For any web-related queries, please contact <a href="http://www.itsdharni.com" style="text-decoration: none;">hello@itsdharni.com</a></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('partials/footer')
</body>
<script>
$(document).ready(function(){
  $('#nav_contact').addClass('active');
});
</script>
</html>
