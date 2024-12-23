<h1 class="head-title-page">Nos Destinations</h1>

<section class="destination-structure">
    <?php foreach ($destinations as $destination) { ?>
        <article class="destinations">
            <a href="index.php?page=detail">
                <img src="<?php echo $destination['image']; ?>" alt="">
            </a>

            <h4><?php echo $destination['titre']; ?></h4>

            <p>
                <?php echo "See more..."/*$destination['article_description']*/; ?>
            </p>
            <small>Date de l'offre : <?php echo $destination['date_offre']; ?> à <?php echo $destination['date_fin'] ?></small>
        </article>
    <?php } ?>
</section>