<?php

    /***
     * 課程資源
     * */
    //線上教學與教材
    require("moocs.php");
    //書籍與電子書
    require("book.php");
    //實務開源工具
    require("openSource.php");
    //網路技術文章
    require("article.php");

    $contentData = [
        "moocs"      => $moocs,
        "book"       => $book,
        "openSource" => $openSource,
        "article"    => $article
    ];

    $info = [
        "time" => "360 小時",
        "amount" => count($moocs)+count($book)+count($openSource)+count($article)
    ];

    $extra = [
        [
            "title"   => "Sonar 微軟開源免費網站檢測工具，測試網站效能、安全性等五大層面",
            "url"     => "https://free.com.tw/sonar/"
        ]
    ];

    /***
     * 額外資源
     * */
    $featuresData = [
        "info" => $info,
        "extra" => $extra
    ]

?>

<?= view("basic/coursesPage/index",[
    "contentData"  =>$contentData,
    "featuresData" => $featuresData,
    //子課程必須定義中文標題
    "childName" => "Java 安全設計課程"
])?>