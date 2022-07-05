# DEV.to Blog Clone

Hi 👋, thanks for taking a look at this project!

Its a clone of the [dev.to blog website](https://dev.to/). It has authentication & authorization, search, filtering and a cool JavaScript markdown editor.

## Setup

If you want to have a play with the code fork the repo and download, then use composer to install it's dependencies;

```bash
composer install
```

Then add a database, the easiest way to go is to add a sqlite database by adding a `database.sqlite` file to the  `database` folder;

```bash
touch database/database.sqlite
```

Next, duplicate the `.env.example` file as `.env` and change the following lines;

```
DB_CONNECTION=sqlite
DB_DATABASE=*full path to the database.sqlite file you created earlier*
```

Now we'll run the database migrations and seed the database with some dummy data;

```bash
php artisan migrate
php artisan db:seed
```

And then we'll generate the app key;

```bash
php artisan key:generate --ansi
```

Nearly there! Let's install our node dependencies and then start the build process;

```bash
npm i
npm run dev # use npm run watch if you want to change anything to rebuild on save
```

Lastly, run the php server and visit localhost:8000 in your browser;

```bash
php artisan serve
```

If all is well, you should be seeing the home page with a list of dummy blog posts!
