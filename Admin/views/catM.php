
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Hannecard - Administrateur</title>
  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->
  <!-- CORE CSS-->    
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/media-hover-effects.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/magnific-popup/magnific-popup.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>        
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
      <nav class="teal lighten-3">
        <div class="nav-wrapper">                        
          <ul class="left">                      
            <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1">Hannecard</h1></li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
            <i class="mdi-action-search"></i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Rechercher"/>
          </div>
          <ul class="right hide-on-med-and-down">                        
            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
            </li>
            <li><a href="logout.php" class="waves-effect waves-block waves-light"><i class="mdi-action-lock-outline"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- end header nav-->
  </header>
  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="images/Hannecard.gif" alt="" class="circle responsive-img valign profile-image">
              </div>
              <div class="col col s8 m8 l8">
                <a class="btn-flat waves-effect waves-light white-text profile-btn" href="#" >Nom</a>
                <p class="user-roal">Administrateur</p>
              </div>
            </div>
          </li>
          <li class="bold active"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Catégories</a>

          </li>



          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> Ajout</a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="index.php?page=categorieG">Catégorie</a>
                    </li>                                        
                    <li><a href="css-icons.html">Utilisateur</a>
                    </li>
                    <li><a href="css-shadow.html">Projet</a>
                    </li>

                  </ul>
                </div>
              </li>




            </ul>
          </li>

        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <div class="container">

       <div id="basic-form" class="section">
        <div class="row">
          <div class="col s12 m12 l6">
            <div class="card-panel">
              <h4 class="header2">Modification catégorie</h4>
              <div class="row">
                <form class="col s12" enctype="multipart/form-data" method="POST" action="">
                  <div class="row">
                    <div class="input-field col s12">
                      <?php

                      echo"<input id='name' type='text' name='nom' value=".$nom.">";




                      ?>

                    </div>
                    <div class="browser-default col s8">
                      <select name="parent_category">
                        <option  ><?php echo $cat_parent; ?></option>
                        <?php


                        foreach ($all_parent as $a) {
                          echo"<option value=".$a->id.">".$a->lib."</option>";


                        }



                        ?>
                        <label>Catégorie Mère (optionnelle) </label>
                      </select>

                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Image</span>
                          <input type="file" name="Image">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="modif">Modifier
                          <i class="mdi-content-send right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>



          </div>






        </div>


      </div>
    </div>
  </div>



</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END WRAPPER -->
</div>
<!-- END MAIN -->

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- masonry -->
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>    
    <!-- magnific-popup -->
    <script type="text/javascript" src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>

    <script type="text/javascript">
      /*
       * Masonry container for Gallery page
       */
       var $containerGallery = $(".masonry-gallery-wrapper");
       $containerGallery.imagesLoaded(function() {
        $containerGallery.masonry({
          itemSelector: '.gallary-item img',
          columnWidth: '.gallary-sizer',
          isFitWidth: true
        });
      });

      //popup-gallery
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: true,    
        fixedContentPos: true,
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          verticalFit: true,
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          },
          zoom: {
            enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
      }
    });
    </script>
  </body>


  <!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout01/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 10:49:05 GMT -->
  </html>


