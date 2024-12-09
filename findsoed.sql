-- Active: 1731138051314@@127.0.0.1@3306@findsoed_ci

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";

CREATE TABLE `categories` (
    `id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO
    `categories` (`id`, `name`, `created_at`)
VALUES (
        1,
        'Laptop',
        '2024-12-05 00:00:00'
    ),
    (
        2,
        'Handphone',
        '2024-12-05 00:00:00'
    );

CREATE TABLE `posts` (
    `id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `slug` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `photo` varchar(255) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `username`,
        `password`,
        `register_date`
    )
VALUES (
        1,
        'Naufal Hakim',
        'naufal@gmail.com',
        'naufal',
        'e10adc3949ba59abbe56e057f20f883e',
        '2024-12-05 00:00:00'
    ),
    (
        2,
        'Tasha Maulia',
        'tasha@gmail.com',
        'tasha',
        'e10adc3949ba59abbe56e057f20f883e',
        '2024-12-05 00:00:00'
    );

ALTER TABLE `categories` ADD PRIMARY KEY (`id`);

ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

ALTER TABLE `users` ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;

ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;