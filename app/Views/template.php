<!doctype html>
<html lang="zh-TW">

<head>
   <?=view("basic/head")?>
</head>

<body>

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <header id="header-part" class="header-two">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?=view("basic/nav")?>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
        
    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <?=view("basic/banner")?>

    <?=view("{$viewName}/index")?>
        
    <footer id="footer-part">
        <?=view("basic/footer")?>
    </footer>
        
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
</body>

</html>
