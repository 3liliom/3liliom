<?php
session_start();
$session_name = 'get-usermail';

if (isset($_SESSION['session_history'])) {
    array_push($_SESSION['session_history'], $session_name);
} else {
    $_SESSION['session_history'] = array('start', $session_name);
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title itemprop='name'>Belépés</title>

    <meta name="keywords" content="ép test, ép lélek, egészséges élet, egészség megőrzés, környezet, tudatos életmód, életmódváltás, vitalitás" />
    <meta name="description" content="Az egészség és a vitalitás fenntartása természetes alapokon nyugvó programok segítségével" />
    <meta name="subject" content="A jó életminőség és a tudatos életmód" />
    <meta name="author" content="Gabor J. Kiss" />

    <link rel="icon" href="https://yingu.hu/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="https://yingu.hu/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://yingu.hu/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://yingu.hu/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://yingu.hu/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <link rel="canonical" href="//yingu.hu" itemprop="url">

    <meta name="revised" content='<?php echo date("m/d/Y") ?>' />
    <meta name="revisit-after" content="3 days" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="initial-scale=1.0, 
             maximum-scale=1.0, 
             minimum-scale=1.0, 
             user-scalable=no, 
             minimal-ui" />
    <meta name="apple-mobile-web-app-title" content="yungu hu" />

    <base target="_self">

    <!-- Page stylesheet -->

    <link rel="stylesheet" href="3liliom_root_css/3liliom_root_00_styles.css" />
</head>

<body id="home">
    <header>
        <h1>
            Yingu.hu
        </h1>
    </header>

    <form id="orderForm" action="https://yingu.hu/login.php" method="post">
        <header>
            <h2>
                <i>YINGU OLDALAI</i>
            </h2>
        </header>
        <section id="inputList">
            <article>
                <div>
                    <!-- -------------- -->
                    <!-- product groups -->
                    <!-- -------------- -->
                    <div>
                        <label for="productGroups">Témakörök: </label>
                        <select id="productGroups" class="orderlistDropdown" name="productGroup">
                            <option value="?"> válassz! </option>
                            <option value="5 napos fogyi">5 napos súlycsökkentő étrend</option>
                            <option value="YinGu tea">Yin Gu teák</option>
                        </select>
                    </div>
                </div>
                <div>
            </article>
            <article class="center vertical">
                <div class="right vertical">
                    <div>
                        <label for="mail">E-mail:</label>
                        <input type="email" id="mail" name="mail" placeholder="szükséges" required /><br />
                    </div>
                    <hr />
                </div>

                <p>
                    A megadott e-mail címre megküldjük a visszaigazolást.
                    Kérjük a belépéshez kattintson az e-mailben található megerősítő hivatkozásra.
                </p>
                <input id="b6datetime" type="hidden" name="b6datetime" value="Y-M-D h:m">
                <input onkeydown="set_datetime();" type="submit" id="submitOrder" name="submitOrder" value=" Kérem a linket " />
            </article>
        </section>
    </form>

    <footer class="bottom center static">
        <h4>
            HU-1111 Budapest Bercsényi utca 6.
            <br /> &#9993; info@yingu.hu | &#9743; 30-4654562
        </h4>
    </footer>

    <script>
        function set_datetime() {
            var today = new Date();
            var current_date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var current_time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var current_datetime = current_date + " " + current_time;
            document.getElementById("b6datetime").setAttribute('value', current_datetime);
        }

        let firstOption = '<option value="?"> válassz! </option>';

        let orderTextContent = "Kosár:"
        let helpDeleteRow = "Kattints a törléshez!"
        let callMeText = "visszahívást kérek";
        let notFoundText = "Guru meditáció -"

        let productInBasketClass = "fixed";
        let productInitialClass = "initial";

        function formatCurrency(number) {
            return new Intl.NumberFormat('hu-HU', {
                style: 'currency',
                currency: 'HUF'
            }).format(number);
        }

        /******************/
        /* product groups */
        /******************/

        let productGroups = document.getElementById('productGroups');

        const productGroupArray = [];


        /******************/
        /*    call  me    */
        /******************/

        let notFound = document.getElementById('notFound');

        function callMe() {
            selectedItem = callMeText;
            const element = {
                storageID: Number.MAX_SAFE_INTEGER,
                stock: 1,
                productGroup: notFoundText,
                name: callMeText,
                price: 0
            }
            basket.push(element);
            orderdetailsArray.push(element);
            if (basket.length == 0) {
                submitOrder.disabled = true;
            } else {
                submitOrder.disabled = false;
            }
            displayBasket();
            showProductDetailTable();
            notFound.disabled = true;
        }
    </script>

</body>

</html>