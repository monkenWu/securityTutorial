# securityTutorio
## 環境部署
1. PHP7.2~7.*
    * WIN環境
    [Windows PHP 環境變數](http://asika.windspeaker.co/post/3491-win-php-cli)
    * Ubuntu 或 WSL
    [使用 WSL 建置 的LAMP 環境](https://hackmd.io/13AcLcNQStmIeeBkeohbsQ)
3. [Composer](https://getcomposer.org/)
4. PHP 必須啟用 intl 模組
    * in Ubuntu OS
    ```
        sudo apt-get install php7.2-intl
            > Select new config
        sudo apt-get install zip unzip php7.2-zip
        sudo update-alternatives --config php
            > Select PHP7.2 index number
    ```
## 程式部署

將專案從 github fork 一份到自己的儲存庫後 clone 至本地端，再依下列步驟部屬程式。

1. 取得框架檔案
    github 上的程式不含框架本體，所以必須在 clone 至本地端後，使用 Composer 套件管理器下載回來。
    至 cmd 或 bash 中，cd 至專案根目錄執行以下指令。
    ```
    composer update
    ```

2. env檔設定
    複製跟目錄下的 env 並且重新命名為 .env 。
    移除掉 17 行的 # 並且修改至以下內容。
    ```php=17
    CI_ENVIRONMENT = development
    ```

3. 啟動開發伺服器 
    至 cmd 或 bash 中，cd 到專案根目錄執行以下指令。
    ```
    php spark serve
    ```
    當畫面出現以下訊息，代表開發伺服器已經部屬完畢，可以開始開發。
    ```
    CodeIgniter development server started on http://localhost:8080
    ```
    執行 Ctrl+C 可以關閉開發伺服器。
        
## 使用框架或程式庫
- 前端
    [樣式基於 bootstrap4](http://bootstrap.hexschool.com/docs/4.0/getting-started/introduction/)
    [使用套版 Edubin](https://drive.google.com/file/d/1VxcbczMfVlQHrEB0j_EdpyDjhvpq5qYK/view?usp=sharing
)
- 後端
    [使用 codeigniter 4.00](https://codeigniter4.github.io/CodeIgniter4/index.html)
