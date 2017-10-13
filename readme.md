-git clone [https://github.com/OlegMarko/redis-chat.io.git]

-cd redis-chat.io

-run: cp .env.example .env

-run: composer install

-run: npm install

-run: php artisan key:generate

-cd nodejs

-run: node server.js