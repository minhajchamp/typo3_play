--
-- Table structure for table `ns_product_license`
--
CREATE TABLE ns_product_license (
	uid int(11) NOT NULL auto_increment,
	name varchar(50) DEFAULT NULL,
	email varchar(255) NOT NULL,
	order_id varchar(50) NOT NULL,
	license_key varchar(255) NOT NULL,
	extension_key varchar(50) NOT NULL,
	product_link text,
  	documentation_link text,
	version varchar(15) DEFAULT NULL,
	lts_version varchar(15) NOT NULL,
	is_life_time varchar(5) DEFAULT NULL,
	expiration_date int(11) DEFAULT '0' NOT NULL,
	domains text,
	license_type varchar(5) DEFAULT NULL,

	PRIMARY KEY (uid)
);