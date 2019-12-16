<div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
    <div class="reviews-cont">
        <ul>
            <?php foreach ($book as $key => $data):?>
                <li>
                    <div class="single-reviews">
                        <div class="reviews-author row">
                            <div class="col-3 author-thum">
                                <img src="images/book/<?=$data["img"]?>" alt="Reviews">
                            </div>
                            <div class="col-9 author-name">
                                <a href="<?=$data["url"]?>" target="_blank"><h6><?=$data["title"]?></h6></a>
                                <p><span>作者名稱：<?=$data["author"]?></span></p>
                                <p><span>出版日期：<?=$data["pubDate"]?></span></p>
                                <p><span>書籍語言：<?=$data["lan"]?></span></p>
                                <p><span>ＩＳＢＮ：<?=$data["isbn"]?></span></p>
                            </div>
                        </div>
                    </div> <!-- single reviews -->
                </li>
            <?php endforeach;?>
        </ul>
    </div> <!-- reviews cont -->
</div>