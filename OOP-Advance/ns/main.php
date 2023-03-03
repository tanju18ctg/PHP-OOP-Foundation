<?php

namespace Stonomy\Planet;
include("Planet.php");
include("earth.php");

$planet = new Planet();

$earth = new Earth();

$earth->name();
$planet->name();