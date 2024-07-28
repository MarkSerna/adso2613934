<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04- Inheritance</title>
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

            div.pks {
                display: flex;
                gap: 1rem;

                div.pk {
                    background-repeat: no-repeat;
                    display: flex;
                    position: relative;
                    flex-direction: column;
                    height: 308px;
                    overflow: hidden;
                    padding: 4px;
                    width: 141px;

                    div.info {
                        background-color: #0009;
                        border-bottom: 2px solid #fffc;
                        color: #fffa;
                        display: flex;
                        flex-direction: column;
                        position: absolute;
                        bottom: -52px;
                        left: 2px;
                        padding: 4px;
                        transition: bottom 0.4s ease-in;
                        width: 128px;

                        span:nth-child(1) {
                            background-color: #0009;
                            color: #fff;
                            text-align: center;
                            margin-bottom: 4px;
                        }
                    }
                }

                div.pk:hover div.info {
                    bottom: 0;
                }

            }

            button {
                margin: 20px;
            }

            .custom-btn {
                width: 130px;
                height: 40px;
                color: #fff;
                border-radius: 5px;
                padding: 10px 25px;
                font-family: 'Lato', sans-serif;
                font-weight: 500;
                background: transparent;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
                display: inline-block;
                box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                    7px 7px 20px 0px rgba(0, 0, 0, .1),
                    4px 4px 5px 0px rgba(0, 0, 0, .1);
                outline: none;
            }

            /* BTN Pokemon */
            .btn-pokemon {
                border: none;
                color: #fff;
                background-color: #397CB0; /* Corregido para que sea del mismo color */
            }

            .btn-pokemon:after {
                position: absolute;
                content: "";
                width: 0;
                height: 100%;
                top: 0;
                left: 0;
                direction: rtl;
                z-index: -1;
                box-shadow:
                    -7px -7px 20px 0px #fff9,
                    -4px -4px 5px 0px #fff9,
                    7px 7px 20px 0px #0002,
                    4px 4px 5px 0px #0001;
                transition: all 0.3s ease;
                background-color: #397CB0; /* Corregido para que sea del mismo color */
            }

            .btn-pokemon:hover {
                color: #fff;
            }

            .btn-pokemon:hover:after {
                left: auto;
                right: 0;
                width: 100%;
            }

            .btn-pokemon:active {
                top: 2px;
            }
        }
    </style>
</head>

<body>
    <nav class="controls">
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff" d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z" />
            </svg>
        </a>
    </nav>

    <main>
        <h1>04- Inheritance</h1>
        
        <section>
            <h2>Evolve your Pokemon</h2>
            <form>
                <button class="custom-btn btn-pokemon" type="submit">Attack</button>
                <button class="custom-btn btn-pokemon" type="submit">Defense</button>
                <button class="custom-btn btn-pokemon" type="submit">Evolve</button>
            </form>
            <?php
            class Pokemon
            {
                // Attributes
                protected $name;
                protected $type;
                protected $healt;
                protected $img;

                // Methods
                public function __construct($name, $type, $healt, $img)
                {
                    $this->name  = $name;
                    $this->type  = $type;
                    $this->healt = $healt;
                    $this->img   = $img;
                }
                public function attack()
                {
                    echo "console.log('Charmander ha atacado');";
                    return "Attack";
                }
                public function defense()
                {
                    return "Defense";
                }
                public function show()
                {
                    return
                        "<div class='pk' style='background-image: url(" . $this->img . ")'>" .
                        "<div class='info'>" .
                        "<span>" . $this->name  . "</span>" .
                        "<span> Type: " . $this->type  . "</span>" .
                        "<span> Healt: " . $this->healt . "</span>" .
                        "</div>" .
                        "</div>";
                }
            }

            class Evolve extends Pokemon
            {
                public function levelUp($name, $type, $healt, $img)
                {
                    parent::__construct($name, $type, $healt, $img);
                }
            }
            ?>

            <div class="pks">
                <?php
                $pk = new Evolve('Charmander', 'Fire', 150, 'images/charmander.png');
                echo $pk->show();
                $pk->levelUp('Charmeleon', 'Fire', 250, 'images/charmeleon.png');
                echo $pk->show();
                $pk->levelUp('Charizard', 'Fire-Fly', 450, 'images/charizard.png');
                echo $pk->show();
                ?>
            </div>
        </section>
    </main>
</body>

</html>