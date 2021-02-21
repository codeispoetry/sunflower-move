zip:
	cd .. && zip sunflower-move.zip sunflower-move/sunflower-move.php

deploy:
	make zip && rsync ../sunflower-move.zip sharepic:/var/www/sunflower-theme.de/updateserver/sunflower-move.zip