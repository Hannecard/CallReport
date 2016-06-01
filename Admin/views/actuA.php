<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aministration || Accueil</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    <div id="wrapper">

        <?php

    include("navigation.php");


    ?>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">





                         <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title text-center">Vos actualités</h4>
                            </div>
                            <div class="panel-body">


                               <?php

                               if($notif==1){

                                echo "<div class='alert alert-success'>
                                <strong>Ajout réussi ! </strong> Votre actualité a bien été ajouté a votre site.
                            </div>";
                        }

                        if($notif==0)
                        {

                            echo"<div class='alert alert-info'>
                            <strong>Informations! </strong> Veuillez remplir les champs afin d'ajouter une actualité.
                        </div>";
                    }

                    if($notif==2)
                    {

                        echo"<div class='alert alert-danger'>
                        <strong>Attention! </strong> Une erreur c'est produite veuillez recommencer l'ajout.
                    </div>";
                }



                ?>

                <form  method="POST" enctype="multipart/form-data">

                  <div class="form-group">

                     <label for="exampleInputEmail1">Titre</label>


                     <input type='text' name='titre' class='form-control' id='exampleInputEmail1' required>



                 </div>
                 
                 <div class="form-group">

                    <label for="exampleInputPassword1">Texte</label>


                    <textarea class='form-control' name="contenu" rows='15' required></textarea>

                </div>

                    <label for="exampleInputPassword1">Choisir une photo pour réprésenter cette actualité</label>


                <input type="hidden" name="" value="" />
                  <input type="file" name="monfichier" value="154857600" required/><br>


                <button type="submit" name="ajout" id="ajout" class="btn btn-success">Ajouter</button>



            </form>






        </div>
    </div>



</div>
</div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
