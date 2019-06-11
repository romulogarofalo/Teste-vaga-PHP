# BOXflix


:scroll: A backend to register your favorite movies

## Table of Contents

- [Introduction](#introduction)
- [Techonology](#technology)
- [Getting Started](#getting-started)
  - [Running Locally](#running-locally)
  - [Running Tests](#running-tests)
- [Available Routes](#available-routes)
- [All Tasks](#tasks)
- [Useful Links](#useful-links)


## Introduction

Boxflix it's a backend to register your favorite movies and bring all the new movies

## Techonology

What was used:
- **[Docker](https://docs.docker.com)** and **[Docker Compose](https://docs.docker.com/compose/)** to create our development and test environments.
- **[CircleCI](https://circleci.com)** for deployment and as general CI. ()
- **[Mysql](https://www.mysql.com/)** to store the data and **[Eloquent](https://laravel.com/docs/5.8/eloquent)** as a PHP ORM (object relational map).

## Getting Started

To get started, you should install **Docker** and **Docker Compose**.
Then, clone the repository:

```
$ git clone https://github.com/romulogarofalo/Teste-vaga-PHP.git
```

and need to give permission to execute the file

```
$ chmod +rwx config.sh
```

and execute it

```
$ ./config.sh
```


## Available Routes

| Rotas                  | Descrição                                  | Metodos HTTP |
|------------------------|--------------------------------------------|--------------|
|/api/login              | login route and auth                       | POST         |
|/api/signup             | register of new user                       | POST         |
|/api/user               | get informations of user                   | GET          |
|/api/getmovies          | register of new user                       | GET          |
|/api/saveFavoriteMovie  | register of new user                       | POST         |
|/api/listFavoriteMovies | register of new user                       | GET          |
|/api/deleteFavoriteMovie| register of new user                       | DELETE       |

[for more datails here the link for Postman docs](https://documenter.getpostman.com/view/1994420/S1TbRu6f?version=latest#cfd298f4-9f6e-ec6b-115f-efb90e7e7466)

## All Tasks
Routes
- [x] Authentication
    - [x] sign up
    - [x] login
- [x] List Movies
- [x] List favorite movies of the user
- [x] Save a favorite movie
- [x] Revome movie from favorite list

Documentation
- [x] Link with all routes on postoman
- [x] PHP Documentor

Tests
- [ ] Authentication
    - [ ] integration
    - [ ] Unit
- [ ] List Movies
    - [ ] integration
    - [ ] Unit
- [ ] List favorite movies of the user
    - [ ] integration
    - [ ] Unit
- [ ] Save a favorite movie
    - [ ] integration
    - [ ] Unit
- [ ] Revome movie from favorite list
    - [ ] integration
    - [ ] Unit

Infrastructure
- [ ] use travis or circle.ci
- [ ] Integrate with Coveralls (tool to do covarage tests)
- [ ] auto deploy on Heroku
- [ ] configs pre-commit