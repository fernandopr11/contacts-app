
# Contacts app 

*Manage your contacts*

#### Table of contents

- [Local Setup](#local-setup)
- [Database config](#database-config)
  -  [Credentials to access database](#credentials-to-access-database)
  -  [Create and setup database ](#create-and-setup-database)
- [Use Aplication](#use-app)


## Local Setup

Execute this command in root dir

Run app in docker container

```bash
docker-compose up -d
```

App running in http://localhost:8000/  
PHPMyAdmin running in http://localhost:8080/

## Database config

### Credentials to access database

**User**: root  
**Password**: MYSQL_ROOT_PASSWORD

![LOGINPHP](https://user-images.githubusercontent.com/76860968/161366636-d9ad318c-2dc8-4233-bac9-cc9be243a25f.png)

### Create and Setup database 

Once logged into PHPMyadmin, we go to the import section at the top, and import the script to generate the contacts-app database.

Script location [Script](https://github.com/fernandopr11/contacts-app/blob/main/src/sql/setup.sql).

![image](https://user-images.githubusercontent.com/76860968/161366815-fa1e382e-264c-462a-a6e7-788709e0d9c7.png)

## Use APP

To use the application it is necessary to create a user and then loggin, with that we will be able to create our contacts.

![image](https://user-images.githubusercontent.com/76860968/161367056-c3f17623-8598-4823-a171-076c6add57cb.png)











