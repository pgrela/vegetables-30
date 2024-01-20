CREATE TABLE `votes`
(
    `id`              int(10) UNSIGNED NOT NULL,
    `code`            varchar(50)  NOT NULL,
    `name`            varchar(200) NOT NULL,
    `number_of_votes` int(11) NOT NULL DEFAULT 0
);

ALTER TABLE `votes`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

ALTER TABLE `votes`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

INSERT INTO `votes` (`code`, `name`) VALUES ('carrot', 'Carrot');
INSERT INTO `votes` (`code`, `name`) VALUES ('broccoli', 'Broccoli');
INSERT INTO `votes` (`code`, `name`) VALUES ('tomato', 'Tomato');
INSERT INTO `votes` (`code`, `name`) VALUES ('potato', 'Potato');
INSERT INTO `votes` (`code`, `name`) VALUES ('spinach', 'Spinach');
INSERT INTO `votes` (`code`, `name`) VALUES ('cucumber', 'Cucumber');
INSERT INTO `votes` (`code`, `name`) VALUES ('bell_pepper', 'Bell Pepper');
INSERT INTO `votes` (`code`, `name`) VALUES ('onion', 'Onion');
INSERT INTO `votes` (`code`, `name`) VALUES ('garlic', 'Garlic');
INSERT INTO `votes` (`code`, `name`) VALUES ('cauliflower', 'Cauliflower');
INSERT INTO `votes` (`code`, `name`) VALUES ('zucchini', 'Zucchini');
INSERT INTO `votes` (`code`, `name`) VALUES ('eggplant', 'Eggplant');
INSERT INTO `votes` (`code`, `name`) VALUES ('radish', 'Radish');
INSERT INTO `votes` (`code`, `name`) VALUES ('cabbage', 'Cabbage');
INSERT INTO `votes` (`code`, `name`) VALUES ('lettuce', 'Lettuce');
INSERT INTO `votes` (`code`, `name`) VALUES ('kale', 'Kale');
INSERT INTO `votes` (`code`, `name`) VALUES ('brussels_sprouts', 'Brussels Sprouts');
INSERT INTO `votes` (`code`, `name`) VALUES ('asparagus', 'Asparagus');
INSERT INTO `votes` (`code`, `name`) VALUES ('sweet_potato', 'Sweet Potato');
INSERT INTO `votes` (`code`, `name`) VALUES ('green_bean', 'Green Bean');
INSERT INTO `votes` (`code`, `name`) VALUES ('peas', 'Peas');
INSERT INTO `votes` (`code`, `name`) VALUES ('corn', 'Corn');
INSERT INTO `votes` (`code`, `name`) VALUES ('artichoke', 'Artichoke');
INSERT INTO `votes` (`code`, `name`) VALUES ('beetroot', 'Beetroot');
INSERT INTO `votes` (`code`, `name`) VALUES ('celery', 'Celery');
INSERT INTO `votes` (`code`, `name`) VALUES ('pumpkin', 'Pumpkin');
INSERT INTO `votes` (`code`, `name`) VALUES ('squash', 'Squash');
INSERT INTO `votes` (`code`, `name`) VALUES ('turnip', 'Turnip');
INSERT INTO `votes` (`code`, `name`) VALUES ('okra', 'Okra');
INSERT INTO `votes` (`code`, `name`) VALUES ('leek', 'Leek');
