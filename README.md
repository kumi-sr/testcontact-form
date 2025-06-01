お問い合わせフォーム（testcontact-form）

環境構築
Dockerビルド
　1. $ cd coachtech/laravel
　   $ git clone git@github.com:coachtech-material/laravel-docker-template.git
　   $ mv laravel-docker-template testcontact-form
　   $ cd testcontact-form
　   $ git remote set-url origin git@github.com:kumi-sr/testcontact-form.git
　   $ git remote -v
　   $ git add .
　   $ git commit -m "リモートリポジトリの変更"
　   $ git push origin main
　2. $ docker-compose up -d --build
　   エラーが起きたので、docker-compose.ymlファイルを編集
　   servicesのnginxとmysqlに「platform: linux/amd64」を追加した
　   $ docker-compose down
　   $ docker-compose build --no-cache
　   $ docker-compose up -d
　   $ code .

Laravel環境構築
　1. $ docker-compose exec php bash
　2. $ composer install
　3. $ cp .env.example .env
　   $ exit
