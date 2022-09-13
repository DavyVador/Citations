<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Citations de nos utilisateurs</h3>
            <div class="row">
                <?php foreach ($citations as $citation) { ?>
                    <div class="col-3">
                        <h1><?php echo $citation->getCitation(); ?></h1>
                        <h3>-- <?php echo $citation->getAuteur(); ?>/h3>
                    </div>
                <?php } ?>
            </div>
            <?= $formCitation->create(); ?>
        </div>
    </div>
</div>
