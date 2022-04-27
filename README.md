# TOURISM RESERVATION SYSTEM
| NAME          | REGISTRATION NUMBER   | COURSE|
| ------------- | ----------------------|-------|
| MKANGWA,SALEH | 2018-04-02447         |  CS   |
| MKUNGILE,FEISAL | 2018-04-06736       |  CS   |
| KIDAMABI,GRACE | 2018-04-07234        |  CEIT |
| MOSES,RAYMAN | 2018-04-07599          |  CS   |
| MOSHI,AYUBU | 2018-04-11002           |  CS   |
| MOYO,POISENT | 2018-04-07575          |  CS   |
| MASSAY,EMMANUEL | 2018-04-01672       | CEIT  |

# PROBLEM STATEMENT
Many people tend to lose interest in tourism because of the whole process of reservation of hotels and transport as well as lacking of real details on attractiveness of the tour places. Hence the Tourism Reservation System tends to simplify planning and management of the tourism activity to client.
# INTRODUCTION
Tourism Reservation System is a system that clients can use to book transport and hotels for their tour. This would greatly aid easen the burden faced by travellers while simultaneously helping tour operators attract customers
# MAIN OBJECTIVE
The main objective of the system is to simplify tourism activity to clients in transport, hotel and tour reservations.
# SPECIFIC OBJECTIVE
1. Client can view and book tour places with respective transports and hotels
2. Client can book for the tour package
3. Tour guides can view their assigned clients and their tour package

# LINKS TO PAGES
1. [Functional Requirements](https://github.com/lion1998/CS_335_group11/wiki/Functional-Requirements)
2. [Non functional Requirements](https://github.com/lion1998/CS_335_group11/wiki/Non-Functional-Requirements)
3. [Project Risks](https://github.com/lion1998/CS_335_group11/wiki/Project-Risks)
4. [Project Design](https://github.com/lion1998/CS_335_group11/wiki/System-Design)
5. [Tasks](https://github.com/lion1998/CS_335_group11/wiki/Tasks)

# INSTALLATION
* Clone GitHub repo for this project locally
`git clone https://github.com/lion1998/CS_335_group11.git` 
* Change directory into your project
`cd CS_335_group11`
* Install Composer Dependencies
`composer install`
* Install NPM Dependencies
`npm install`
* Create a copy of your .env file
`cp .env.example .env`
* Generate an app encryption key
`php artisan key:generate`
* Create an empty database for our application
database name: trs
* In the .env file, add database information to allow Laravel to connect to the database
set your DB_USERNAME, and DB_PASSWORD
* Migrate and Seed the database
`php artisan migrate --seed`

# CONTRIBUTION
* Create new branch (active)
`git checkout -b <YourBranchName>`
* To update changes to the branch
`git push origin <BranchName>`
* Create pull request
* Code review and merge
