<div class="courses-single-left mt-30">
    <div class="title">
        <h3>課程資源</h3>
    </div> <!-- title -->    
    <div class="courses-single-image pt-20">
        <img src="images/course/<?=$viewName?>.jpg" alt="Courses">
    </div> <!-- courses single image -->
    
    <div class="courses-tab mt-30">
        <ul class="nav nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="active" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">線上教學與教材</a>
            </li>
            <li class="nav-item">
                <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">書籍與電子書</a>
            </li>
            <li class="nav-item">
                <a id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">實務開源工具</a>
            </li>
            <li class="nav-item">
                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">網路技術文章</a>
            </li>
        </ul>
        
        <div class="tab-content" id="myTabContent">
            <?=view("basic/coursesPage/class/moocs")?>
            <?=view("basic/coursesPage/class/book")?>
            <?=view("basic/coursesPage/class/openSource")?>
            <?=view("basic/coursesPage/class/article")?>
        </div> <!-- tab content -->
    </div>
</div> <!-- courses single left -->