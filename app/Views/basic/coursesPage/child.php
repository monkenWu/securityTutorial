<section id="category-3" class="category-2-items pt-50 pb-20 gray-bg">
    <div class="container">
        <div class="row">
            <?php foreach ($childData as $data):?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-items text-center">
                        <div class="items-image">
                            <img src="<?=base_url("images/ctg-1.jpg")?>" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="<?=base_url("course/{$viewName}/{$data["path"]}")?>">
                                <h5><?=$data["name"]?></h5>
                            </a>
                        </div>
                    </div> <!-- single items -->
                </div>
            <?php endforeach; ?>
        </div> <!-- row -->
    </div> <!-- container -->
</section>