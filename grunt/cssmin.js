module.exports = {
  target: {
    files: [{
      expand: true,
      cwd: 'html/assets/css',
      src: ['*.css', '!*.min.css'],
      dest: 'html/assets/css',
      ext: '.min.css'
    }],
    options: {
      shorthandCompacting: false,
      roundingPrecision: -1
    }
  }
  }