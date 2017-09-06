<style>
    .nav.navbar-nav.doc a {
        width: 150px;
    }
</style>

<div class="row">
    <div class="col-md-3">
        <nav class="navbar navbar-default sidebar" role="navigation" style="position: fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-sidebar-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav doc">
                        <li><a href="#config">config<span style="font-size:16px;"
                                                          class="pull-right hidden-xs showopacity glyphicon glyphicon-menu-right"></span></a>
                        </li>
                        <br>
                        <li><a href="#route">route <span style="font-size:16px;"
                                                         class="pull-right hidden-xs showopacity glyphicon glyphicon-menu-rightglyphicon glyphicon-menu-right"></span></a>
                        </li>
                        <br>
                        <li><a href="#module">module<span style="font-size:16px;"
                                                          class="pull-right hidden-xs showopacity glyphicon glyphicon-menu-right"></span></a>
                        </li>
                        <br>
                        <li><a href="#formulaire">formulaire<span style="font-size:16px;"
                                                                  class="pull-right hidden-xs showopacity glyphicon glyphicon-menu-right"></span></a>
                        </li>
                        <br>
                        <li><a href="#sql">sql<span style="font-size:16px;"
                                                    class="pull-right hidden-xs showopacity glyphicon glyphicon-menu-right"></span></a>
                        </li>
                        <br>
                        <li><a href="#slides">slides<span style="font-size:16px;"
                                                          class="pull-right hidden-xs showopacity glyphicon glyphicon-menu-right"></span></a>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-md-9">
        <div style="text-align: center">
            <h1><u>documentation du framework</u></h1>

            <br>
            <p id="config">&nbsp;</p><br><br>
            <p><u>config</u></p>
            <p>Comment configurer le framework ?</p>
            <p> Toutes les configurations sont gérer par config.php</p>
            <p> Toutes les route sont gérer par web.php</p>
            <p>comme le framework est basé sur le systeme MVC vous devez respercter une certaine nomanclature pour les
                noms de
                fichier</p>
            <p> View_page.php pour vos vue</p>
            <p> Ctrl_page.php pour vos controller</p>
            <p> Model_page.php pour vos model</p>
            <p>Initialiser le module route où vous souhaitez que vos pages apparaissent</p>
            <pre class="formatCode" style="width: 400px; margin-left: 25%;">
      < ?php include '../Config/web.php' ?>
            </pre>


            <p id="route">&nbsp;</p><br><br>
            <p><u>route</u></p>
            <p> Comment configurer les routes ??</p>
            <p>le framework charge automatiquement les pages depuis la racine du dossier Views grace au variable GET</p>
            <p>exemple "index.php?p=home" </p>
            <p> chargera en 1er le Model Model_home.php</p>
            <p> chargera en 2eme le Controller Ctrl_home.php</p>
            <p> chargera en 3eme la pages Views_home.php</p>
            <p>grâce au framework une varriable défini dans le controller sera disponible dans sa vue sans pour autant
                l'appeler
                au
                préalable</p>
            <p>vous pouvais si vous le souhaitez cree une autre architecture voir ci-desous</p>
            <p>( MAIS ATTENTION vous devez garder la meme architecure dans les dossier Views, Controller et Model</p>
            <pre class="formatCode" style="width: 500px; margin-left: 20%">
                Views
                   |-- View_home.php
                   |-- test
                        |-- View_test.php
                Controller
                   |-- Ctrl_home.php
                   |-- test
                        |-- Ctrl_test.php
                Model
                   |-- Model_home.php
                   |-- test
                        |-- Model_test.php
            </pre>
            <p>vous disposer de trois methodes pour geres les routes</p>
            <pre class="formatCode" style="width: 500px; margin-left: 20%">
        ->get('nom_du_dossier')
        ->where(['nom_function' => function () {}])
        ->variable(['nom_variable' => 'contenu_variable'])
</pre>
            <p>detail des trois methodes</p>
            <p>get() => permet d'ajouter une nouvelle route ( ATTENTION a bien ajouter une methode get() a chaque
                nouvelle route
                )</p>
            <p>where() => ajouter dans le tableaux les function qui seront disponible dans toutes vos pages</p>
            <p>variable() => ajouter dans le tableaux les variables qui seront disponible dans toutes vos pages< </p>
            <p>les methodes where() et variable() sont optionnel il ne serve que si vous souhaité envoyer a toutes vos
                pages des
                variables
                ou
                des functions</p>
            <p>comment apeller une function ou une variable dans vos page? </p>
            <pre class="formatCode" style="width: 500px; margin-left: 20%">
    variable => $this->test
    function => $this->name('oky')
