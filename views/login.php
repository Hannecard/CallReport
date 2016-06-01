<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/materialize.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>
<body style="display: block;">
    <div class="slider z-depth-3">
        <ul class="slides">
            <li>
                <img src="images/intro.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Hannecard</h3>
                    <h4>CallReport</p>
                    </div>
                </li>
                <li>
                    <img src="images/intro.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Hannecard</h3>
                        <h4>CallReport</p>            </div>
                        </li>
                        <li>
                            <img src="images/intro.jpg"> <!-- random image -->
                            <div class="caption right-align">
                                <h3>Hannecard</h3>
                                <h4>CallReport</p> 
                                           </div>
                                </li>
                            </ul>
                        </div>

<div class="card">
    <div class="card-content">
        <form class = "formco col s12" action="" method="POST">
           <div class="row title">
            <h1 class="teal-text text-lighten-2">Connexion</h1>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="e-mail" id="e-mail" name="mail" type="text" class="validate">
                <label for="e-mail">Identifiant</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" name="mdp" class="validate">
                <label for="password">Mot de passe</label>
            </div>
        </div>
        <div class="row btnconf">
            <button class="btn waves-effect waves-light " type="submit" name="login">
                Confirmer
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
    <div class="card-action">
        <a class="mdpoublie teal-text text-lighten-2" href="#">Mot de passe perdu</a>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>

    $(document).ready(function () {
        $('.slider').slider({ full_width: true });

        $(".button-collapse").sideNav();

        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
        );
        $('.collapsible').collapsible({
            accordion: true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
        $('.collapsibleFiltre').collapsible({
            accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
        $(document).ready(function () {
            $('select').material_select();
        });

        $('.datepicker').pickadate({ selectYears: 20 });

    });

    </script>
</body>
</html>