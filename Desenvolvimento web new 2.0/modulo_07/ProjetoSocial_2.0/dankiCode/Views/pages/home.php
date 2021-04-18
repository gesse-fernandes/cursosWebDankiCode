<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na Rede Social</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">
</head>

<body>
    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" alt="">
            </div>
            <br>
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br>
                <a href="#"><i class="fa fa-newspaper-o"></i> feed</a>
                <a href="#"><i class="fa fa-user-o"></i> perfil</a>
                <a href="#"><i class="fa fa-users"></i> amigos</a>

            </div>
        </div>
        <div class="feed">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">
                        <!----imagem -->
                    </div>
                    <h3>gesséx</h3>
                    <span>horario post</span>
                </div>
                <div class="feed-single-post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, ipsa, illum unde ullam hic, explicabo a quisquam aut debitis tempore eum vel? Reprehenderit doloremque possimus architecto in numquam unde odit?</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>