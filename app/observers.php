<?php

// when a user signs up, we want to call a mailer welcome method
/* Event::listen('user.signup', 'Acme\Newsletters\MailChimp@addToMembersList'); */
Event::listen('user.signup', 'Acme\Mailers\UserMailer@welcome');
/* Event::subscribe('Acme\Mailers\UserMailer'); */

