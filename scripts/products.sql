/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  venerguverra
 * Created: May 29, 2019
 */

create table products (
	product_id int primary key,
    `name` varchar(25) not null,
    `desc` varchar(100) not null, 
    price decimal(6,2) not null
);


insert into products values(1, 'Spaghetti', 'Spaghetti noodles in meaty and cheesy tomato sauce', 40);
insert into products values(2, 'Baked Macaroni', 'Oven baked macaroni in meaty tomato sauce and topped with creamy cheese', 40);
insert into products values(3, 'Fettucine', 'Fettuccine noodles in creamy and meaty white sauce', 45);
insert into products values(4, 'Lasagna', 'Layers of noodles sheets  in meaty tomato sauce topped with creamy cheese', 50);
