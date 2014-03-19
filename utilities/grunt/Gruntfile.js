//http://24ways.org/2013/grunt-is-not-weird-and-hard/
module.exports = function(grunt) {

    var
        jsDir = '../../js/',
        productionFileName = 'production.js',
        productionMinifiedFileName = 'production.min.js',
        wildcardJsSelection = '*.js',
        concatenationSeparator = ';'
    ;

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        clean: [
            jsDir + productionFileName,
            jsDir + productionMinifiedFileName
        ],
        concat: {
            options: {
                separator: concatenationSeparator,
            },
            dist: {
                src: [
                    jsDir + wildcardJsSelection
                    ],
                dest: jsDir + productionFileName,
            },
        },
        uglify: {
            build: {
                src: jsDir + productionFileName,
                dest: jsDir + productionMinifiedFileName
            }
        },
        watch: {
            scripts: {
                files: [jsDir + wildcardJsSelection],
                tasks: ['clean', 'concat', 'uglify'],
                options: {
                    spawn: false,
                },
            } 
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default',
        [
            'watch',
            'clean',
            'concat', 
            'uglify'
        ]
    );

};
