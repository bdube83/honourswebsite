<script src="bootstrap-4.0.0-alpha.2\js\tests\vendor\jquery.min.js"></script>
<script src="bootstrap-4.0.0-alpha.2\js\tests\vendor\tether.min.js"></script>
<script src="bootstrap-4.0.0-alpha.2\dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-alpha.2\dist\css\bootstrap.min.css">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['', 12272263, '12 272 263', 5822734, '5 822 734']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('population'));
        var options = {
            title: "Population comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 5000
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['', 18178, '18 178', 129462, '129 462']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('size'));
        var options = {
            title: "Size comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Gender', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['Male', 50.5, '50.5%', 49.0, '49.0%'],
            ['Female', 49.5, '49.5%', 51.0, '51.0%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('gender'));
        var options = {
            title: "Gender comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['', 675.1, 675.1, 45.0, 45.0]
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('density'));
        var options = {
            title: "Population Density comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Race', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['Black', 9498732, '9 498 732', 1915679, '1 915 679'],
            ['White', 1914473, '1 914 473', 914169, '914 169'],
            ['Indian/Asian', 355896, '355 896', 58227, '58 227'],
            ['Coloured', 429529, '429 529', 2841494, '2 841 494'],
            ['Other', 85906, '85 906', 93164, '93 164']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('race'));
        var options = {
            title: "Race comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['', 156243, 'R156 243', 143460, 'R143 460']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('income'));
        var options = {
            title: "Income comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['#4EBC03', '#7ABD03', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>
<script>
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
            ['Population', 'Gauteng', {role: 'annotation'}, 'Western Cape', {role: 'annotation'}],
            ['', 81.1, '81.1%', 82.9, '82.9%']
        ]);
        var chart = new google.visualization.ColumnChart(document.getElementById('matric'));
        var options = {
            title: "Matric Pass Rate comparison: Gauteng VS Western Cape",
            legend: 'bottom',
            colors: ['black', 'white', 'yellow', 'brown', 'blue', '#ffffff'],
            backgroundColor: 'gray',
            hAxis: {
                title: ""
            },
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            vAxis: {
                // set these values to make the initial animation smoother
                minValue: 0,
                maxValue: 50
            }
        };
        chart.draw(data, options);
    }
</script>

<style>
    .compareBox{
        width: 200px;
        height: 150px;
        text-align: center;
        margin-left: 50px;
        transition: border 0.5s ease;
        border: 5px solid white;
        border-radius: 10px;
    }
    .compareBox:hover{
        border: 5px groove red;
        border-radius: 10px;
    }

    .verticalAlign{
        display: inline-block;
        height: 100%;
        vertical-align: middle;
    }
    .infoBox{
        width: 100%;
    }
    body{
        background-color: gray;
    }
</style>
<!--
<img src='gendermix.png' style="position: absolute; top: 125px; left: 260px; width: 30px; height: 45px;"/>
<img src='couple.png' style="position: absolute; top: 97px; left: 120px; width: 40px; height: 72px;"/>
-->
<div class="col-md-4">
    <a href='Gauteng.php'><img src="Gauteng.png" style="width: 400px; height: 400px;"/></a>
</div>
<div style="overflow:scroll; height: 400px; width: 441px; float: left;">
    <div id="population" style='float: left; margin-left: 30px;'></div>
    <div id="size" style='float: left; margin-left: 30px;'></div>
    <div id="gender" style='float: left; margin-left: 30px;'></div>
    <div id="race" style='float: left; margin-left: 30px; height:800px;'></div>
</div>
<div class="col-md-4" style='float: right;'>
    <a href="Western_Cape.php"><img src="Western Cape.png" style="width: 400px; height: 400px;"/></a>
</div>

<div class='infoBox' style='float: left; margin-top: 20px;'>
    <div id="density" style='float: left; margin-left: 45px;'></div>
    <!--<div id="race" style='float: left; margin-left: 45px;'></div>-->
    <div id="income" style='float: left; margin-left: 45px;'></div>
    <div id="matric" style='float: left; margin-left: 45px;'></div>
</div>