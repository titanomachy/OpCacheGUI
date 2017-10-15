<?php

$texts = [
    'project.link'                                          => 'Project on GitHub',
    'project.log_in'                                        => 'Let me in',

    'error.not.installed.title'                             => 'Not installed',
    'error.not.installed.description'                       => 'It looks like OpCache is not installed.',
    'error.not.enabled.title'                               => 'Not enabled',
    'error.not.enabled.description'                         => 'It looks like OpCache is not enabled.',

    'menu.status'                                           => 'Status',
    'menu.config'                                           => 'Configuration',
    'menu.scripts'                                          => 'Cached Scripts',
    'menu.graphs'                                           => 'Graphs',

    'reset.submit'                                          => 'Reset',
    'confirmation.reset'                                    => 'Are you sure you want to reset the cache?',
    'confirmation.yes'                                      => 'Yes',
    'confirmation.no'                                       => 'No',

    'status.title'                                          => 'Status',
    'status.opcache_enabled'                                => 'Enabled',
    'status.cache_full'                                     => 'Cache full',
    'status.restart_pending'                                => 'Restart pending',
    'status.restart_in_progress'                            => 'Restart in progress',

    'memory.title'                                          => 'Memory usage',
    'memory.used_memory'                                    => 'Used memory',
    'memory.free_memory'                                    => 'Free memory',
    'memory.wasted_memory'                                  => 'Wasted memory',
    'memory.current_wasted_percentage'                      => 'Currently wasted',

    'stats.title'                                           => 'Statistics',
    'stats.num_cached_scripts'                              => 'Cached Scripts',
    'stats.num_cached_keys'                                 => 'Cached keys',
    'stats.max_cached_keys'                                 => 'Max cached keys',
    'stats.hits'                                            => 'Hits',
    'stats.start_time'                                      => 'Start time',
    'stats.last_restart_time'                               => 'Last restart',
    'stats.oom_restarts'                                    => 'Oom restart',
    'stats.hash_restarts'                                   => 'Hash restarts',
    'stats.manual_restarts'                                 => 'Manual restarts',
    'stats.misses'                                          => 'Misses',
    'stats.blacklist_misses'                                => 'Blacklist misses',
    'stats.blacklist_miss_ratio'                            => 'Miss ratio',
    'stats.opcache_hit_rate'                                => 'Opcache hit rate',

    'config.title'                                          => 'Configuration',
    'config.opcache.enable'                                 => 'Enabled',
    'config.opcache.enable.description'                     => 'Determines if Zend OPCache is enabled.',
    'config.opcache.enable_cli'                             => 'Enabled for CLI',
    'config.opcache.enable_cli.description'                 => 'Determines if Zend OPCache is enabled for the CLI version of PHP.',
    'config.opcache.use_cwd'                                => 'Keys based on current working dir',
    'config.opcache.use_cwd.description'                    => 'When this directive is enabled, the OPcache appends the current working directory to the script key, thus eliminating possible collisions between files with the same name (basename). Disabling the directive improves performance, but may break existing applications.',
    'config.opcache.validate_timestamps'                    => 'Validate timestamps',
    'config.opcache.validate_timestamps.description'        => 'When disabled, you must reset the OPcache manually or restart the webserver for changes to the filesystem to take effect.',
    'config.opcache.dups_fix'                               => 'Dups fix',
    'config.opcache.dups_fix.description'                   => '',
    'config.opcache.revalidate_path'                        => 'Revalidate path',
    'config.opcache.revalidate_path.description'            => 'Enables or disables file search in include_path optimization.',
    'config.opcache.log_verbosity_level'                    => 'Log verbosity level',
    'config.opcache.log_verbosity_level.description'        => 'All OPcache errors go to the Web server log. By default, only fatal errors (level 0) or errors (level 1) are logged. You can also enable warnings (level 2), info messages (level 3) or debug messages (level 4).',
    'config.opcache.memory_consumption'                     => 'Opcache memory size',
    'config.opcache.memory_consumption.description'         => 'The OPcache shared memory storage size.',
    'config.opcache.interned_strings_buffer'                => 'Interned strings buffer',
    'config.opcache.interned_strings_buffer.description'    => 'The amount of memory for interned strings in Mbytes.',
    'config.opcache.max_accelerated_files'                  => 'Maximum cached scripts',
    'config.opcache.max_accelerated_files.description'      => 'The maximum number of keys (scripts) in the OPcache hash table. Only numbers between 200 and 100000 are allowed.',
    'config.opcache.max_wasted_percentage'                  => 'Maximum wasted before restart',
    'config.opcache.max_wasted_percentage.description'      => 'The maximum percentage of "wasted" memory until a restart is scheduled.',
    'config.opcache.consistency_checks'                     => 'Consistency checks frequency',
    'config.opcache.consistency_checks.description'         => 'Check the cache checksum each N requests. The default value of "0" means that the checks are disabled.',
    'config.opcache.force_restart_timeout'                  => 'Force restart timeout',
    'config.opcache.force_restart_timeout.description'      => 'How long to wait (in seconds) for a scheduled restart to begin if the cache is not being accessed.',
    'config.opcache.revalidate_freq'                        => 'Frequency to check for changes',
    'config.opcache.revalidate_freq.description'            => 'How often (in seconds) to check file timestamps for changes to the shared memory storage allocation. "1" means validate once per second, but only once per request. "0" means always validate.',
    'config.opcache.preferred_memory_model'                 => '',
    'config.opcache.preferred_memory_model.description'     => 'Preferred Shared Memory back-end. Leave empty and let the system decide.',
    'config.opcache.blacklist_filename'                     => 'Blacklist',
    'config.opcache.blacklist_filename.description'         => 'The location of the OPcache blacklist file (wildcards allowed). Each OPcache blacklist file is a text file that holds the names of files that should not be accelerated. The file format is to add each filename to a new line. The filename may be a full path or just a file prefix (i.e., /var/www/x  blacklists all the files and directories in /var/www that start with \'x\'). Line starting with a ; are ignored (comments).',
    'config.opcache.max_file_size'                          => 'Exclude caching above size',
    'config.opcache.max_file_size.description'              => 'Allows exclusion of large files from being cached. By default all files are cached.',
    'config.opcache.error_log'                              => 'Error log',
    'config.opcache.error_log.description'                  => 'OPcache error_log file name. Empty string assumes "stderr".',
    'config.opcache.protect_memory'                         => 'Protect memory',
    'config.opcache.protect_memory.description'             => 'Protect the shared memory from unexpected writing during script execution. Useful for internal debugging only.',
    'config.opcache.save_comments'                          => 'Save comments',
    'config.opcache.save_comments.description'              => 'If disabled, all PHPDoc comments are dropped from the code to reduce the size of the optimized code.',
    'config.opcache.fast_shutdown'                          => 'Fast shutdown',
    'config.opcache.fast_shutdown.description'              => 'If enabled, a fast shutdown sequence is used for the accelerated code.',
    'config.opcache.enable_file_override'                   => 'File override',
    'config.opcache.enable_file_override.description'       => 'Allow file existence override (file_exists, etc.) performance feature.',
    'config.opcache.optimization_level'                     => 'Optimization level',
    'config.opcache.optimization_level.description'         => 'A bitmask, where each bit enables or disables the appropriate OPcache passes.',

    'blacklist.title'                                       => 'Blacklist',
    'blacklist.empty'                                       => 'No scripts are blacklisted',

    'scripts.title'                                         => 'Cached Scripts',
    'scripts.overview.title'                                => 'Overview',
    'scripts.empty'                                         => 'No scripts are cached',
    'scripts.directory.script_count'                        => ' (<i class="count">%s</i> files)',
    'scripts.full_path'                                     => 'Filename',
    'scripts.hits'                                          => 'Hits',
    'scripts.memory_consumption'                            => 'Memory',
    'scripts.last_used_timestamp'                           => 'Last used',
    'scripts.timestamp'                                     => 'Created',
    'scripts.actions'                                       => 'Actions',
    'script.invalidate'                                     => 'Invalidate',
    'scripts.filter.placeholder'                            => 'Filter cached scripts',

    'graph.title'                                           => 'Graphs',
    'graph.memory.title'                                    => 'Memory',
    'graph.memory.free'                                     => 'free',
    'graph.memory.used'                                     => 'used',
    'graph.memory.wasted'                                   => 'wasted',
    'graph.keys.title'                                      => 'Keys',
    'graph.keys.free'                                       => 'free',
    'graph.keys.scripts'                                    => 'used',
    'graph.keys.wasted'                                     => 'wasted',
    'graph.hits.title'                                      => 'Hits',
    'graph.hits.hits'                                       => 'hits',
    'graph.hits.misses'                                     => 'misses',
    'graph.hits.blacklist'                                  => 'blacklist'
];
