<?php

/*----------------------------------------------------*/
// Database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/**
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'RNt@ue&@|R-=3D*MP{s@K(ME#[oYL`OdJudxaGVI{r]-9Cfg*)9fo(sDl81_mApB');
define('SECURE_AUTH_KEY',  '`fb*p0!sz/;$!YwP6O~y}P>J^T89g6dfmC;FB1DuXrgXxKBU?L:LQ{VQ7r~wzCfZ');
define('LOGGED_IN_KEY',    '/oRLj/.F+>ws9e2XX0bfBwipzQ)~!W<Yj]`n<Zd@8/~xig/3O7ER6v+)O$.B-hd&');
define('NONCE_KEY',        'nRb?.d@9[UaQC>Qbx@S&8f!?s}3dqVgsNbic+};R@?|p%XVYu --xS~0%z-C2V/Z');
define('AUTH_SALT',        'EmvJ|dlS_.`nK%S~*5?wYZA|sCvAzJL<x%aXXtZch^zT@{*NOjx*@hB]JH&Jh$jo');
define('SECURE_AUTH_SALT', '&1k37p9_6OJ>|M~waQ%3nf!we-FSlh|kSd,YXJIS^@/xi%aR&vA>&aa :Bl/V &O');
define('LOGGED_IN_SALT',   'cNstV6}NIB+v |d<+R:+Bcc;&=fe)=V1G#3D+{N+Et/f&=]@R1$Qv&E)zT7MQt<+');
define('NONCE_SALT',       '.)kHA%g#sQA!EEJ!=o2!D~|>O}J-Q@[&/g5GCCUBln2sHW[4:%.zF8{S-G:/0G,Y');


/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */
