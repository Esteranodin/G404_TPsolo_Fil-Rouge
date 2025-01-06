CREATE TABLE `note`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_user` BIGINT NOT NULL,
    `id_book` BIGINT NOT NULL,
    `score` BIGINT NOT NULL
);
CREATE TABLE `categorie`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` BIGINT NOT NULL
);
CREATE TABLE `book_categorie`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_categorie` BIGINT NOT NULL,
    `id_book` BIGINT NOT NULL
);
CREATE TABLE `images`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `img_path` VARCHAR(255) NOT NULL,
    `img_alt` VARCHAR(255) NOT NULL
);
CREATE TABLE `author`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `lastname` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL
);
CREATE TABLE `book`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_saler` BIGINT NOT NULL,
    `isbn` VARCHAR(255) NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `id_author` BIGINT NOT NULL,
    `parutionAt` DATE NOT NULL,
    `edition` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `price` BIGINT NOT NULL,
    `id_image` BIGINT NOT NULL
);
CREATE TABLE `sales`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_isbn` BIGINT NOT NULL,
    `purchaseAt` DATETIME NOT NULL,
    `id_saler` BIGINT NOT NULL,
    `id_buyer` BIGINT NOT NULL
);
ALTER TABLE
    `sales` ADD UNIQUE `sales_id_isbn_unique`(`id_isbn`);
CREATE TABLE `user`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `mail` VARCHAR(191) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL,
    `role` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `user` ADD UNIQUE `user_mail_unique`(`mail`);
CREATE TABLE `user_pro`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `phone` VARCHAR(255) NOT NULL,
    `company` VARCHAR(255) NULL,
    `companyAdress` VARCHAR(255) NULL,
    `id_user` BIGINT NOT NULL,
    `isValidated` BOOLEAN NOT NULL
);
ALTER TABLE
    `sales` ADD CONSTRAINT `sales_id_buyer_foreign` FOREIGN KEY(`id_buyer`) REFERENCES `user`(`id`);
ALTER TABLE
    `book` ADD CONSTRAINT `book_id_image_foreign` FOREIGN KEY(`id_image`) REFERENCES `images`(`id`);
ALTER TABLE
    `book_categorie` ADD CONSTRAINT `book_categorie_id_book_foreign` FOREIGN KEY(`id_book`) REFERENCES `book`(`id`);
ALTER TABLE
    `sales` ADD CONSTRAINT `sales_id_isbn_foreign` FOREIGN KEY(`id_isbn`) REFERENCES `book`(`isbn`);
ALTER TABLE
    `book` ADD CONSTRAINT `book_id_author_foreign` FOREIGN KEY(`id_author`) REFERENCES `author`(`id`);
ALTER TABLE
    `book` ADD CONSTRAINT `book_id_saler_foreign` FOREIGN KEY(`id_saler`) REFERENCES `user_pro`(`id`);
ALTER TABLE
    `book_categorie` ADD CONSTRAINT `book_categorie_id_categorie_foreign` FOREIGN KEY(`id_categorie`) REFERENCES `categorie`(`id`);
ALTER TABLE
    `note` ADD CONSTRAINT `note_id_book_foreign` FOREIGN KEY(`id_book`) REFERENCES `book`(`id`);
ALTER TABLE
    `user_pro` ADD CONSTRAINT `user_pro_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `note` ADD CONSTRAINT `note_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `sales` ADD CONSTRAINT `sales_id_saler_foreign` FOREIGN KEY(`id_saler`) REFERENCES `user_pro`(`id`);