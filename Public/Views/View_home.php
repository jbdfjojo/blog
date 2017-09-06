<div class="jumbotron">
    <div class="container">
        <h1 style="text-align: center">blog</h1>
    </div>
</div>

<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">


            <?php  for ($i = 0; $i < sizeof($requete); $i++): ?>
            <div class="blog-post" style="background-color: #bfe9ff; padding: 3%; margin-bottom: 2%;border-radius: 5px">
                <h2 class="blog-post-title"><?= $requete[$i]['titre'] ?></h2>
                <span style="float: right"><a href="index.php?p=edit&id=<?= $requete[$i]['id'] ?>"><button type="button" class="btn btn-danger">editer</button></a></span>
                <p class="blog-post-meta">le <?= $requete[$i]['date'] ?> by <?= $requete[$i]['auteur'] ?></p>
                <p><?= $requete[$i]['article'] ?></p>
            </div><!-- /.blog-post -->
            <?php endfor; ?>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>blog test</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2016</a></li>
                    <li><a href="#">February 2016</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->