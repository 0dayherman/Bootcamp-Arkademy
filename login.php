
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panda Security">
    <meta name="author" content="Hermansyah">
    <meta name="keyword" content="Panda Security">
    <link rel="shortcut icon" href="http://localhost/php/crud/assets/img/pandasec.png">
    <title>PandaSec | Signin</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="http://localhost/php/crud/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/php/crud/assets/css/pandasec.min.css" rel="stylesheet">
    <link href="http://localhost/php/crud/assets/css/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="https://kodergelo.com/rsrc.php/kg-assets/css/nifty/nifty-demo.min.css" rel="stylesheet">
    <link href="https://kodergelo.com/rsrc.php/kg-assets/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <link href="https://kodergelo.com/rsrc.php/kg-assets/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="https://kodergelo.com/rsrc.php/kg-assets/plugins/pace/pace.min.js"></script>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/jquery.min.js"></script>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/bootstrap.min.js"></script>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/nifty.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/html5shiv.js"></script>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
      canvas{
        display:block;
        vertical-align:bottom;
      }
     /* ---- particles.js container ---- */

      #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,.1);
        background-image: url("");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50% 50%;
      }
    </style>
  </head>
  <body>
  <div id="container" class="cls-container aside-float footer-fixed">
   <div id="particles-js"></div>
    <div class="cls-content">
        <div class="cls-content-sm panel">
          <img src="https://kodergelo.com/rsrc.php/kg-assets/images/kodergelo.png" style="height: 100px;">
                          <div class="panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h1 class="h3">Account Login</h1>
                    <p>Sign In to your account</p>
                </div>
                          <form class="form-signin" action="http://localhost/php/crud/authentication.php" method="POST">
                              <div class="form-group">
                                  <input type="hidden" class="form-control" value="f93fd12da157312dd2dc655caad79ac3" name="xcsrf">
                                  <input type="text" class="form-control" placeholder="Username or Email" id="uname" name="uname" autofocus>
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Password" id="passwd" name="passwd">
                                                              </div>
                              <div class="checkbox pad-btm text-left">
                                  <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                                  <label for="demo-form-checkbox">Remember me</label>
                              </div>
                              <button class="btn btn-danger btn-lg btn-block" type="submit" id="signin" name="signin">Sign In</button>
                          </form>
            </div>
            
          </div>
        </div>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
              </div>
            </div>
          </div>
        </form>
        </div>
                <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                Powered By <a href="#" class="text-main"><span class="badge badge-danger">KoderGelo</span></a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                Powered By <a href="#" class="text-main"><span class="badge badge-danger">KoderGelo</span></a>
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="show-fixed pad-lft pull-left">KoderGelo &#0169; 2017 All Rights Reserved</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
 <script type="text/javascript">
  function ambilcoin() {
    var a = '/action/coin.php?coin=1';
    $("#cre").load(a);
  }
  setInterval(ambilcoin,3000);
  // Google Analytic
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81912842-1', 'auto');
  ga('send', 'pageview');
  // Popcash
  var uid = '119734';
  var wid = '257372';
  </script>
  <button class="scroll-top btn">
    <i class="pci-chevron chevron-up"></i>
  </button>    </div>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/particles.js"></script>
    <script src="https://kodergelo.com/rsrc.php/kg-assets/js/app.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
         $('#uname,#passwd').val('');
        });
        $(document).ready(function(){
            $('#signin').attr('disabled', true);
            if($('#uname').val().trim() === '' || $('#passwd').val().trim() === ''){
                $('#signin').attr('disabled', true);
            } else if($('#uname').val().trim() !== '' && $('#passwd').val().trim() !== ''){
                $('#signin').attr('disabled', false);
            }
            $('#uname,#passwd').keyup(function(){
            if($('#uname').val().trim() === '' || $('#passwd').val().trim() === ''){
                $('#signin').attr('disabled', true);
            } else {
                $('#signin').attr('disabled', false);
            }
          });
        });
    </script>
  </body>
</html>