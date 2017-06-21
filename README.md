# JoyMeet
ASE Final Project, Feng Chia University

## Requirement
- Apache or Nginx
- PHP 5.6 or upper
- MySQL
- Redis
- A mailtrap account

## Contributors
- vongola12324 (Hou, Chun-Ching)
- Heiseikiseki (Chang, Shun-Ming) w/ MagicUmom
- cheehoe073   (Loh, Chee-Hoe)
- ChenChihHsuan (Chen, Chih-Hsuan)
- darren7130 (Chen, Chi-Feng)

## Deployment
1. `git clone https://github.com/vongola12324/FCU-ASE-Final`
2. `cp .env.example .env`
3. `composer install`
4. Modify .env, fill these fields:
```
DB_DATABASE=<DB name>
DB_USERNAME=<DB account>
DB_PASSWORD=<DB password>
```
5. `php artisan migrate`
6. Modify .env, fill these fields:
```
MAIL_USERNAME=<mailtrap username>
MAIL_PASSWORD=<mailtrap password>
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=aes@test.domain
MAIL_FROM_NAME=AES
```
