# slim-repo-search

I have been asked to submit some PHP code for review to Squiz.

Currently I do PHP for a commercial business so for this task I decided to create a small application using the Slim PHP framework which is different from my the day to day PHP environment (bespoke MVC).

I have chosen Slim as it is a light weight framework that is simple and has great performance.

The application's aim is to search the GitHub API for repositories that the user has requested. I have attempted to make this flexible so that other searches on alternate repositories can be easily added.

This is running on the localhost with the following:
* localhost/hello - shall provide a 'Hello' asking for what repositories you would like to find
* localhost/hello/$name - shall provide a 'Hello $name' asking for what repositories you would like to find

To get running, most of my handy work is in /usr/local/HelloSlim;
Slim framework is in /usr/local/Slim;
index.php + .htaccess I have done via /var/www in my local installation

Would have liked to have gotten some tests & some SquizCodeSniffers in but time was not permitting. I would also have put in some JavaScript to play with the results output and also link in another repository source.