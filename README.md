
# DISQO PHP Assessment (2021-03-14)

This is my DISQO PHP Assessment project.

The first commit is just about the Laravel project, with Sail to manage the DOCKER images and pushes

I kept a running detais diary [here](https://docs.google.com/document/d/1KDEya5d9SrYfhfqFuuRRotMwDp0-2llHWh2hkX7M4OE/edit?usp=sharing) with information about exactly what I did and the time that I spent on the project.  This is done for full discloser of my Sr. Developer skills.

The first step is to create the **notes** tables with seed data.

Used the laravel-json-api project to handle the API routing.


This is a failed attempt.  I did not figure out how to make the Laravel framework implement and suport the relationship between Notes and Users.  And did not implement authentication.

I know how these things are supposed to work - with a foreign key relationship and index on the `notes` table (called `user_id`) and then a users unique `id` is in that field.  I have made this work in Propel, and competitor PHP ORM, but could not solve for Laravel. 

I was also going to implement  Passport for the OAuth 2 security, but decided not to keep working on this till I hear from DISQO.

I reviewed many tutorials in working on this project, including the following:

* https://www.toptal.com/laravel/restful-laravel-api-tutorial
* https://howtojsonapi.com/laravel.html
* https://laravel-json-api.readthedocs.io/en/latest/crud/creating/#creating-resources
* https://www.tutorialspoint.com/laravel/insert_records.htm
* https://auth0.com/blog/testing-laravel-apis-with-phpunit/
* https://laravel.com/docs/8.x
* https://laravel.com/docs/8.x/logging
* https://laravel.com/docs/8.x/eloquent-relationships


<hr />
I also kept a pseudo-diary of the things I was working on, and the time I spent.

#DISQO - PHP Assessment Diary

I wanted to be open and honest in what I did to accomplish the Technical Challenge that you asked me to complete.

Your instructions required using a PHP MVC framework “of your choice”.  The problem I had is, I had not used any PHP framework in 8 years.  So, I decided to use Laravel’s framework since I had been wanting to learn it for some time.

Since you had asked that the assessment have a duration of 3 hours, I decided to lay out what I do on this project, and how much time I spend on things.  I spent more than the 3 allocated hours, but I hope that was more of a guideline than a rule.  And, I hope that my push to learn the new framework, and the job that I did accomplish in the end, will be enough to spark your interest in continuing conversations.

My intention is to get all Bonus points, including some additional things that I think are important (tests, using GitFlow).

###Wednesday
3 hours - going thru a tutorial on how to create a Laravel project, create objects (including database tables and seeded data), and publish the project to a local server - thereby getting a CRUD API implemented for a few example objects.
Note:  By the end of this research, I feel I could reliably follow a pattern and create the API CRUD requests as desired for User and Note objects w/in a 1-2 hour time period.  I intend to use this as the 2nd commit to my project, once I start.

3 hours - Trying to figure out how to implement Auth0 into the application.  On reviewing the requirement, I realize that Auth0 wasn’t the requirement, but OAuth 2.0 is - so I’ll switch to that.

###Thursday
2 hours - Looking into Laravel Sail and Laravel JSON API, how they work, and how I can use them.  Also, see Laravel Passport as an option to handle the OAuth 2.0 requirement.


###Friday
Marina let me know I had received the wrong assessment.  The new one was WAY more work, so I went back and forth with her trying to clarify what to do next.  I requested to talk to Marco, but didn’t hear back.

###Saturday
Decided not to do anything till I hear from Marco.

###Sunday
Spent 2 hours creating the initial build, setting up the Github and Git Flow, and creating the Notes and Users tables and seeders.

###Monday
Created Unit Tests and Logs.  And created and tested the GET API for Notes and Users.

###Tuesday
Spent 3 hours trying to figure out why Laravel was not supporting the relationship between Notes and Users.  Went over several different tutorials, and still cannot resolve this problem.






