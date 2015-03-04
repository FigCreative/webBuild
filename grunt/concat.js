module.exports = {
  dist: {
    src: [ 
	    'bower_components/modernizr/modernizr.js', 
	    'bower_components/fastclick/lib/fastclick.js', 
	    'bower_components/html5shiv/dist/html5shiv.js',
	    'bower_components/foundation/js/foundation.js',
        'bower_components/foundation/js/foundation/foundation.reveal.js',
        'bower_components/ResponsiveSlides.js/responsiveslides.js',
	    'js/*.js'
	    ],
    dest: 'html/assets/js/build.js',
  }
};