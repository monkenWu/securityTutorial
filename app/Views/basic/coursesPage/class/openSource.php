<div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
    <div class="overview-description">
        <?php foreach ($openSource as $key => $data):?>
            <div class="single-description pt-40">
                <a target="_blank" href="<?=$data["url"]?>"><h6><?=$data["title"]?></h6></a>
                <p><?=$data["overview"]?></p>
            </div>
        <?php endforeach;?>
    </div> <!-- overview description -->
</div>
