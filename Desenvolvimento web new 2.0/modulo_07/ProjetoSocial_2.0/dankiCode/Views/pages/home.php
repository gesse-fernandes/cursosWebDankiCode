<!DOCTYPE html>
<html>

<head>
    <!--ALTERAR TITULO-->
    <title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">


</head>

<body>

    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" />
            </div>
            <br />
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br />
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> feed</a>
                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> perfil</a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> amigos</a>

                <a href="?loggout">loggout</a>
            </div>
        </div>
        <!--sidebar-->
        <div class="feed">
            <div class="feed-wraper">
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Gessé</h3>
                            <p>08:15 20/09/2020</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis itaque optio eum placeat quas ipsa neque culpa aspernatur ad illo distinctio, alias asperiores hic odit, quam omnis iure architecto nobis.</p>
                    </div>
                </div>
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Gessé</h3>
                            <p>08:15 20/09/2020</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis quisquam, suscipit ad earum in sequi repudiandae aperiam iusto ullam veritatis a tempora voluptatum neque at magnam vero illo ducimus blanditiis?
                        </p>
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                    </div>
                </div>

                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Gessé</h3>
                            <p>08:15 20/09/2020</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam iste architecto ab earum? Itaque soluta illum nemo perspiciatis excepturi debitis veniam obcaecati eligendi, provident error quam, commodi ab voluptatem.</p>
                    </div>
                </div>
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Gessé</h3>
                            <p>08:15 20/09/2020</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis ex quis at. Commodi ullam reiciendis atque reprehenderit quaerat sunt optio et recusandae? Rem consequuntur sapiente dolore impedit corporis error.</p>
                    </div>
                </div>

                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Gessé</h3>
                            <p>08:15 20/09/2020</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis velit suscipit, error est amet itaque minima animi, deleniti deserunt quia voluptatem fugit optio unde ullam neque eius veritatis, asperiores ipsum!</p>
                    </div>
                </div>

                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Gessé</h3>
                            <p>08:15 20/09/2020</p>
                        </div>
                    </div>
                    <div class="feed-single-post-content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta veritatis ut, voluptatem nihil atque praesentium fugit hic et harum obcaecati voluptatibus repellat rem exercitationem saepe modi ducimus recusandae neque eveniet.</p>
                    </div>
                </div>
            </div>

            <div class="friends-request-feed">
                <h4>Solicitações de amizade</h4>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                    <div class="friend-request-single-info">
                        <h3>gessex</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div>
                </div>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                    <div class="friend-request-single-info">
                        <h3>Gessex</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div>
                </div>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
                    <div class="friend-request-single-info">
                        <h3>Gessex</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--feed-->
    </section>


</body>


</html>