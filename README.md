# web-course-project

### Backend set up
- install composer and 
  - `php-di` for dependency injection
  - `slim`, `slim/psr7`, 'slim/twig-view' the framework
  - `twig` a php templating engine
  - `doctrine/dbal`, `doctrine/orm`, `doctrine/migrations` for DB management
  - `vlucas/phpdotenv` and `vlucas/valitron` for importing environment variables

- make `.env.example`
- each team member sets up there `.env` file 
- add `/vendor` directory and `.env` file to `.gitignore`

### why use these tools ??
- `slim` framework: 
  - allows setting routes (endpoints) for the website
  - adds abstraction layer to the request and response to facilitate dealing with them
  - allows using middlewares (used for checking user's authorization rules and redirecting the user if needed)

- `doctrine/ORM`: stands for Object Relational Mapping, used for building the DB using php objects instead of writing SQL, each class/entity represents a table in the DB
- `doctrine/migrations`: a solution for DB schema versioning, facilitates updating the DB schema
- `twig`: provides advanced HTML rendering capabilities
- `vlucas/phpdotenv`: loads environment variables from `.env` file
  - environment variables can be DB user, DB password, DB name.
  - note that these things differ depending on the environment each developer is using while working on the project