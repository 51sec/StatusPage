<?php
namespace NerdBaggy\StatusPage;

//Uptime Robot API Key
define('apiKey', 'm783399407-b5654044806678e2a377de7f');
define('apiKey2', 'ur488665-c52d17aa571fc232d5b1e183');


//Uptime percentage for following days
define('historyDay', '1-7-30-360');

//Display names for the uptime percentage of the previous days
define('historyDaysNames', serialize(array('Past 24 Hours', 'Past Week', 'Past Month', 'Past Year')));

//How long to hold the cache of the data, best option is how often your checks get checked in seconds
define('cacheTime', 300);

//Only show these monitors
define('includedMonitors', '');

//Hide certain monitors
define('excludedMonitors', serialize(array()));
