module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            dist: {
                files: {
                    'style.css' : 'less/main.less'
                }
            }
        },
        watch: {
            css: {
                files: 'less/main.less',
                tasks: ['less'],
                compress: true
            },
            options: {
                livereload: true
            }

        }
    });
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
}