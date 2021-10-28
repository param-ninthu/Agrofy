USE AGROFY;

CREATE TABLE FARMER_REG(FIRST_NAME VARCHAR(50),LAST_NAME VARCHAR(50),GENDER VARCHAR(6),EMAIL VARCHAR(150),USER_ROLE VARCHAR(20),NIC VARCHAR(12),MOBILE INT(11),ADDRESS_ VARCHAR(150),LAND_ADDRESS VARCHAR(150) ,LAND_HECTARES INT(3),TYPE_OF_CROP VARCHAR(100),NO_OF_EMPLOYEES INT(3), PROFILE_IMG BLOB ,USER_NAME VARCHAR(12),PASS VARCHAR(255),VERIFIED BOOLEAN DEFAULT FALSE,REJECTED BOOLEAN DEFAULT FALSE);

CREATE TABLE BUSINESS_REG(FIRST_NAME VARCHAR(50),LAST_NAME VARCHAR(50),GENDER VARCHAR(6),EMAIL VARCHAR(150),USER_ROLE VARCHAR(20),NIC VARCHAR(12),MOBILE INT(11),ADDRESS_ VARCHAR(150),BUSINESS_NAME VARCHAR(150) ,BUSINESS_REG_NO VARCHAR(15),TYPE_OF_BUSINESS VARCHAR(50),ADDRESS_WORK_PLACE VARCHAR(100), PROFILE_IMG BLOB ,USER_NAME VARCHAR(12),PASS VARCHAR(255),VERIFIED BOOLEAN DEFAULT FALSE,REJECTED BOOLEAN DEFAULT FALSE);

CREATE TABLE COMPOST_SUP_REG(FIRST_NAME VARCHAR(50),LAST_NAME VARCHAR(50),GENDER VARCHAR(6),EMAIL VARCHAR(150),USER_ROLE VARCHAR(20),NIC VARCHAR(12),MOBILE INT(11),ADDRESS_ VARCHAR(150),WORK_ADDRESS VARCHAR(150) ,TYPE_OF_COMPOST VARCHAR(50),BUSINESS_NAME VARCHAR(50), NO_OF_EMPLOYEES INT(3), PROFILE_IMG BLOB ,USER_NAME VARCHAR(12),PASS VARCHAR(255) , VERIFIED BOOLEAN DEFAULT FALSE,REJECTED BOOLEAN DEFAULT FALSE);

CREATE TABLE MODERATOR_REG(FIRST_NAME VARCHAR(50),LAST_NAME VARCHAR(50),GENDER VARCHAR(6),EMAIL VARCHAR(150),JOB_ROLE VARCHAR(20),NIC VARCHAR(12),MOBILE INT(11),ADDRESS_ VARCHAR(150) , USER_NAME VARCHAR(12),PASS VARCHAR(255),REJECTED BOOLEAN DEFAULT FALSE , PRIMARY KEY(USER_NAME));

CREATE TABLE FARMER_PRODUCTS(USER_NAME VARCHAR(12),CROP_NAME VARCHAR(50),CROP_TYPE VARCHAR(50),CROP_DESCRIPTION VARCHAR(400),CROP_IMAGE BLOB, CROP_PRICE INT , CROP_QUANTITY INT,FOREIGN KEY (USER_NAME) REFERENCES FARMER_REG(USER_NAME));

CREATE TABLE COMPOST_SUPPLIER_CUSTOMER_PAYMENTS(USER_NAME VARCHAR(12),FIRST_NAME VARCHAR(50),ITEM_PURCHASED VARCHAR(50),QUANTIY INT,METHOD_OF_PAYMENT VARCHAR(50),AMOUNT INT,VERIFIED BOOLEAN DEFAULT FALSE,REJECTED BOOLEAN DEFAULT FALSE,FOREIGN KEY (USER_NAME) REFERENCES FARMER_REG(USER_NAME));

CREATE TABLE COMPOST_SUPPLIER_CUSTOMER_FEEDBACK(USER_NAME VARCHAR(12),FIRST_NAME VARCHAR(50),ITEM_PURCHASED VARCHAR(50),RATING INT,FEEDBACK VARCHAR(300),FOREIGN KEY (USER_NAME) REFERENCES FARMER_REG(USER_NAME));

CREATE TABLE COMPOST_SUP_PRODUCTS(USER_NAME VARCHAR(12),COMPOST_NAME VARCHAR(50),COMPOST_TYPE VARCHAR(50),COMPOST_DESCRIPTION VARCHAR(400),COMPOST_IMAGE BLOB, COMPOST_PRICE INT , COMPOST_QUANTITY INT,FOREIGN KEY (USER_NAME) REFERENCES COMPOST_SUP_REG(USER_NAME));
