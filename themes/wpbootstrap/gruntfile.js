module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'style.css' : 'scss/main.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'scss/main.scss',
                tasks: ['sass'],
                compress: true
            },
            options: {
                livereload: true
            }

        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
}