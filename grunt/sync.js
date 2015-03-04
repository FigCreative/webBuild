module.exports = {
  main: {
    files: [
     {  cwd: 'fonts', src: ['*'], dest: 'html/assets/css/fonts'},
      {  cwd: 'html/assets/img/', src: ['*'], dest: 'Wordpress/wp-content/themes/yourprojectname/assets/img/'},
      {  cwd: 'html/assets/css/', src: ['*'], dest: 'Wordpress/wp-content/themes/yourprojectname/assets/css/'},
       {  cwd: 'html/assets/css/fonts', src: ['*'], dest: 'Wordpress/wp-content/yourprojectname/yourprojectname/assets/css/fonts'},
      {  cwd: 'html/assets/js/', src: ['*'], dest: 'Wordpress/wp-content/themes/yourprojectname/assets/js/'},
    
    ]
}
};