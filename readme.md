Fig Base Production Template
======
Based on Wadehammes Version @ wadehammes/base-foundation-wordpress
----
Uses CSSWizardry Grids, Read more at https://github.com/csswizardry/csswizardry-grids
Also includes the standard functions such as Image minification, SASS, JShint and JS uglify.

####PRIOR TO FIRST USE:
You will need to make sure you have the following installed to your machine (via Terminal):

Install NPM first:
<a href="http://nodejs.org/download/">http://nodejs.org/download/</a>

Then Grunt:
<a href="http://gruntjs.com/getting-started">http://gruntjs.com/getting-started</a>

Then Bower:
<code>$ npm install -g bower</code>

After that, install some other dependencies:
<code>$ sudo gem install -g sass</code>


####AFTER ABOVE DEPENDENCIES ARE INSTALLED AND FOR FUTURE USE:
Once you are ready to compile the project, copy them to your project directory from the repo. NOTE: do not initiate your project in this repo! You will have to perform the below steps with every new project in order to have nodes, bower packages, and bourbon up-to-date.

Download these files and rename your directory to your project name then run the following:

In terminal:
<code>$ cd your/yourprojectname/directory</code>

Install the Node Modules into the project, also install the Bower dependencies into the project, and run pre-production grunt:
<code>$ npm install && bower install && grunt</code>

To watch and compile the files you change (SASS & JS) and update your web page use:
<code>$ grunt watch</code>

If new images have been added to the folder then run 
<code>$ grunt newer:imagemin</code>
