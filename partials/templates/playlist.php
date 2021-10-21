<div class="playlist">
    <!-- <?= var_dump($database) ?> -->
    <div class="row">
        <?php foreach ($database as $item) : ?>
            <div class="col">
                <div class="item">
                    <div class="poster">
                        <img src="#" alt="">
                    </div>
                    <div class="title">
                        Title Here
                    </div>
                    <div class="desc">
                        <div class="author">
                            Author Here
                        </div>
                        <div class="yera">
                            1993
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>