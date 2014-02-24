CakeMyAdmin
===========

CakePHP based plugin that is a replacement for PhpMyAdmin.

## Install
==========

### Manual

	Really? Just clone it or use Composer...

### Git

Clone the repo to your project

	git clone https://github.com/dogmatic69/CakeMyAdmin.git Plugin/Cma

### Composer

	Comming soon

## Basics

CakeMyAdmin (Cma for short) uses normal CakePHP libs (such as auth, models, Dbo etc) to work.

Login is done with a custom Authentication addaptor that simply checks if the credentials provided can connect to a Database. If they can the details are stored in a session and you are "logged in". If they can't connect a message is displayed and access is not granted.

Currently this is quite new and only wokring for MySQL. Once more functionality is covered work will be done to make the code more abstract and easier to connect to other datasources. The goal is to be able to work with any data source (eg, SOAP, JSON, MsSQL, Postgres etc). Any valid CakePHP Datasource should work.

## Roadmap

As it is built using the CakePHP framework, the idea would be to add some CakePHP specific features. Some ideas to look at include:

#### Planned

- Schema validation
- Export fixture class
- Export Schema class
- Compare databases and/or tables (using CakeSchema)
- Connect to any DataSource
- Basic Reports and Charts

#### Implemented Features

General CRUD functionality:

> CAPITAL = Full implemented
> lowercase = Partial implemented
> - = Not yet implemented

	Databases:     CRUD
	Tables:        -R--
	Configuration: -r--

- Auto bind relations that are detected and link records in the UI.