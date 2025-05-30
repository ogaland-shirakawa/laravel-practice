## 構築手順

1. ローカルのWSLの作業フォルダにコピーする
2. dockerを立ち上げてLaravel6をインストールする
    一行一行をコピペして実行する
    ```
    docker-compose run --rm app bash
    composer create-project --prefer-dist laravel/laravel:^6.0 .
    exit
    ```
3. .envの書き換え
    該当のkeyの部分を見つけコピペする
    ```
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laravel
    DB_PASSWORD=secret
    ```
4. storageフォルダに権限を付与する
    ```
    docker-compose run --rm app bash
    chmod -R 777 storage
    exit
    ```
5. Docker起動
    ```
    docker-compose up -d
    ```
6. [ブラウザ](http://localhost)で確認