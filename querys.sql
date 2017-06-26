create table job(
	id integer primary key auto_increment,
	job_title varchar (255),
	job_description text,
	user_id integer,
	job_author varchar (255),
	job_date varchar(100)

)

create table users(
	id integer primary key auto_increment,
	user_email varchar (255),
	user_password text,
	user_name varchar(255)
)
insert into users (user_name, user_email, user_password)
	values ("Admin", "admin@admin.com", "admin666777")