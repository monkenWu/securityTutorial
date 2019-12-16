<section id="courses-part" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <?php foreach ($nav["課程選擇"]["child"] as $key => $data):?>
        
            <?php if($key == 0):?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="courses-top-search">
                            <ul class="nav float-left" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <i class="fa fa-th-large"></i>
                                </li>
                                <li class="nav-item">第一年基礎課程</li>
                            </ul> <!-- nav -->
                        </div> <!-- courses top search -->
                    </div>
                </div> <!-- row -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                        <div class="row">
            <?php elseif($key==3):?>
                        </div> <!-- row -->
                    </div>
                </div> <!-- tab content -->
                <div class="row mt-30">
                    <div class="col-lg-12">
                        <div class="courses-top-search">
                            <ul class="nav float-left" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <i class="fa fa-th-large"></i>
                                </li>
                                <li class="nav-item">第二年核心課程</li>
                            </ul> <!-- nav -->
                        </div> <!-- courses top search -->
                    </div>
                </div> <!-- row -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                        <div class="row">
            <?php endif; ?> 

            <div class="col-lg-4 col-md-6">
                <div class="single-course mt-30">
                    <div class="thum">
                        <div class="image">
                            <img src="images/course/<?=$data["path"]?>.jpg" alt="Course">
                        </div>
                    </div>
                    <div class="cont">
                        <a href="<?=base_url($data["path"])?>"><h4><?=$data["name"]?></h4></a>
                    </div>
                </div> <!-- single course -->
            </div>
        <?php endforeach;?>
                </div> <!-- row -->
            </div>
        </div> <!-- tab content -->

    </div> <!-- container -->
</section>