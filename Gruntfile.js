module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // just concatenate our scripts - for development only
        concat: {
            options: {
                separator: ';',
                stripBanners: true
            },
            dist: {
                src: ['js/vendor/**/*.js', 'js/source/scripts.js'],
                dest: 'js/build/scripts.js',
            },
        },

        // compile Sass - with standard sourcemaps
        sass: {
            dest: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/style.css': 'scss/style.scss'
                }
            }
        },

         // concatenate and minify scripts. **Don't forget to add scripts array in order of dependencies
        uglify: {
            options: {
                preserveComments: 'some',
                mangle: false
            },
            build: {
                src: ['js/build/scripts.js'],
                dest: 'js/scripts.min.js'
            }
        },

        // watch these files and do these tasks when something changes
        watch: {
           scripts: {
               files: ['js/**/*.js'],
               tasks: ['concat', 'uglify'],
               options: {
                   spawn: false,
               },
           },
           css: {
               files: ['scss/**/*.scss'],
               tasks: ['sass'],
               options: {
                   spawn: false,
               }
           }
        },

        //autoprefix all the CSS 
        autoprefixer: {
            options: {
                browsers: ['> 1%', 'last 2 versions'],
                map: {
                    annotation: true
                }
            },
            no_dest: {
                src: 'css/style.css' // overwrite the css file
            },
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src: 'css/style.css'
                },
                options: {
                    watchTask: true,
                    proxy: 'http://mandy.dev/mandymadethis/'
                }
            }
        },

        // Notify us only when there's a problem
        notify_hooks: {
            options: {
                enabled: true,
                success: false, // whether successful grunt executions should be notified automatically
                duration: 2.5, // the duration of notification in seconds, for `notify-send only
                title: "SHIT SON! You done fucked somet'n up!",
                message: "Houston, we have a problem..."
            }
        }

    });

    // Grunt  plug-in list.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-browser-sync');

    // type: 'grunt' for development tasks.
    grunt.registerTask('default', ['sass', 'autoprefixer', 'concat', 'uglify', 'browserSync', 'notify_hooks', 'watch']);

};