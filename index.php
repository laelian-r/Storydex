<!doctype html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <h1>Storydex</h1>
        <img src="./assets/svg/line-vertical.svg" class="line" alt="line-vertical">
        <ul>
          <li>
            <a href="" class="active">Accueil</a>
          </li>
          <li>
            <a href="">FAQ</a>
          </li>
          <li>
            <a href="./pages/myStorydex.php">Mon storydex</a>
          </li>
          <li>
            <a href="">Mon compte</a>
          </li>
        </ul>
      </nav>

      <?php
        require_once './pages/class/MyStorydex.class.php';
        $story = new MyStorydex(1, 1, 'image', 'title', 'content', 'author', 'date');
        $story->setPost(
          'https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/c08d8e88899493.5eb55618dcf81.jpg', 
          'Nom de l\'histoire', 
          'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellat eius nam voluptatibus asperiores ducimus quia optio facilis accusamus quisquam, expedita doloribus nulla vitae deleniti.',
          'https://scx2.b-cdn.net/gfx/news/hires/2018/2-detectingfak.jpg',
          'Jade MADISON',
          '12/05/2024'
        );

        // $myStorydex->setPost(
        //   'https://i.pinimg.com/originals/41/fc/7c/41fc7c51d5d26ff77cc0f7c80d870ee1.png', 
        //   'Nom de l\'histoire #2', 
        //   'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellat eius nam voluptatibus asperiores ducimus quia optio facilis accusamus quisquam, expedita doloribus nulla vitae deleniti.',
        //   'https://i.pinimg.com/736x/35/1c/d5/351cd5ccf456bd73dbd7830ada064f46.jpg',
        //   'Alice DUBRAKMAR',
        //   '04/01/2025'
        // );
      ?>

      <div class="container">
        <button id="prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="none" stroke="#9c9b9b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 7l-5 5m0 0l5 5"/></svg>
        </button>

        <article id="article">
          <figure class="image-wrapper">
            <img src="<?php $story->getImage() ?>" alt="" />
          </figure>
          <div class="content">
            <h2><?php $story->getTitle() ?></h2>
            <p class="resume"><?php $story->getContent() ?></p>

            <div class="profile">
              <img src="https://scx2.b-cdn.net/gfx/news/hires/2018/2-detectingfak.jpg" class="pp" alt="Image profile">
              <div>
                <a href="" class="name">Jade MADISON</a>
                <p class="date">12/05/2024</p>
              </div>
            </div><br>

            <div class="link">
              <a href="">Voir plus</a>
              <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="3em" 
                height="3em" 
                viewBox="0 0 24 24"
              >
                <path 
                  fill="none" 
                  stroke="#9c9b9b" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2" 
                  d="M5 12h14m-6 6l6-6m-6-6l6 6"
                />
              </svg>
            </div>
          </div>
        </article>

        <button id="next">
          <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="none" stroke="#9c9b9b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5m0 0l-5-5"/></svg>
        </button>
      </div>
    </header>
    <script type="module" src="./main.js"></script>
  </body>
</html>
