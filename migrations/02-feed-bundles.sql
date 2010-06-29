INSERT INTO `feeder_bundle` (`id`, `shortname`) VALUES 
(2, 'twitter-mobile'),
(1, 'twitter-web');

INSERT INTO `feeder_bundle_feeds` (`id`, `bundle_id`, `feed_id`) VALUES 
(1, 1, 2),
(2, 1, 3),
(3, 1, 5),
(4, 2, 4);
