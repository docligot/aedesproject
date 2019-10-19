function clearCanvas() {
    document.getElementById('chart-canvas').innerHTML = '<canvas id="myChart"></canvas>';
}

function getCharts() {
    clearCanvas();
    var series1 = document.getElementById('series1').value;
    var series2 = document.getElementById('series2').value;
    if (series1 && series2) {
        extractData(series1, series2);
    }
}

function extractData(series1, series2) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);
            drawChart(dataArray['labels'], dataArray[series1], dataArray[series2], series1, series2);
        }
    };
    xmlhttp.open("GET", "chart_db.php?series1=" + series1 + "&series2=" + series2, true);
    xmlhttp.send();
}

function loadColors() {
    window.chartColors = {
		black: 'rgb(128, 128, 128)',
		white: 'rgb(255, 255, 255)',
		red: 'rgb(255, 128, 128)',
		lime: 'rgb(128, 255, 128)',
		blue: 'rgb(128, 128, 255)',
		yellow: 'rgb(255, 255, 128)',
		cyan: 'rgb(128, 255, 255)',
		magenta: 'rgb(255, 128, 255)'
    };
}

function drawChart(label, data1, data2, dataset1, dataset2) {

    var labelData = JSON.parse('[' + label + ']');
    var series1 = JSON.parse('[' + data1 + ']');
    var series2 = JSON.parse('[' + data2 + ']');

    loadColors();

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labelData,
            datasets: [{
				label: dataset1, 
				fill: false, 
				backgroundColor: window.chartColors.blue, 
				borderColor: window.chartColors.blue,
                borderDash: [10, 5],
                borderWidth: 2,
                data: series1
            }, {
                label: dataset2,
                fill: false,
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                borderWidth: 2,
                steppedLine: false,
                data: series2
            }]
        },

        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Combo Line Chart',
                position: 'bottom'
            },
            legend: {
                display: true,
                position: 'bottom'
            },
            tooltips: {
                mode: 'point',
                intersect: true
            },
            scales: {
                yAxes: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        }
    });
}

function loadCombo() {
    clearCanvas();
    var series1 = document.getElementById('series1').value;
    var series2 = document.getElementById('series2').value;
    if (series1 && series2) {
        extractCombo(series1, series2);
    }
}

function extractCombo(series1, series2) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var dataArray = JSON.parse(this.responseText);
            comboChart(dataArray['labels'], dataArray[series1], dataArray[series2], series1, series2);
        }
    };
    xmlhttp.open("GET", "chart_db.php?series1=" + series1 + "&series2=" + series2, true);
    xmlhttp.send();
}

function comboChart(label, data1, data2, dataset1, dataset2) {

    var labelData = JSON.parse('[' + label + ']');
    var series1 = JSON.parse('[' + data1 + ']');
    var series2 = JSON.parse('[' + data2 + ']');

    loadColors();

    var chartData = {
        labels: labelData,
        datasets: [{
            type: 'line',
            label: dataset1,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            borderDash: [10, 5],
            borderWidth: 2,
            fill: false,
            data: series1, 
			yAxisID: 'y1'
        }, {
            type: 'line',
            label: dataset2,
            backgroundColor: window.chartColors.magenta,
            borderColor: window.chartColors.magenta,
            borderDash: [10, 5],
            borderWidth: 2,
            fill: false,
            data: series2, 
			yAxisID: 'y2'
			}]
    };

    var ctx = document.getElementById('myChart').getContext('2d');
    window.myMixedChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Combo Line Chart',
                position: 'bottom'
            },
            tooltips: {
                mode: 'point',
                intersect: true
            },
            legend: {
                display: true,
                position: 'bottom'
            },
            scales: {
                yAxes: [{
					type: 'linear', 
					display: true, 
					position: 'left', 
					id: 'y1', 
					scaleLabel : {
						display: true, 
						labelString: dataset1
					}, 
                    ticks: {
                        beginAtZero: true
                    }					
				}, {
					type: 'linear', 
					display: true, 
					position: 'right', 
					id: 'y2', 
					scaleLabel : {
						display: true, 
						labelString: dataset2
					}, 
                    ticks: {
                        beginAtZero: true
                    }, 
					gridLines: {
						display: false 
					}
				}] 
            }
        }
    });
}