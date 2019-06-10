# BOXflix


:scroll: A backend to register your favorite movies

## Table of Contents

- [Introduction]
- [Techonology]
- [Getting Started]
  - [Running Locally]
  - [Running Tests]
- [Avaliable Routes]
- [All Tasks]
- [Useful Links]


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



## All Tasks
Routes
- [x] Authentication
    - [x] sign up
    - [x] login
- [x] List Movies
- [ ] List favorite movies of the user
- [ ] Save a favorite movie
- [ ] Revome movie from favorite list

Jobs
- [ ] populate movies table with Task Scheduling of laravel (24h)

Documentation
- [ ] Link with all routes on postoman
- [ ] PHP Documentor

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