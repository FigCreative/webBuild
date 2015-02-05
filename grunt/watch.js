module.exports = {
  grunt: { 
                files: ['gruntfile.js'],
                tasks: ['default'], 
            },
            sass: {
                files: ['scss/*.scss'],
                tasks: ['sass']
            },
            css: {
                files: ['html/assets/css/style.css'],
                tasks: ['cssmin']
            },
            options: {
      livereload: true,
    }
  }

