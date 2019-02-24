<?php
// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    // conversion formulas
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    // Celsius to Kelvin = T(°C) + 273.15
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    // Kelvin to Celsius = T(K) - 273.15
    //temp for temperature, unit1 for unit of measurement, unit2 for desired converted measurement

    // You need to develop the logic to convert the temperature based on the selections and input made

    // MAKE SELECT STICKY AND ADD SOME LOGIC FOR THE CONVERSIONS

    // IF THEY ARE THE SAME UNIT RETURN THE SAME TEMPERATURE
    if ($unit1 == $unit2) {
        return $temp;
    }

        // IF THEY ARE DIFFERENT UNITS CALCULATE THE CONVERTED TEMP AND RETURN IT
        // CHECK TO SEE WHAT THE UNIT TO CONVERT IS 
        // THEN CHECK TO SEE WHAT THE UNIT TO CONVERT TO IS
        elseif ($unit1 == 'celsius') {
            if ($unit2 == 'fahrenheit') {
                return $temp * (9/5) + 32;
            }
                elseif ($unit2 == 'kelvin') {
                    return $temp + 273.15;
                }
        }

        elseif ($unit1 == 'fahrenheit') {
            if ($unit2 == 'celsius') {
                return (($temp - 32) * (5/9));
            }
                elseif ($unit2 == 'kelvin') {
                    return (($temp + 459.67) * (5/9));
                }
        }

        elseif ($unit1 == 'kelvin') {
            if ($unit2 == 'fahrenheit') {
                return ($temp * (9/5) - 459.67);
            }
                elseif ($unit2 == 'celsius') {
                    return ($temp - 273.15);
                }
        }
} // end function
?>