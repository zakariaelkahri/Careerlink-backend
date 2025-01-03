CREATE table role 
	(id int AUTO_INCREMENT PRIMARY key not null,
    role enum('admin','recruteur','candidat') not null
    
                  )

create TABLE users(
    id int primary key AUTO_INCREMENT,
    email char(100) not null,password char(100),
    role_id int not null,
    FOREIGN key (role_id) REFERENCES role(id) on delete CASCADE on UPDATE CASCADE
    ) 

create TABLE recruteur 
(
    id int primary key AUTO_INCREMENT not null,
    nomentreprise char(200) not null,
    user_id int not null  ,
    FOREIGN key (user_id) REFERENCES users(id) on delete CASCADE on UPDATE CASCADE
    
)

create TABLE candidat 
(
    id int primary key AUTO_INCREMENT not null,
    user_id int not null  ,
    FOREIGN key (user_id) REFERENCES users(id) on delete CASCADE on UPDATE CASCADE
    
)
create TABLE admin 
(
    id int primary key AUTO_INCREMENT not null,
    user_id int not null ,
    FOREIGN key (user_id) REFERENCES users(id) on delete CASCADE on UPDATE CASCADE
    
)
