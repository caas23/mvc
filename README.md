# mvc

![readme-img](https://raw.githubusercontent.com/caas23/mvc/master/public/img/readme-img.png)

My course repo for the [mvc course](https://dbwebb.se/mvc) at BTH.


To clone this repo type any of the following two commands in your terminal.

```
git clone https://github.com/caas23/mvc.git <optional> #using https, replace <optional> with a specific directory, if you wish.
git@github.com:caas23/mvc.git #using SSH
```

Once you have cloned the repo you are ready to get your set up in order and run the website.
To do so, type the following commands in your terminal.

```
cd <directory> #move to the correct directory
composer install
composer require webapp
composer require twig
composer require symfony/webpack-encore-bundle
npm install
npm run build
php -S localhost:8888 -t public #run
```
