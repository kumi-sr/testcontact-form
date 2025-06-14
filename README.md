# お問い合わせフォーム（testcontact-form）

## 環境構築
<details>
  <summary>dockerビルド</summary>
　   $ cd coachtech/laravel<br>
　   $ git clone git@github.com:coachtech-material/laravel-docker-template.git<br>
　   $ mv laravel-docker-template testcontact-form<br>
　   $ cd testcontact-form<br>
　   $ git remote set-url origin git@github.com:kumi-sr/testcontact-form.git<br>
　   $ git remote -v<br>
　   $ git add .<br>
　   $ git commit -m "リモートリポジトリの変更"<br>
　   $ git push origin main<br>
　   $ docker-compose up -d --build<br>
　   エラーが起きたので、docker-compose.ymlファイルを編集<br>
　   servicesのnginxとmysqlに「platform: linux/amd64」を追加し、再ビルド<br>
　   $ docker-compose down<br>
　   $ docker-compose build --no-cache<br>
　   $ docker-compose up -d<br>
　   $ code .<br>
</details>
<details> 
  <summary>Laravel環境構築</summary>
　 $ docker-compose exec php bash<br>
　 $ composer install<br>
　 $ cp .env.example .env<br>
　 $ exit<br>
　 $ php artisan key:generate<br>
　 $ php artisan migrate
</details>

## 使用技術
- PHP 7.4.9
- Laravel 8.83.8
- MySQL 8.0.26
- nginx 1.21.1

## ER図
<img width="213" alt="スクリーンショット 2025-06-08 14 18 19" src="https://github.com/user-attachments/assets/090620e0-f507-4ec0-af4a-0ef7ca410189" />

## URL
開発環境：http://localhost/<br>
phpMyAdmin：http://localhost:8080/

