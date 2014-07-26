module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // just concatenate our scripts - for development only
        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: ['scripts/working/jquery-2.1.0.min.js, scripts/working/jquery-ui-1.10.4.custom.min.js', 'scripts/working/jquery.smooth-scroll.min.js', 'scripts/working/isotope.pkgd.min.js', 'scripts/working/highlight.pack.js', 'scripts/working/scripts.js'], //input

                dest: 'scripts/scripts.min.js' //output
            },
        },

        // concatenate and minify scripts - prod only
        uglify: {
            build: {
                src: ['scripts/working/jquery-2.1.0.min.js, scripts/working/jquery-ui-1.10.4.custom.min.js', 'scripts/working/jquery.smooth-scroll.min.js', 'scripts/working/isotope.pkgd.min.js', 'scripts/working/highlight.pack.js', 'scripts/working/scripts.js'], //input

                dest: 'scripts/scripts.min.js' //output
            }
        },

        // compile Sass.  Expanded for dev and compressed for prod.
        sass: {
            dev: {
                options: {
                    style: 'expand',
                    lineNumbers: true
                },
                files: {
                    'style.css': 'scss/style.scss'
                }
            },
            dist: {
                options: {
                    style: 'compressed',
                },
                files: {
                    'style.css': 'scss/style.scss'
                }
            }
        },

        // watch these files and do these tasks when something changes
        watch: {
            options: {
                livereload: true
            },

            scripts: {
                files: ['scripts/working/*.js'],
                tasks: ['concat'],
                options: {
                    spawn: false,
                },
            },

            css: {
                files: ['sass/*.scss'],
                tasks: ['sass:dev'],
                options: {
                    spawn: false,
                }
            }
        },

        //prefix anything that needs prefixing for the last 3 browser versions - production only
        autoprefixer: {
            options: {
                browsers: ['last 3 version']
            },
            no_dest: {
                src: 'style.css' // rewrite compiled css file w/ prefixes
            },
        }

    });

    // Grunt  plug-in list.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');

    // type "grunt" into the terminal for development.
    grunt.registerTask('default', ['sass:dev', 'concat', 'autoprefixer', 'watch']);

    // type "grunt prod"  into the terminal for production .
    grunt.registerTask('prod', ['sass:dist', 'uglify']);

};