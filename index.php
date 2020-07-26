<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <div class="logo"></div>
</nav>
<h1>Kevin JANIKY</h1>
<div class="description">
    <span>71500 Branges</span>
    <span>•</span>
    <span>06.79.02.91.72</span>
    <span>•</span>
    <span>kevin.janiky@gmail.com</span>
    <span>•</span>
    <span>Devis gratuit</span>
</div>
<div class="picture"></div>
<h2>Portfolio</h2>
<?php
$projects = file_get_contents('./projects.json');
$projects = json_decode($projects, true);
?>


<section>
    <?php
    foreach ($projects as $project) {
        ?>
        <article>
            <?php if (!empty($project['picture'])) { ?>
                <div class="image_item" style="background-image: url(<?php echo $project['picture'] ?>)"></div>
            <?php } ?>
            <div class="description_item">
                <h3><?php echo $project['title'] ?></h3>
                <ul>
                    <?php
                    foreach ($project['listing'] as $item) {
                        ?>
                        <li><i class="fas fa-check-circle"></i><?php echo $item ?></li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="botside_item">
                    <div class="description_entreprise">
                        <?php if (!empty($project['entreprise']['logo'])) { ?>
                            <div class="logo_entreprise"
                                 style="background-image: url(<?php echo $project['entreprise']['logo'] ?>)"></div>
                        <?php } ?>

                        <div class="name_entreprise"><?php echo $project['entreprise']['name'] ?></div>
                    </div>
                    <div class="tags">
                        <?php
                        foreach ($project['tags'] as $tag) {
                            ?>
                            <span><?php echo $tag ?></span>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </article>
        <?php
    }
    ?>
</section>
</body>
</html>
