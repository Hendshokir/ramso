<?php
 /**
 * Load all custome fields folder
 * Load all page templates
 */
 $files = array_merge(
   glob(__DIR__.'/utilities/*.php'),
   glob(__DIR__.'/actions/*.php'),
   glob(__DIR__.'/hooks/*.php'),
   glob(__DIR__.'/filters/*.php'),
   glob(__DIR__.'/custom-fields/*.php'),
   glob(__DIR__.'/post-type/*.php'),
   glob(__DIR__.'/taxonomies/*.php'),
   glob(__DIR__.'/plugins/*.php'),
   glob(__DIR__.'/short-codes/*.php'),
   glob(__DIR__.'/transients/*.php'),
   glob(__DIR__.'/backend/*.php'),
   glob(__DIR__.'/widgets/*.php'),
   glob(__DIR__.'/admin-columns/*.php')

 );
 foreach ($files as $filename)
 {
   include $filename;
 }
