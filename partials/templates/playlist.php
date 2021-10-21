<div class="playlist">
    <div class="row">
        <?php foreach ($database as $item) : ?>
            <div class="col">
                <a href="#">
                    <div class="item">
                        <div class="poster">
                            <img src="<?= $item["poster"]; ?>" alt="">
                        </div>
                        <div class="title">
                            <?= $item["title"]; ?>
                        </div>
                        <div class="desc">
                            <div class="author">
                                <?= $item["author"]; ?>
                            </div>
                            <div class="year">
                                <?= $item["year"]; ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>