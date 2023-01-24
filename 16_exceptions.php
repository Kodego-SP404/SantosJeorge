<?php
function inverse($x)
{
    if (!$x) {
        throw new Exception("Division by zero");

    }
    return 1 / $x;
}

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo "Caugh exceptoin: ", $e->getMessage(), " ";
} finally {
    echo "First Finally!";
}

try {
    echo inverse(10);
    echo inverse(0);
} catch (Exception $e) {
    echo "Caugh exceptoin: ", $e->getMessage(), " ";
} finally {
    echo "First Finally!";
}

echo "Hello World";