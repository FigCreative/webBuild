module.exports = {
  dist: {
    src: [ 
	    'bower_components/jquery/dist/jquery.js', 
	    'bower_components/modernizr/modernizr.js', 
	    'bower_components/fastclick/lib/fastclick.js', 
	    'bower_components/html5shiv/dist/html5shiv.js',
	    'bower_components/lazyloadxt/dist/jquery.lazyloadxt.js', 
	    'bower_components/responsive-nav/responsive-nav.js',
	    'bower_components/ResponsiveSlides.js/responsiveslides.js',
	    'js/*.js'
	    ],
    dest: 'html/assets/js/build.js',
  }
};