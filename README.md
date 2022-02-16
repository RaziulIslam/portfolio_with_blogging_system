
# Dynamic Portfolio
Why i am calling it dynamic portfolio? because we can change contents using a admin panel by logging.


## Run Locally

Clone the project

```bash
  git clone https://github.com/RaziulIslam/portfolio_with_blogging_system.git
```

Go to the project directory

```bash
  cd project_name
```

Now download the sql file from sql directory. Go localhost/phpmyadmin to create a database table called portfolio and import the sql file. After that go to admin directory, where you can find db.php file. Here you have to change the $dbname variable value to your database table name.

Another thing we have to make sure put project directory's absolute in $my_root variable in root.php file. So this variable can find the assets.
    