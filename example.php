<?php

require_once 'cachet.php';

// Create a CachetPHP object
$cachetPHP = new DivineOmega\CachetPHP\cachet();

// Set the base URL for your Cachet instance API
$cachetPHP->setBaseURL('https://demo.cachethq.io/api/v1/');

// If you need to change things, you need to provide your apiToken or the email and password you use to log in to the Cachet dashboard
$cachetPHP->setApiToken('9yMHsdioQosnyVK4iCVR');
//$cachetPHP->setEmail('test@test.com');
//$cachetPHP->setPassword('test123');

// Check if Cachet instance is working correctly
if ($cachetPHP->isWorking()) {
    echo '*** Cachet instance working fine! ***';
    echo "\n";
}

// Get components
$components = $cachetPHP->getComponents();

// Display components
echo '*** Components ***';
echo "\n";
foreach ($components as $component) {
    echo $component->id.' - '.$component->name.' - '.$component->description.' - '.$component->status;
    echo "\n";
}

// Get incidents
$incidents = $cachetPHP->getIncidents();

// Display incidents
echo '*** Incidents ***';
echo "\n";
foreach ($incidents as $incident) {
    echo $incident->id.' - '.$incident->name.' - '.$incident->message.' - '.$incident->human_status;
    echo "\n";
}

// Get metrics
$metrics = $cachetPHP->getMetrics();

// Display components
echo '*** Metrics ***';
echo "\n";
foreach ($metrics as $metric) {
    echo $metric->id.' - '.$metric->name;
    echo "\n";
}

// Get component by ID
$component = $cachetPHP->getComponentByID(1);

// Display component
echo '*** Component ID 1 ***';
echo "\n";
echo 'Name: '.$component->name;
echo "\n";
echo 'Status: '.$component->status;
echo "\n";

// Set component status
$component = $cachetPHP->setComponentStatusByID(1, 2);

// Display component
echo '*** Component ID 1 - After status changed to 1 ***';
echo "\n";
echo 'Name: '.$component->name;
echo "\n";
echo 'Status: '.$component->status;
echo "\n";

// Get incident by ID
$incident = $cachetPHP->getIncidentByID(2);

// Display incident
echo '*** Incident ID 2 ***';
echo "\n";
echo 'Name: '.$incident->name;
echo "\n";

// Get metric by ID
$metric = $cachetPHP->getMetricByID(1);

// Display metric
echo '*** Metric ID 1 ***';
echo "\n";
echo 'Name: '.$metric->name;
echo "\n";
<<<<<<< HEAD

?>
=======
>>>>>>> a5fe11b62a9a586658bba16dcf05a116eff026cb
