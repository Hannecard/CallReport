<!DOCTYPE html>
<html>
<head>
  <?php
   include("inc/link.php");
  ?>
</head>
<body>
  <!--Loader-->
  <?php
   include("inc/loader.php");
  ?>
  <!--Fin Loader-->
  <!--Parallax header-->
  <div class="parallax-container para-theme">
    <div class="parallax" ><img src="images/HANNECARD 002.jpg"></div>
  </div>
  <div class="grey-text text-lighten-4 titre-page cat">
    <div>Hannecard</div>
    <div class="titre_ital">CallReport</div>
  </div>
  <!--Fin Parallax-->
  <!--Menu-->
  <div id="siteWrapper">
  <header>
    <?php
   include("inc/header.php");
    ?>
  </header>
  <section id="content">
  <!--Fin menu-->
  <div style="margin: 0 auto; width: 50%;">
    <a href='#modalAJpb'  class="btn waves-effect waves-light modal-trigger" style="display: block; width: 250px; margin: 0 auto; margin-top: 20px;">Ajouter un Pense-Bête</a>
  </div>
  <!--Filtres-->
   <?php
   include("inc/filtres.php");
    ?>
  <!--Fin Filtres-->
  <!--Contenu-->
  <div class="content-projet">
    <div class="galerie">
    <h2>Pense-Bête</h2>
    </div>
     <ul class="collection collapsible" data-collapsible="accordion">
     <?php
    foreach ($pensebete as $p) {
      echo"
      <li class='collection-item avatar'>
            <div class='collapsible-header'>
                <span class='idpb' style='display:none;'>".$p->id_pense_bete."</span>
                <span class='title'>".$p->titre."</span>
                <p class='infopb'>
                    A finir pour le : <span class='spandate'>".$p->date_pense_bete."</span>.
                </p>
                <p style='text-align:justify;margin:15px 0;' class='infodescrpb'>
                ".$p->text_pense_bete.".
                </p>
                <a class='secondary-content deuxiemeraccourcis tooltipped delpb' data-position='bottom' data-delay='50' data-tooltip='Supprimer'><i class='material-icons'>delete</i></a>
                <a href='#!' class='secondary-content troisiemeraccourcis tooltipped' data-position='bottom' data-delay='50' data-tooltip='Contact'><i class='material-icons'>perm_phone_msg</i></a>
            </div>
            <div class='collapsible-body'>
                <ul>
                    <li><a class='btn-floating red tooltipped' data-position='bottom' data-delay='50' data-tooltip='Statistiques'><i class='material-icons'>insert_chart</i></a></li>
                    <li><a href='#modalUpPenseBete' class='btn-floating yellow darken-1 tooltipped modal-trigger btnuppensebete' data-position='bottom' data-delay='50' data-tooltip='Modifier'><i class='material-icons'>format_quote</i></a></li>
                    <li><a class='btn-floating green tooltipped' data-position='bottom' data-delay='50' data-tooltip='Exporter/Excel'><i class='material-icons'>publish</i></a></li>
                    <li><a class='btn-floating blue tooltipped'data-position='bottom' data-delay='50' data-tooltip='Joindre un fichier'><i class='material-icons'>attach_file</i></a></li>
                </ul>
            </div>
        </li>
      ";
    }
    ?>
    </ul>
      </div>
    </div>
  <?php
   include("inc/modalPenseBete.php");
   include("inc/footer.php");
 ?>
  </section>
</div>
   <!--Import jQuery before materialize.js-->
 <?php
   include("inc/javascript.php");
 ?>
</body>
</html>
