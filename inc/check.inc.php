<?php
// Logic to check for POST and grab data from $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the original temp and units in variables
    // You can then use these variables to help you make the form sticky
    // then call the convertTemp() function
    // Once you have the converted temperature you can place PHP within the converttemp field using PHP
    // I coded the sticky code for the originaltemp field for you

    $originalTemperature = $_POST['originaltemp'];
    $originalUnit = $_POST['originalunit'];
    $conversionUnit = $_POST['conversionunit'];

    if ($originalUnit != '--Select--' && $conversionUnit != '--Select--'){
        $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
    } else {
        echo '<p class="alert-danger p-3 mt-4">Choose a scale of measurement, please</p>';
    }
} // end if

?>

