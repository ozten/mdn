INSERT INTO `feeder_bundle` (`id`, `shortname`) VALUES 
(6, 'updates-addons'),
(5, 'updates-apps'),
(7, 'updates-mobile'),
(8, 'updates-web');

INSERT INTO `feeder_bundle_feeds` (`id`, `bundle_id`, `feed_id`) VALUES 
(5, 7, 6),
(6, 8, 1);
