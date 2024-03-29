<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>REZ-N</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css" type="text/css">
    <style>
        .navbar .navbar-nav .nav-link:not(.btn) i.fa{
          font-size: 18px;
          position: relative;
          top: 3px;
          text-align: center;
          width: 21px;
        }
      </style>
    
    </head>
    
    
    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="index.php" data-placement="bottom" target="">
                        REZ-N
                    </a>
                    
                </div>
            </div>
        </nav>
        
        <!-- End Navbar -->
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('https://cdn.allwallpaper.in/wallpapers/2400x1350/8754/music-concert-2400x1350-wallpaper.jpg');">
            
            
            </div>



            <div class="login-wrap">
                    
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Prijava</label>
                   <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registracija</label>
                   
                   
                   <div class="login-form">
                   
                        <div class="sign-in-htm">
                        <form name="login" action="validation.php" method="post">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" name="username" type="text" class="input" required>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name="lozinka" type="password" class="input" data-type="password" required>
                            </div>
                            
                            <div class="group">
                                <input type="submit" class="button" value="Prijava">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Zaboravili ste sifru ?</a>
                            </div>
                            </form>
                            
                            </div>
                        
                      
                        <div class="sign-up-htm">
                        <form name="registration" action="registration.php" method="post">
                            <div class="group">
                                
                                <label for="user" class="label">Username</label>
                                <input id="user" name="username" type="text" class="input" required>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" name="lozinka" type="password" class="input" data-type="password" required>
                            </div>
                            
                            <div class="group">
                                <label for="pass" class="label">Email Address</label>
                                <input id="pass" name="email" type="text" class="input" required>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Registriraj se">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <label for="tab-1">Imate korisnički račun? |</a>
                                    
                            </div>
                            </form> </div>
                        
                    </div>
                </div>
            </div>
        </div>
        


<footer class="footer" data-background-color="black">
    <div class="container">
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, Designed by Ivan Andrić, Jurica Ćenan, Luka Perić, Tina Petrović
        </div>
    </div>
</footer>
</div>

</body>

<!--   Core JS Files   -->
<script src="script1.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/jquery.min.js"></script>

<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/popper.min.js"></script>

<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/bootstrap.min.js"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/nouislider.min.js"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-datepicker.js"></script>
<script src="script1.js"></script>

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/now-ui-kit.js"></script>


</html>