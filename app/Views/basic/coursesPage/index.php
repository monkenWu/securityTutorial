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
                            <a href="<?=base_url("course/{$viewName}")?>" class="btn btn-outline-secondary btn-sm mr-10"><i class="fa fa-reply"></i></a><h4>子課程：<?=$childName?></h4>
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