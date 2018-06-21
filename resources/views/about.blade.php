<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
    <title>About Hangprinter</title>
    <style>
  .zero-padding{
    padding-left: 0px;
    padding-right: 0px;
  }
  @media (min-width: 768px) {
    #about-container{
      margin-top: 0px;
    }
  }
</style>
</head>
<body>
<div class="hero__image">
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
        @include('partials/navigation')
        <div id="about-container" class="container">
          <div class="row">
            <h3>The Hangprinter Community</h3>
          </div>
          <div class="row">
            <div class="col-sm-4 hidden-xs zero-padding">
              <img class="img-responsive" src="images/team2.jpg" style="width:100%; ">
            </div>
            <div class="col-sm-4 zero-padding">
              <img class="img-responsive" src="images/team4.jpg" style="width:100%; ">
            </div>
            <div class="col-sm-4 hidden-xs zero-padding">
              <img class="img-responsive" src="images/team3.jpg" style="width:100%; ">
            </div>
          </div>
          <div class="row" style="font-size:1.2em;">
            <div class="col-xs-12 col-sm-6 text-left">
              <br />
              We're the ones doing frameless free form fabrication.<br />
              We make the machines for our friends.<br /><br />

              We're having fun designing clone explosions.<br />
              We design machines to be forwarded again.<br /><br />

              We're always developing the next version,<br />
              because that one is always the best.<br /><br />

              We hope you'll find a way into our community,<br />
              and that your contributions will add upp with the rest.<br /><br />

              Best regards,<br />
              Tobben<br />
              the early Hangprinter Community<br /><br />
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
              <br />Active links related to the project<br />
              <a href="https://vitana.se/opr3d/tbear">Tobben's Dev Blog</a><br />
              <a href="https://salt.bountysource.com/teams/hangprinter">Bountysource Salt Campaign</a><br />
              <a href="https://github.com/tobbelobb/hangprinter/tree/Openscad_version_3">Source code Hangprinter v3</a><br />
              <a href="https://docs.google.com/spreadsheets/d/1lOPZoF1P2OSdJcijZRVrwAEVFh3LLAnf6-s6k-hlbZU/edit#gid=0">BOM spreadsheet for v3</a><br />
              <a href="http://forums.reprap.org/read.php?1,792937,796309">Forum thread for v3</a><br />
              <a href="https://www.facebook.com/groups/hangprinter">Facebook group</a><br />
              <a href="https://github.com/Dharnidharka/hangprinter.org">Source of hangprinter.org</a><br />
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
              <br />Links of Historical Interest<br />
              <a href="http://forums.reprap.org/read.php?178,344022">Forum thread for version 1</a><br />
              <a href="http://forums.reprap.org/read.php?1,738858">Forum thread for version 2</a><br />
              <a href="http://www.appropedia.org/Clerck,_a_RepRap_3D_printer_hanging_from_the_ceiling#Costs">BOM for version 2</a><br />
              <a href="https://github.com/tobbelobb/hangprinter/tree/Version_2">Source code Hangprinter v2</a><br />
            </div>
          </div>
  		    <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('partials/footer')
</body>
<script>
$(document).ready(function(){
  $('#nav_about').addClass('active');
});
</script>
</html>
