<?php
        // Functie voor de som
        function calculate($num1, $num2, $operation) {
            switch ($operation) {
                case '+':
                    return $num1 + $num2;
                case '-':
                    return $num1 - $num2;
                case '*':
                    return $num1 * $num2;
                case '/':
                    if ($num2 != 0) {
                        return $num1 / $num2;
                    } else {
                        return "Error: Division by zero!";
                    }
                default:
                    return "Invalid operation!";
            }
        }

        // form 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $operation = $_POST['operation'];
            $num2 = $_POST['num2'];

            // Inputs
            if (is_numeric($num1) && is_numeric($num2)) {
                $result = calculate((float)$num1, (float)$num2, $operation);
                echo "<p>Result: $result</p>";
            } else {
                echo "<p>Please enter valid numbers.</p>";
            }
        }
        ?>
    </div>
</body>
</html>