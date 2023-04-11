# Chat App

This is a simple chat app created with Laravel and Bootstrap.

## Features

- Users can log in or register.
- Users can edit their chat colour and profile.
- Users can block any other users.
- Users can join any of the 4 existing chat rooms.
- Users can send messages in the chat rooms.

## TODO

- Add functionality to start private conversations.
- Implement real-time message receiving without refreshing using Pusher or Socket.io.
- Improve the interface to be more responsive.
- Add functionality to three sidebar buttons.

## Setup

1. Clone the repository.
2. Run `composer install`.
3. Copy the `.env.example` file to `.env`.
4. Run `php artisan key:generate`.
5. Set up a database and add the database information to the `.env` file.
6. Run `php artisan migrate` to create the database tables.
7. Run `php artisan db:seed` to seed the database with sample data.

## Usage

1. Run `php artisan serve`.
2. Navigate to the application in your web browser.
3. Login with the email 'user@email.com' with the password 'password'.