</pre>

            <br>
            <p id="module">&nbsp;</p><br><br>
            <p><u>module</u></p>
            <p>comment appeller un module ?</p>
            <p>Chaque module dispose d'une class qui gère son fonctionnement exemple pour le module formulaire </p>
            <pre class="formatCode" style="width: 400px; margin-left: 25%">
          use \Lib\module\formulaire\
          Formulaire::contact();
</pre>
            <br>

            <p id="formulaire">&nbsp;</p><br><br>
            <p><u>formulaire</u></p>
            <p>vous avez trois module deja pret ( contact, inscription, connexion )</p>
            <pre class="formatCode" style="width: 550px; margin-left: 18%">

          \Lib\module\formulaire\Formulaire::contact();
          \Lib\module\formulaire\Formulaire::inscription();
          \Lib\module\formulaire\Formulaire::connexion();

</pre>
            <p>Si vous ne souhaitez pas utiliser le module formulaire, il vous est possible de le créer vous-même!!</p>
            <p> 1/ On ouvre le formulaire </p>
            <p> 2/ On le compose</p>
            <p> 3/ On ferme le formulaire</p>
            <pre class="formatCode" style="width: 720px; margin-left: 8%">

    use Lib\module\formulaire\Formulaire;

    Formulaire::form_open();

    Formulaire::input( 'pseudo' , 'pseudo', 'erreur', 'text', 'pseudo', 'class="test"' );
    Formulaire::input( 'pass' , 'pass', 'erreur', 'password', 'pass', 'class="test"' );

    Formulaire::form_close();
</pre>
            <p> Détail des fonctions disponible :</p>
            <pre class="formatCode" style="width: 980px; margin-left: -8%">

    Formulaire::form_open ($name = 'formulaire')

    Formulaire::input($label = '', $name = '', $msg_error = '', $type = 'text', $placeholder = '', $class = '', $autre = '')
    Formulaire::textarea($name = '', $label = 'message', $msg_error = '', $class = '', $autre = '')
    Formulaire::datepicker($label = 'date', $name = '', $msg_error = '', $class = '', $autre = '')
    Formulaire::editor($label = 'editor', $name = '', $msg_error = '', $value = '', $class = '', $autre = '')

    Formulaire::form_close ($name = 'envoyer')


</pre>
            <br>

            <p id="sql">&nbsp;</p><br><br>
            <p id=""><u>sql</u></p>
            <p>comment cree une requette sql ?</p>
            <p>le framewok dispose d'un QueryBuilder qui vous permetra de cree votre requette simplement</p>
            <p> exemple de requette sql </p>
            <pre class="formatCode" style="width: 650px; margin-left: 12%">
      $query = new \Lib\database\bdd();

      $requete = $query->select('*')->from('posts')->send();

      $requete = $query->insert('posts', ['title', 'body'])
                 ->values(':title', ':body')
                 ->tab([ 'title' => 'titre 3', 'body' => 'contenu 3'])
                 ->send();

      $requete = $query->update('posts')->set('title = :title', 'body = :body')
                 ->where('id = :id')
                 ->tab([ 'title' => 'tato', 'body' => 'huhu', 'id' => 3])
                 ->send();
</pre>
            <br>
            <p> le principe est simple vous la construiser comme une requette normal </p>
            <p> chaque mot-clé est une méthode et dans les paramètres de la méthode la valeur qui lui est associée </p>
            <p> exemple </p>
            <pre class="formatCode" style="width: 500px; margin-left: 20%">
    $query = new \Lib\database\bdd();

    $requete = $query->select('*')->from('posts')->send();
    $requete = query('SELECT * FROM posts')->fetch();
</pre>


            <br>
            <p id="slides">&nbsp;</p><br><br>
            <p><u>Slides</u></p>
            <p> vous avez la possibilité d'appeller un slide pour vos image exemple ci-dessous</p>
            <pre class="formatCode" style="width: 410px; margin-left: 26%">
\Lib\module\Slides\Slides::SlideShow([
    [
        'img' => 'johanna.jpeg',
        'title' => 'titre 1',
        'text' => 'images 1'
    ],
    [
        'img' => 'mayfourblocknature.jpg',
        'title' => 'titre 2',
        'text' => 'images 2'
    ],
    [
        'img' => 'trolltunga.jpg',
        'title' => 'titre 3',
        'text' => 'images 3'
    ],
]);
    </pre>

            <br><br><br><br><br><br>
        </div>
    </div>
</div>
