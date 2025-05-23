<?php
// This script should be run every minute by cron
// Add to crontab: * * * * * php /path/to/your/website/cron/check_messages.php

require_once __DIR__ . '/../includes/send_notifications.php'; 