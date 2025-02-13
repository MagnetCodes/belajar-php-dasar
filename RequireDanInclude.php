<?php

require "Lib/MyFunction.php"; //langsung berhenti
include "Lib/MyFunction.php"; //menampilakan warnning karena function tidak ada
include_once "Lib/MyFunction.php"; //memastikan file 1 kali di load

echo sayHello("Sutisna", "Santosa");
