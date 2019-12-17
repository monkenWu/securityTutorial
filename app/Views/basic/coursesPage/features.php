<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="course-features mt-30">
            <h4>課程屬性 </h4>
            <ul>
                <li><i class="fa fa-clock-o"></i>學習時數 : <span><?=$info["time"]?></span></li>
                <li><i class="fa fa-clone"></i>資源數量 : <span><?=$info["amount"]?></span></li>
            </ul>
        </div> <!-- course features -->
    </div>
    <div class="col-lg-12 col-md-6">
        <div class="You-makelike mt-30">
            <h4>額外資源</h4>
            <?php foreach ($extra as $key => $data):?>
                <div class="single-makelike mt-20">
                    <div class="image">
                        <img src="<?=base_url("images/your-make/y-1.jpg")?>" alt="Image">
                    </div>
                    <div class="cont">
                        <a href="<?=$data["url"]?>" target="_blank"><h4><?=$data["title"]?></h4></a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>