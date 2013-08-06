orno-tasks
==========

A task management system written using orno http://getorno.com/


SQL
===

Some test sql to get a basic DB up and running from nothing

create table tasks (
id integer primary key autoincrement,
title text,
content text,
date_created datetime,
date_due datetime,
date_updated datetime,
date_complete datetime,
priority int(1)
);

insert into tasks ( title, content, date_created, date_due, priority ) values ( "Test Task", "<p>This is a test task to see what we can do.</p>", datetime("now"), "2013-10-08 09:00:00", 4 );
insert into tasks ( title, content, date_created, date_due, priority ) values ( "Test Task 2", "<p>This is a second test task to see what we can do.</p>", datetime("now"), "2013-11-08 09:00:00", 4 );
