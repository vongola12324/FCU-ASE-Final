# JoyMeet
ASE Final Project, Feng Chia University

## Requirement
- Apache or Nginx
- PHP 5.6 or upper
- MySQL
- Redis
- A mailtrap account

## Contributors
- vongola12324
- Heiseikiseki
- cheehoe073
- ChenChihHsuan

## Deployment
1. `git clone https://github.com/vongola12324/FCU-ASE-Final`
2. `cp .env.example .env`
3. `composer install`
4. `php artisan migrate`
5. Modify .env, fill these fields:
```
MAIL_USERNAME=<mailtrap username>
MAIL_PASSWORD=<mailtrap password>
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=aes@test.domain
MAIL_FROM_NAME=AES
```