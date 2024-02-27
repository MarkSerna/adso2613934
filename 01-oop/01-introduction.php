<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01- Introduction</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section {
            background-color: #0009;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 10px;

            h2 {
                margin: 0;
            }

            form {
                display: flex;
                flex-direction: column;
                padding: 10px;
                width: 300px;

                label {
                    display: flex;
                    gap: 1rem;
                }

                output {
                    font-size: 1.4rem;
                }

                button {
                    background-color: #994bde;
                    border: none;
                    font-size: 1rem;
                    width: 260px;
                    padding: 1rem;
                }

                div.result {
                    margin-top: 1rem;
                    font-size: 1rem;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    padding: 10px;
                    background-color: #0f09;
                    width: 240px;
                }
        }
    </style>
</head>
<body>
    <main>
        <h1>01- Introduction</h1>
        <section>
        <?php
            # Linear Programming
            echo "<h2> Linear Programming </h2>";
            $num1 = 54;
            $num2 = 32;

            echo "{$num1} * {$num2} = " . ($num1 * $num2);
            echo "<br>";
            $string = "hello";
            echo " MD5({$string}) = " . md5($string);
            //echo " PASSWORD_HASH({$string}) = " . password_hash($string, PASSWORD_DEFAULT);
            echo "<br>";
            $hash = password_hash($string, PASSWORD_DEFAULT);

            if (password_verify($string, $hash)) {
                echo "Password Hash Verified Successful!";
            }

            # Structured Progamming
            echo "<h2> Structured Progamming </h2>";

            function adition($num1, $num2 = 7) {
                return ($num1 + $num2);
            } 

            $rs = adition(34, 890);
            echo "Adition 1: " . $rs . "<br>";
            $rs = adition(89);
            echo  "Adition 2: " . $rs;

            # Object Oriented Programming 
            echo "<h2> Object Oriented Programming </h2>";

            class Adition {
                public $num1;
                public $num2;

                public function getResult() {
                    return ($this->num1 + $this->num2);
                }
            }

            $sum = new Adition;
            $sum->num1 = 1024;
            $sum->num2 = 512;
            echo "La suma de {$sum->num1} y {$sum->num2} es: " . 
                $sum->getResult();
        ?>
        <form action="" method="post">
            <label>
                <p>Number 1:</p>
                <input type="range" name="n1" step="1" value="0" oninput="o1.value=this.value">
                <output id="o1">0</output>
            </label>
            <label>
                <p>Number 2:</p>
                <input type="range" name="n2" step="1" value="0" oninput="o2.value=this.value">
                <output id="o2">0</output>
            </label>
            <button> Calculate </button>
            <div class="result">
                <?php
                    if ($_POST) {
                        $sum = new Adition;
                        $sum->num1 = $_POST['n1'];
                        $sum->num2 = $_POST['n2'];
                        echo "La suma de {$sum->num1} y {$sum->num2} es: " . 
                            $sum->getResult();
                    }
                ?>
            </div>
        </form>
        </section>
    </main>
</body>
</html>