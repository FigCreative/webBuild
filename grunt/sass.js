module.exports = {
    dist: {
      files: [{
        expand: true,
        cwd: 'styles',
        src: ['*.scss'],
        dest: '../public',
        ext: '.css'
      }]
    }

};