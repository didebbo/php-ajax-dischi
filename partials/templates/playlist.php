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
                        <?= $item["title"]; ?>
                    </div>
                    <div class="desc">
                        <div class="author">
                            <?= $item["author"]; ?>
                        </div>
                        <div class="yera">
                            <?= $item["year"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>