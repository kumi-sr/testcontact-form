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
</details>
