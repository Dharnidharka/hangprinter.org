<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html"
            doctype-system="about:legacy-compat"
            encoding="UTF-8"
            indent="yes" />
<xsl:template match="/">
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Hangprinter v3 Assembly Manual" />
  <meta name="author" content="tobben and the Hangprinter Community" />
  <link rel="icon" href="https://hangprinter.org/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
  <title>Hangprinter Assembly</title>
  <!-- Bootstrap core CSS -->
  <link href="https://hangprinter.org/css/bootstrap.min.css" rel="stylesheet" />
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="https://hangprinter.org/css/ie10-viewport-bug-workaround.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="https://hangprinter.org/css/cover.css" rel="stylesheet" />
  <link href="manual_style.css" rel="stylesheet" />
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js" />
  <style>
    .zero-padding{
      padding-left: 0px;
      padding-right: 0px;
    }
    @media (min-width: 500px) {
      #manual-container{
        margin-top: 0px;
        width: 600px;
      }
    }
  </style>

  <meta name="keywords" content="Reprap, Manual, Hangprinter" />
  <link href="https://hangprinter.org/doc/v3/feed.xml" rel="alternate" type="application/rss+xml" title="Hangprinter v3 Manual" />
  <xsl:choose>
    <xsl:when test="page/@mathjax">
      <script type="text/javascript"
               src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_HTML">
      </script>
    </xsl:when>
  </xsl:choose>
</head>
<body>
<div class="hero__image">
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand">
              <a href="../../" style="text-decoration: none; color: #000;">
                <img src="https://hangprinter.org/images/logo1.png" style="height: 50px; width: 50px; margin-top: -15px; margin-right: 10px;" />Hangprinter
              </a>
            </h3>
            <nav>
              <ul class="nav masthead-nav">
                <li id="nav_documentation"><a href="../v3">Documentation</a></li>
                <li id="nav_contribute"><a href="../../contribute">Contribute</a></li>
                <li id="nav_contact"><a href="../../contact">Contact</a></li>
                <li id="nav_about"><a href="../../about">About</a></li>
                <li id="nav_blog"><a href="../../show_blog">Blog</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div id="manual-container" class="container">
          <div class="row">
            <h3>Hangprinter v3 Assembly Manual</h3>
            <figure>
              <a href="../v3"><img src="./media/logo-banner.png" alt="" /> </a>
            </figure>
            <xsl:for-each select="page/post">
              <h3><xsl:attribute name="id" > <xsl:value-of select="./@id" /></xsl:attribute>
                <a><xsl:attribute name="href">#<xsl:value-of select="./@id" /></xsl:attribute><xsl:value-of select="./@heading" /></a>
              </h3>
              <div class="zero-padding">
                <xsl:copy-of select="./*" />
              </div>
            </xsl:for-each>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<xsl:choose>
  <xsl:when test="page/@mathjax">
    <script type="text/javascript">
      MathJax.Hub.Configured()
    </script>
  </xsl:when>
</xsl:choose>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"></script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
<script>
  $(document).ready(function(){
    $('#nav_documentation').addClass('active');
  });
</script>
</html>
</xsl:template>
</xsl:stylesheet>
