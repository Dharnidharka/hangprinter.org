<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials/header')
  <title>Contribute</title>
</head>
<body>
<div class="hero__image">
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
        @include('partials/navigation')
        <div class="container" style="max-width: 600px; width: 90%">
          <h3>Thanks</h3>
          <p>
            ... for considering to contribute directly!
            By building, using, posting, and talking about Hangprinter, you're already doing what the Hangprinter Project is all about.
          </p>
          <h3>Contributing Improvements</h3>
          <p>
            The maintainers are super grateful if you make a pull request, and submit it to the repo.
            See for example <a href="https://stackoverflow.com/questions/14680711/how-to-do-a-github-pull-request#14681796">here</a> for help with doing that.
          </p>
          <p>
            If your improvement can't be structured into a pull request, the second best options are <a href="https://github.com/tobbelobb/hangprinter/issues">GitHub issues</a>, and the
            <a href="http://forums.reprap.org/read.php?1,792937,796309">forum thread</a>.
          </p>
          <h3>Supporting This Project With Money</h3>
          <p>
            Monthly donations can be set up via the <a href="https://salt.bountysource.com/teams/hangprinter">Bountysource Salt Campaign</a>.
          </p>
          <p>
            Merchandise can be bought here: <a href="http://spreadshirt.se/shops/hangprinter-merchandise">Mechadise Sweden</a>.
            And here: <a href="http://spreadshirt.com/shops/hangprinter-merchandise">Mechadise US</a>.
          </p>
          <!--p>
            Bitcoin donations are accepted on: 1BwobkC5Tb7psWkzCugtcH21ufj6Lc9mgY<br /><br />
            ... or in QR format:<br /><img alt="BTC Donations QR code" src="https://hangprinter.org/images/BTC_donations.png" />
          </p-->
          <div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
               data-address="1BwobkC5Tb7psWkzCugtcH21ufj6Lc9mgY"
               data-shared="false">
              <div class="blockchain stage-begin">
                  <img src="https://blockchain.info/Resources/buttons/donate_64.png"/>
              </div>
              <div class="blockchain stage-loading" style="text-align:center">
                  <img src="https://blockchain.info/Resources/loading-large.gif"/>
              </div>
              <div class="blockchain stage-ready">
                   <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
                   <p align="center" class="qr-code"></p>
              </div>
              <div class="blockchain stage-paid">
                   Donation of <b>[[value]] BTC</b> Received. Thank You.
              </div>
              <div class="blockchain stage-error">
                  <font color="red">[[error]]</font>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('partials/footer')
<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
</body>
<script>
$(document).ready(function(){
  $('#nav_contribute').addClass('active');
});
</script>
</html>
