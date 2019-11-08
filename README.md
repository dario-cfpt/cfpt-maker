# cfpt-maker

Création d’un framework permettant la création de niveau d’un jeu de
plateforme du style Super Mario Maker.

## Prerequisites

You must have node and npm installed in order to run the project.

You will also need a MySQL database with a specific user. See the next section to configure it.

## Configure the database

You just need to run the `create_db_cfpt_maker.sql` script to create the database and the user. The tables will be
automatically created when you will run the project.

## Install the project

```bash
$ git clone https://github.com/dario-cfpt/cfpt-maker.git
$ cd cfpt-maker
```

## Install the dependencies

```bash
$ npm install
```

## Run the project

```bash
$ npm start
```

## Routes of the app
### Hello world
```
GET /
```
Return Hello World

### Create a new user
```
POST /user
```
Require an object with `email` , `username` and `password`. The email and username must be unique in the database.

Return an object of the created user if the creation has been successful, else return an Internal Server Error(500).

### Try to login the user
```
POST /login
```
Require an object with `email` , `username` and `password`

Return an User object with the same informations if the login has been successful,
else return an Internal Server Error(500).

### Create a new map
```
POST /map
```
Require an object of the following structure :
```json
{
	"name": "Name of the map",
	"user": {
		"id": 1
	},
	"map": {
		"mapContent": "",
		"nbRow": 20,
		"nbCol": 20
	},
	"asset": {
		"id": 1
	}
}
```
The keys must be the same but the values can be modified (but not null).

Return an object of the new created map if the creation has been successful,
else return an Internal Server Error(500).

### Get an user by his id
```
GET /user/{userId}
```

If the id is correct, return an User object with username, email, his created maps, his scores and his ratings.

Return an Internal Server Error(500) if the id is not existing.