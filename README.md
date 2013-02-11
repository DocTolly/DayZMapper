<b>DayZ Mapper is created by zamp for Bliss installations. This is a modified version of his work for Pwn/Stapo and vanilla builds.</b>

<b>Supported Maps</b>
<pre>
- Chernarus
- Lingor
- Namalsk
- Panthera
- Takistan
- Taviana
</pre>

<b>How to install:</b>

<pre>
1. Copy bin/* to your webhost (Can be the server that DayZ is running on but you
will need either apache or some other http server that can handle php)
2. Rename example_config.php to config.php
3. Change config.php to have your username/password/hostname etc.
4. Copy one map txt file from maps to where dayzmapper.swf is and rename to map.txt
5. Point your browser to wherever you copied stuff to.
</pre>

<b>Database modifications:</b>

<pre>
You need to add the column `UpdateTime` to your `character_data` table. If you are using pwnoz0rs build, skip this step and read the "For Pwnoz0r" section.

Query your database (Navicat CTRL + Q) and execute this:

ALTER TABLE `character_data`
ADD COLUMN `UpdateTime`  timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP AFTER `Timestamp`;

</pre>

<b>For Pwnoz0rs builds:</b>

<pre>
Pwns builds already use last_updated column so you do not need to add UpdateTime. Instead, open your data.php and change any occurance of `UpdateTime` to `last_updated`
</pre>

<b>TODO:</b>
<pre>
- Toggle for showing out of map positions
- Click to follow player/vehicle automatically
- Fix memory usage issue when left running for long periods
- Automatic screenshot every X minutes (manual saving possible via console saveScreenshot command)
</pre>

<b>Optional Stuff:</b>

Open console with CTRL+SHIFT+ENTER

Create .htaccess file to password protect the website. See http://httpd.apache.org/docs/current/howto/htaccess.html

If you want to use your own map graphic you need to specify certain values in the map.txt

Here is an example map.txt with comments (Do not add comments in the map.txt otherwise it will not work!)
<pre>
maps/chernarus.jpg 	// the map file that is loaded.
1234 				// image width in pixels
4321 				// image height in pixels
100 				// origo X offset in meters, origo means coordinates 0,0
30 					// origo Y offset in meters
1000 				// map X size in meters, these can be found in the dayz database
1000 				// map Y size in meters
</pre>

If you have any questions ask zamp @ freenode/ircnet/quakenet/whatever just whois me.
