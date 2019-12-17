<section id="courses-single" class="pb-120 gray-bg">
    <div class="container">
        <div class="row">

            <?php if(isset($childData)):?>
                <div class="col-lg-12">
                    <?=view("basic/coursesPage/child",$childData)?>
                </div>
            <?php endif;?>

            <?php if($isChild):?>
                <div class="col-lg-12">
                    <div class="courses-single-left mt-30">
                        <div class="row">
                            <?php
                                $nowChildPath = $childPath ?? "";
                                $pathArray = explode("/",$nowChildPath);
                                $newChildPath = "";
                                foreach ($pathArray as $key => $value) {
                                    if(($key+1) != count($pathArray)){
                                        $newChildPath .= "/{$value}";
                                    }
                                }
                            ?>
                            <a href="<?=base_url("course/{$viewName}{$newChildPath}")?>" class="btn btn-outline-secondary btn-sm mr-10"><i class="fa fa-reply"></i></a><h4>子課程：<?=$childName?></h4>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            
            <div class="col-lg-8">
                <?=view("basic/coursesPage/content",$contentData)?>
            </div>
            <div class="col-lg-4">
                <?=view("basic/coursesPage/features",$featuresData)?>
            </div> 
        </div>
    </div>
</section>