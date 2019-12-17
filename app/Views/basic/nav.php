<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?=base_url()?>">
        <b style="color:black;">資訊安全課程地圖</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php foreach ($nav as $key => $value):?>
                <li class="nav-item">
                    <a href="<?=base_url($value["path"])?>"><?=$key?></a>
                    <?php if(isset($value["child"])): ?>
                        <ul class="sub-menu">
                            <?php foreach ($value["child"] as $data):?>
                                
                                <li><a class="<?=$viewName==$data["path"]?"active":""?>" href="<?=base_url("{$value["path"]}/{$data["path"]}")?>"><?=$data["name"]?></a></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</nav> <!-- nav -->