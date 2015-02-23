/**
 * Created by Karl on 2/23/2015.
 */

var $ = require('jquery');
var jQuery = require('jquery');  ////this is how we can load all modules, thanks to Browserify

if (typeof $ != 'undefined') {
    // jQuery is loaded => print the version
    console.log($.fn.jquery);
} else console.error('jQuery not there');