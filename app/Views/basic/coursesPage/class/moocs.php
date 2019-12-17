<div class="tab-pane fade show active" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
    <div class="curriculum-cont">
        <div class="accordion" id="accordionExample">
            <?php foreach ($moocs as $key => $data):?>
                <div class="card">
                    <div class="card-header" id="heading<?=$key?>">
                        <a href="#" class="<?=$key==0?"":"collapsed"?>" data-toggle="collapse" data-target="#collapse<?=$key?>" aria-expanded="true" aria-controls="collapse<?=$key?>">
                            <ul>
                                <li><i class="fa fa-file-o"></i></li>
                                <li><span class="lecture">Lecture <?=($key+1)?></span></li>
                                <li><span class="head"><?=$data["title"]?></span></li>
                                <li><span class="time d-none d-md-block"><i class="fa fa-sort"></i> <span><?=$data["level"]?></span></span></li>
                            </ul>
                        </a>
                    </div>

                    <div id="collapse<?=$key?>" class="collapse <?=$key==0?"show":""?>" aria-labelledby="heading<?=$key?>" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><?=$data["overview"]?></p>
                            <a href="<?=$data["url"]?>" target="_blank" class="mt-1 btn btn-outline-secondary btn-sm btn-block">前往資源</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div> <!-- curriculum cont -->
</div>