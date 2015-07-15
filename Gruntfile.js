module.exports = function(grunt) {
  grunt.initConfig({  
    php: {
	  dev: {
	    options: {
          hostname: 'localhost',
	      port: 9000,
	      base: 'src',
	      open: true,
		  keepalive: true
        }
	  }
    }
  });
 
  grunt.loadNpmTasks('grunt-php');

  grunt.registerTask('default', ['php']);
}