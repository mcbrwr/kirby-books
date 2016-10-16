console.log "-------------------------------"
console.log "   LOVE WILL SET YOU FREE"
console.log "-------------------------------"
console.log ""
console.log "       .:::.   .:::."
console.log "      :::::::.:::::::"
console.log "      :::::::::::::::"
console.log "      ':::::::::::::'"
console.log "        ':::::::::'"
console.log "          ':::::'"
console.log "            ':'"
console.log ""

module.exports = (grunt) ->

  # load modules
  grunt.loadNpmTasks "grunt-contrib-less"
  grunt.loadNpmTasks "grunt-contrib-watch"
  
  # Set tasks
  grunt.registerTask "default", ["less", "watch"]
  
  # Config
  grunt.initConfig

    pkg: grunt.file.readJSON "package.json"
    
    less:
      cssmin:
        options:
          compress: true
          cleancss: false
          sourceMap: false
          plugins: [require('less-plugin-glob')]
        files:
          "../assets/css/main.css": [
            "less/main.less"
          ]


    watch:
      css:
        files: ['less/**/*.less']
        tasks: ['less']
      gruntfile:
        files: ['gruntfile.coffee']
        tasks: ['less']

