# ISD_Project_2017
Hotel_Booking
tHE TEXTfile database contains the instructions to create table. Please create a db called 'testdb' first and then copy and paste the above codes in the MySQL console.



CREATE TABLE user(
   fname varchar(30),
    lname varchar(30),
    email varchar(60) UNIQUE ,
    password varchar(40),
    username varchar(15),
   PRIMARY KEY( username)
);

CREATE TABLE roominfo(
 time date,
 room varchar(30),
 cost float ,
 freeroom int,
 bookedroom int,
 totalroom int,
 PRIMARY KEY( time,room) 
);
CREATE TABLE booking_history(
 username varchar(15),
 telephone varchar(15),
 room varchar(30) ,
 roomno int,
 sDate date,
 eDate date 
);
