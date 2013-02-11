<b>DayZ Mapper is created by zamp for Bliss installations. This is a modified version of his work for Pwn/Stapo and vanilla builds.</b>

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

<b>Read zamps readme for extra info</b>
https://github.com/zamp/DayZMapper
