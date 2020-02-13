CREATE DATABASE WEBTECHNOLOGYPROJECT
CREATE TABLE business (
        BUSINESS_ID INT AUTO_INCREMENT PRIMARY KEY,
        BUSINESS_NAME VARCHAR(70) NOT NULL,
        BUSINESS_CATEGORY VARCHAR(70) NOT NULL
    );

INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Teasers Boutique', 'Fashion');
INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Nonis Sherwood Grill', 'Food');

INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Uptown Floral Design Studio', 'Fashion');
INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Locker Room Bar', 'Bar');

INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Felle Gallery', 'Entertainment');
INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Detroit Fiber Works', 'Fashion');

INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Detroit Sip', 'Food');
INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Good Cakes and Bakes', 'Food');

INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Kuzzos Chicken and Waffles', 'Food');
INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Narrow Way Cafe And Shop', 'Food');

INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('Bakers Keyboard Lounge', 'Entertainment');
INSERT INTO `business`(`BUSINESS_NAME`, `BUSINESS_CATEGORY`) VALUES ('BP and Mobile Gas Stations', 'Gas');




CREATE TABLE business_INFO (
        BUSINESS_INFO_ID INT AUTO_INCREMENT PRIMARY KEY,
        BUSINESS_ID INT,
        BUSINESS_NAME VARCHAR(70) NOT NULL,
        BUSINESS_CONTACT VARCHAR(70) NOT NULL
        BUSINESS_CATEGORY VARCHAR(70) NOT NULL,
        BUSINESS_SOCIAL_ID INT,
        BUSINESS_IMAGE_ID INT
    );

INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (`1`, `Teasers Boutique`, `19355 Livernois Ave, Detroit MI 48221, 313-341-3131`, `Fashion`)
INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (2, 'Nonis Sherwood Grill', '19700 Livernois, contact info:Johnny = Owner 313.342.6000', 'Food')

INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (3, `Uptown Floral Design Studio`, `19150 Livernois Contact: Rob 313-468-4614`, `Fashion`)
INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (4, 'Locker Room Lounge', '18290 Livernois, Manager = Jason, Owner = Angela Vincent Phone: 313-864-1220', 'Bar')

INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (5, 'Felle Gallery', '(313) 415-6308', 'Entertainment');



INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (6, 'Detroit Fiber Works', 'Contact: Mandisa Smith Co-owners: Najma Wilson & Mandisa Smith 19359 Livernois Ave., Detroit, MI 48221 313-610-5111', `Fashion`)
INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (7, 'Detroit Sip', '7420 W. McNichols, Detroit, MI 48221 Owner: Jovana Watson', 'Food')
INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (8, 'Detroit Cakes and Bakes', '19363 Livernois Ave., Detroit, MI 48221 313-468-9915', 'Food')
INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (9, 'Kuzzos Chicken and Waffles', '19345 Livernois Ave., Detroit, MI 48221 313-861-0229', 'Food');
INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (10, 'Narrow Way Cafe And Shop', '19331 Livernois Ave., Detroit, MI 48221 313-397-7727', 'Food');


INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (11, 'Bakers Keyboard Lounge', '20510 Livernois Ave., Detroit, MI 48221 313-345-6300', 'Entertainment');

INSERT INTO `business_info`(`BUSINESS_ID`, `BUSINESS_NAME`, `BUSINESS_CONTACT`, `BUSINESS_CATEGORY`) VALUES (12, 'BP and Mobile Gas Stations', 'Kamal Abdel 313-622-6153', 'Other');


CREATE TABLE business_pictures (
        BUSINESS_PICTURE_ID INT AUTO_INCREMENT PRIMARY KEY,
        BUSINESS_ID INT,
        PICTURE_URL VARCHAR(25) NOT NULL,
    );

INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (1,`images/teasers/1.jpeg`);
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (1,`images/teasers/2.jpeg`);
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (1,`images/teasers/3.jpeg`);
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (1,`images/teasers/4.jpg`);
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (1,`images/teasers/5.jpg`);


INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (2,'images/noni/1.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (2,'images/noni/2.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (2,'images/noni/3.jpg');


INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (3,`images/floral/1.jpeg`);
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (3,`images/floral/2.jpeg`);
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (3,`images/floral/3.jpeg`);

INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (4,'images/locker/1.jpg');

INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (5,'images/felle/1.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (5,'images/felle/2.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (5,'images/felle/3.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (5,'images/felle/4.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (5,'images/felle/5.jpg');


INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (6,'images/fiber/1.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (6,'images/fiber/2.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (6,'images/fiber/3.jpg');


INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (7,'images/sip/1.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (7,'images/sip/2.png');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (7,'images/sip/3.jpg');


INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (8,'images/cakes/1.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (8,'images/cakes/2.png');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (8,'images/cakes/3.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (8,'images/cakes/4.png');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (8,'images/cakes/5.jpg');

INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (9,'images/kuzzos/1.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (9,'images/kuzzos/2.jpg');
INSERT INTO `business_pictures`(, `BUSINESS_ID`, `PICTURE_URL`) VALUES (9,'images/kuzzos/3.jpg');

INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (10,'images/narrow/1.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (10,'images/narrow/2.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (10,'images/narrow/3.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (10,'images/narrow/4.jpg');


INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (11,'images/bakers/1.JPG');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (11,'images/bakers/2.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (11,'images/bakers/3.jpg');
INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (11,'images/bakers/4.jpg');


INSERT INTO `business_pictures`( `BUSINESS_ID`, `PICTURE_URL`) VALUES (11,'images/BP/1.jpg');