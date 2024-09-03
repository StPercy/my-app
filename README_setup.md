# SET UP THE APP in 15 steps...

1. git clone https://github.com/JeffreyWay/
30-days-to-learn-laravel.git in your HERD Root Folder
2. cd 30-days-to-learn-laravel

3. composer install - be patient !!!

4. declare .env by copying the .env.example file and rename to .env
5. make a change in the .env: 
APP_URL=http://30-days-to-learn-laravel.test

6. open your browser, go to url: 30-days-to-learn-laravel.test, follow the instruction to generate the App Key

7. php artisan 
migrate:fresh --seed

8. npm install
9. npm install -D tailwindcss postcss autoprefixer
10. npx tailwindcss init -p
10. npm update (4 safety)

12. change vite.config.js to make vite running:
```js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '30-days-to-learn-laravel.test'
    },
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```



13. npm run dev 
14. got to the url 30-days-to-learn-laravel.test 
15. login with test@example.com and the Password "password".

16. ## enjoy the app ##

