#!/bin/bash
find /etc -type d ! -regex '.*/.git.*' -print0 | xargs -0 -I{} echo "{} IN_CLOSE_WRITE /etc/scripts/backup.sh \$@/\$#" > /etc/incron.d/etc.conf
