#!/bin/bash
mysql -u root -pPW4mysql -e "DELETE FROM check.log
WHERE id NOT IN	(SELECT * FROM (SELECT id FROM check.log ORDER BY id DESC LIMIT 90) AS temp)"
