module.exports = function(grunt) {

	grunt.initConfig({
		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'wp-content/themes/exitplan/media/css/style.css': 'wp-content/themes/exitplan/media/sass/style.scss'
				}
			}
		},
		watch: {
			sass: {
				files: [
					'wp-content/themes/exitplan/media/sass/*.scss',
					'wp-content/themes/exitplan/media/sass/*/*.scss',
				],
				tasks: ['sass'],
				options: {
					livereload: true
				}
			},
			files: {
				files: 'wp-content/themes/exitplan/*.php',
				options: {
					livereload: true
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['sass']);

}
