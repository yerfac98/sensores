<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
</head>

<body>
    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item"

                <p><img  style="border-radius: 40px;" src="img/termometro.png" alt="logo" /></p>

            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="index.php" class="navbar-item">Gráfica</a>
                <a href="index1.php" class="navbar-item">Reporte</a>

            </div>

        </div>
    </nav>
    <div id="app" class="section">
        <div class="columns">
            <div class="column is-one-third">
                <p>Inicio</p>
                <div class="field has-addons">
                    <div class="control">
                        <input @change="onDateOrTimeChanged" v-model="startDate" class="input" type="date">
                    </div>
                    <div class="control ml-2">
                        <input @change="onDateOrTimeChanged" v-model="startTime" class="input" type="time">
                    </div>
                </div>
            </div>
            <div class="column is-one-third">
                <p>Final</p>
                <div class="field has-addons">
                    <div class="control">
                        <input @change="onDateOrTimeChanged" v-model="endDate" class="input" type="date">
                    </div>
                    <div class="control ml-2">
                        <input @change="onDateOrTimeChanged" v-model="endTime" class="input" type="time">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <canvas id="chart"></canvas>
        </div>
    </div>
    <script src="./js/Chart.bundle.min.js"></script>
    <script src="./js/vue.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>