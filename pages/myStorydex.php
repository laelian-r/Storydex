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
        <a href="../index.php">Accueil</a>
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
    $story = new MyStorydex('image', 'title', 'content', 'date');
    $story->setPost(
      'https://jpfranceresidences.fr/wp-content/uploads/2016/06/mairie-colombes.jpg', 
      'Nom de l\'histoire', 
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellat eius nam voluptatibus asperiores ducimus quia optio facilis accusamus quisquam, expedita doloribus nulla vitae deleniti.',
      '03/01/2025'
    );

    $story2 = new MyStorydex('image', 'title', 'content', 'date');
    $story2->setPost2(
      'https://static.villesavivre.fr/images/6f/210/villeurbanne-69266.jpg?format=auto', 
      'Nom de l\'histoire #2', 
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellat eius nam voluptatibus asperiores ducimus quia optio facilis accusamus quisquam, expedita doloribus nulla vitae deleniti.',
      '04/01/2025'
    );
  ?>

  <section>
  <article id="article">
      <figure class="image-wrapper">
        <img src="<?php $story->getImage() ?>" alt="" />
      </figure>
      <div class="content">
        <h2><?php $story->getTitle() ?></h2>
        <p class="resume"><?php $story->getContent() ?></p>
              
        <div class="profile">
          <p class="date"><?php $story->getDate() ?></p>
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

    <article id="article">
      <figure class="image-wrapper">
        <img src="<?php $story2->getImage2() ?>" alt="" />
      </figure>
      <div class="content">
        <h2><?php $story2->getTitle() ?></h2>
        <p class="resume"><?php $story2->getContent2() ?></p>
              
        <div class="profile">
          <p class="date"><?php $story2->getDate2() ?></p>
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
  </section>
</body>
</html>