
grunt.initConfig({

    watch: {
        sass: {
            options: {
                livereload: true
            },
            files: ['css/scss/**/*.scss'],
            tasks: ['sass']
        }
    }

});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');

grunt.registerTask('default', ['watch']);