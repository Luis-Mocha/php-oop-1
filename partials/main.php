<main class="bg-secondary">
    <div class="container">
        
        <?php foreach ($arrayMovies as $elem) { ?>

            <div class="card text-center">

                <!-- TITOLO -->
                <div class="card-title">
                    <?php echo $elem->title ?>
                </div>

                <!-- VOTO -->
                <div class="card-text">
                    <span>
                        Voto: <?php echo $elem->vote ?> / 5
                    </span>
                </div>

                <!-- GENERE -->
                <div class="card-text">
                    <span>
                        Genere:
                        <?php foreach ($elem->genre as $elemGenre) { ?>
                            
                            <li> <?php echo $elemGenre->name ?> </li>

                        <?php } ?>
                    </span>
                </div>

            </div>

        <?php } ?>

    </div>
</main>