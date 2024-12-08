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

INSERT INTO
    `posts` (
        `id`,
        `category_id`,
        `user_id`,
        `title`,
        `slug`,
        `description`,
        `photo`,
        `created_at`
    )
VALUES (
        1,
        1,
        1,
        'Kehilangan Laptop Acer Nitro V',
        'kehilangan-acer-nitro-v',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et molestie eros. Maecenas dignissim, erat at faucibus finibus, nunc nibh finibus lacus, sed gravida leo urna at erat. Proin et efficitur dolor, eget interdum enim. Cras nec ante quis tellus gravida ornare. Duis arcu lacus, elementum quis iaculis id, mattis ut turpis. Pellentesque id dignissim dolor. Curabitur finibus facilisis pulvinar. Nullam urna arcu, malesuada a purus a, pharetra pulvinar lacus. Curabitur quis ornare felis, ut ultrices nulla.Fusce placerat aliquam erat, et sagittis diam accumsan vitae. In elementum vel augue sit amet bibendum. Nulla cursus elit metus. Ut auctor nisl quis bibendum tincidunt. Integer gravida nisi id urna rhoncus, nec tristique magna efficitur. Mauris non blandit ipsum, ut tempus purus. Praesent rhoncus gravida aliquam. Nulla finibus mi id fermentum fringilla. Morbi volutpat, massa eget sodales tempus, est risus elementum leo, pulvinar fermentum diam nibh a mi. Phasellus porttitor vitae mauris non elementum. Sed ut lacinia sapien. Proin a metus ullamcorper lectus ultricies euismod. Donec vitae turpis eros. Morbi at imperdiet ligula. Mauris sed rutrum lectus. Phasellus eget nulla congue, dictum dolor ac, dapibus justo.',
        'kocak.png',
        '2024-12-05 00:00:00'
    ),
    (
        2,
        2,
        1,
        'Kehilangan Motor Mainan',
        'kehilangan-motor-mainan',
        'Cras nec ante quis tellus gravida ornare. Duis arcu lacus, elementum quis iaculis id, mattis ut turpis. Pellentesque id dignissim dolor. Curabitur finibus facilisis pulvinar. Nullam urna arcu, malesuada a purus a, pharetra pulvinar lacus. Curabitur quis ornare felis, ut ultrices nulla.Fusce placerat aliquam erat, et sagittis diam accumsan vitae. In elementum vel augue sit amet bibendum. Nulla cursus elit metus. Ut auctor nisl quis bibendum tincidunt. Intes elementum leo, pulvinar fermentum diam nibh a mi. Phasellus porttitor vitae mauris non elementum. Sed ut lacinia sapien. Proin a metus ullamcorper lectus ultricies euismod. Donec vitae turpis eros. Morbi at imperdiet ligula. Mauris sed rutrum lectus. Phasellus eget nulla congue, dictum dolor ac, dapibus justo.',
        'kocak.png',
        '2024-12-05 00:00:00'
    ),
    (
        3,
        2,
        2,
        'Kehilangan semangat skripsian',
        'kehilangan-semangat-skripsian',
        'Test aja ye kan',
        'lah.jpg',
        '2024-12-05 00:00:00'
    );

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