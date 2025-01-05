<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <nav>
    <h1>Storydex</h1>
    <img src="../assets/svg/line-vertical.svg" class="line" alt="line-vertical">
    <ul>
      <li>
        <a href="../index.html">Accueil</a>
      </li>
      <li>
        <a href="">FAQ</a>
      </li>
      <li>
        <a href="./pages/myStorydex.php" class="active">Mon storydex</a>
      </li>
      <li>
        <a href="">Mon compte</a>
      </li>
    </ul>
  </nav>

  <?php
    require_once './class/MyStorydex.class.php';
    $myStorydex = new MyStorydex(1, 1, 'image', 'title', 'content', 'author', 'date');
    $myStorydex->setPost(
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

  <article id="article">
  <figure class="image-wrapper">
      <img src="<?php $myStorydex->getImage() ?>" alt="" />
    </figure>
    <div class="content">
      <h2><?php $myStorydex->getTitle() ?></h2>
      <p class="resume"><?php $myStorydex->getContent() ?></p>
            
      <div class="profile">
        <p class="date"><?php $myStorydex->getDate() ?></p>
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
</body>
</html>