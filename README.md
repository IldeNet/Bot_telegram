# geekswebbot 
Create bot for your website or blog easily with GeeksWebBot (GWB).

##Description
GeeksWeb Bot is a simplified and lightweight version of [Jadibot by Jaavid](https://github.com/jaavid/jadibot/) Telegram bot. It is designed to be easy to launch on HeroKu cloud application platform. In this bot, the database portion and other complicated parts of Jadibot have been removed to make it easy to configure on cloud application platforms.

The use of this bot application is not difficult, you just need to copy/paste the content to your HeroKu application and commit the code, however, before that you are required to set your website/blog RSS feed as well as access token. In order to do so, just change the following values in index.php file,

	$client = Zelenin\Telegram\Bot\ApiFactory::create('AccessToken');

##Usage 
The working version of this bot program is deployed for [blog.madadipouya.com](blog.madadipouya.com) AKA WeeksWeb on HeroKu. Click on  [telegram.me/GeeksWebBot](telegram.me/GeeksWebBot) link to start interaction with the bot.

##Dependencies
The program works out the box so smoothly and all necessary dependencies have been already added to the project.
You just need to run it in your server. It is highly recommended to run "composer update" command before deploying your application in order to update all dependencies

## Useful link
Nowadays, Telegram is one of the most popular messengers. The reason that the app is so popular is because of three reasons,
The application is open source
It is cross platform supports and works out of the box
Bot support
Among the reasons, I believe the third one is so exciting and most important. In Telegram you are allowed to create bot(s) for certain tasks or even for fun and/or experiment. In this post, I explain about how to create a simple Telegram bot and code it with PHP and host it in HeroKu cloud application platform.
The first step you should do is to create a bot via Telegram itself. This can be done via interacting with Bot Father. Just click on the following link to start interaction with bot father,
https://telegram.me/botfather
You can send various commands to bot father. I have listed the most important ones with their explanations.
/newbot → create a new bot
/setname → set name for your bot
/setdescription → setdescription for your bot
/setcommands → define commands for your bot
/setuserpic → set picture for bot (minimum size 512X512)
/token → get your access token
/revoke → delete access token of bot
/deletebot → remove the bot forever
Here, I won’t go through the process of how to create a bot using bot father. It is not a difficult task, and if you are not familiar you can follow the official Telegram guideline in this link,
https://core.telegram.org/bots
After creation of your bot, the bot father sends you access token. Token is very important and must be kept and saved in a safe place. Now, the next step is to activate the webhook facility of the bot to be able to automate the task of responding via PHP program. To do so, click on this link and replace “[TOKEN]” with your token.
https://api.telegram.org/bot[TOKEN]/setWebhook
After pressing the enter, you should receive a message that webhook activated.
The next step is to create a PHP application on HeroKu via this link,
https://dashboard.heroku.com/new
After creating HeroKu application, it should be linked to Telegram bot. To do that, just click on this link and replace “[TOKEN]” and “[URL]” with your Telegram bot and HeroKu URL application.
https://api.telegram.org/bot[TOKEN]/setWebhook?url=[URL]
You should receive a success message. Keep in mind that the URL that is passed should be Https. Fortunately, HeroKu supports Https out of the box and therefore, you don’t need to be worry about this part, just make sure the URL you pass has Https.
The next step is to define your bot commands via bot father /setcommands.
After you have done with setting the commands and description, the last part remaining is to clone this repository.
https://github.com/kasramp/geekswebbot
You can change the code based on your need and commands you have defined and push the code to your HeroKu repository.
Now if you start interacting with your bot, it should be working fine flawlessly.

## Contact
telegram:

@ildenet

Join our Telegram Super Group - https://telegram.me/joinchat/AOmo4jzvT2L6_PLrLApWqQ

##License
GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License version 3
as published by the Free Software Foundation.

GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.  <http://www.gnu.org/licenses/>

Author(s):

© 2015 Kasra Madadipouya <kasra@madadipouya.com>
