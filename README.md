
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 


Website URL: https://e-residency-aman-raikwar.c9users.io

Phpmyadmin Details:

URL: https://e-residency-aman-raikwar.c9users.io/phpmyadmin
Command phpmyadmin-ctl install


PHP 7.0
If you want to use PHP7, instead of the commands above, do:

sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install libapache2-mod-php7.0
sudo a2dismod php5
sudo a2enmod php7.0
sudo apt-get install php7.0-dom
sudo apt-get install php7.0-mbstring
sudo apt-get install php7.0-zip
You will also need to install the mysql or sqlite driver to use either.

sudo apt-get install php7.0-mysql
sudo apt-get install php7.0-sqlite


Install Laravel 5.3
Again, copy the following commands (this time you can copy them all at once) into the terminal, and press return for the last command:

sudo composer global require 'laravel/installer'
export PATH=~/.composer/vendor/bin:$PATH
laravel new laravel
Move the files and folders from the laravel folder to you workspace folder.
Remove the empty laravel folder.
Now enter the following command to edit the file that tells apache to start your app/site from the public folder:

sudo nano /etc/apache2/sites-enabled/001-cloud9.conf

and add /public to the end of line 2 e.g.

DocumentRoot /home/ubuntu/workspace/public

Press F2 or Ctrl/Cmd + X to exit, then y and return to save.

"et voila" your app is ready!



Add authentication routes to your app.
Enter the following into the terminal:

php artisan make:auth
php artisan migrate
Now 'Run Project', load your app's url, register and you're done!

Update NPM and node
NPM and Node need upgrading so that gulp and elixir work properly. Just enter the following commands after the rest of your installation, then the gulp command should work fine.

sudo npm install -g n
sudo n latest
sudo npm install -g npm
npm inst















Delete Image from Folder when Record is deleted at All CRUDs.









