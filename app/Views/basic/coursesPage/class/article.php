<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
    <div class="reviews-cont">
        <ul>
            <?php foreach ($article as $key => $data):?>
                <li>
                    <div class="single-reviews">
                        <div class="reviews-author">
                            <div class="author-name">
                                <a href="<?=$data["url"]?>" target="_blank"><h6><?=$data["title"]?></h6></a>
                                <span><?=$data["author"]?></span>
                            </div>
                        </div>
                    </div> <!-- single reviews -->
                </li>
            <?php endforeach;?>
        </ul>
    </div> <!-- reviews cont -->
</div>
