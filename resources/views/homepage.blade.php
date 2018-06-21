<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials/header')
  <title>Hangprinter</title>
  <style>
    body{
        overflow: hidden;
    }
    div#preloader { position: fixed; left: 0; top: 0; z-index: 999; width: 100%; height: 100%; overflow: visible; background: #333 url('images/loading.gif') no-repeat center center; }
  </style>
</head>
<body>
<div id="preloader"></div>
<div class="hero__image">
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
        @include('partials/navigation')
        <div id = "threejs"></div>
      </div>
    </div>
  </div>
</div>
<script src="js/three.js"></script>
<script src="js/STLLoader.js"></script>
<script src="js/OrbitControls.js"></script>
<script src="js/Detector.js"></script>
<script src="js/hangprinter_loader.js"></script>
@include('partials/footer')
</body>
</html>
