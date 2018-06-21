<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
@include('partials/header')
<title>Hangprinter Blog</title>

</head>
<body style="height: 100%; overflow: hidden;">
<div class="hero__image" style="height: 100%; width: 100%">
  <div class="site-wrapper" style="height: 100%; width: 100%">
    <div class="site-wrapper-inner" style="height: 100%; width: 100%">
      <div class="cover-container" style="height: 100%; width: 100%">

        @include('partials/navigation')

        <div class="row" id="blog"  style="position: absolute; height: calc(100% - 90px); width: calc(100% + 30px); bottom: 0px; right: 0px;">
  			  <div class="col-xs-12" style="height: 100%">
  				  <iframe src = "https://vitana.se/opr3d/tbear/" style="width: 100%; height: 100%; margin-top: 0px; margin-bottom: 0px" />
  			  </div>
		    </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
@include('partials/footer')
<script>
$(document).ready(function(){
  $('#nav_blog').addClass('active');
});
</script>
</body>
</html>
