<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02- Fundamentals</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section {
            background-color: #0009;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 10px;

            h2 {
                margin: 0;
            } 

            ul {
                padding: 0;
                margin: 0;
            }

            li{
                color: #fff;
            }

            figure {
                background-color: #fff3;
                border: 2px solid #fff6;
                border-radius: 8px;
                font-size: 6rem;
                margin: 0;
            }

            form {
                display: flex;
                justify-content: space-between;
                gap: 1rem;
                width: 100%;
                button {
                    border: 2px solid #fff6;
                    background-color: #994bde;
                    border-radius: 8px;
                    color: #fff9;
                    cursor: pointer;
                    font-size: 1rem;
                    width: 100px;
                    padding: 0.6rem;
                }
            }
        }
    </style>
</head>
<body>
    <nav class="controls">
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z"/></svg>    
        </a>
    </nav>
    <main>
        <h1>02- Fundamentals</h1>
        <section>
            <?php
                
                class Runner {
                    // Attributes
                    public $name;
                    public $age;
                    public $number;

                    // Methods
                    public function __construct($name, $age, $number) {
                        $this->name   = $name;
                        $this->age    = $age;
                        $this->number = $number;
                    }

                    public function run() {
                        return '<img src="/01-oop/images/output-onlinegiftools.gif" alt="Imagen de salto" width="200px">';
                    }

                    public function stop() {
                        return '<img src="/01-oop/images/tanjirou-demon-slayer-stop.gif" alt="Imagen de salto" width="180px">';
                    }

                    public function jump() {
                        return '<img src="/01-oop/images/tanjirou-demon-slayer-jump.gif" alt="Imagen de salto" width="200px">';
                    }
                }

                $runner = new Runner('Tanjiro Kamado', 16, 3);
                $action = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['run'])) {
                        $action = $runner->run();
                    } elseif (isset($_POST['stop'])) {
                        $action = $runner->stop();
                    } elseif (isset($_POST['jump'])) {
                        $action = $runner->jump();
                    }
                } else {
                    $action = $runner->stop();
                }

            ?>
            <h2>Class Runner</h2>
            <ul>
                <li>Name:   <?=$runner->name ?></li>
                <li>Age:    <?=$runner->age ?></li>
                <li>Number: <?=$runner->number ?></li>
            </ul>
            <figure>
                <?php
                    echo $action;
                ?>
            </figure>
            <form action="" method="post">
                <button name="run"> Run </button>
                <button name="stop"> Stop </button>
                <button name="jump"> Jump </button>
            </form>
        </section>
    </main>
</body>
</html>