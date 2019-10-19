generateChart([[1,0.763411442845248,0.697276079457595,0.474366599262519,0.490424646128227,0.790531699773998,1.28821220411562,1.46187700725586,1.26275722612109,1.15118353752825,1.3023670750565,1.73878910431783,1.46282859521827,1.06387534197692,0.834066849054359,0.547044129891757,0.537409301772333,0.946116331628405,1.97287974307125,2.1087189247056,1.74378494112049,1.67336743190199,1.74878077792316,1.68894968478649,2.51040799333888,1.69680028547639,1.22552634709171,0.786368502438444,0.824550969430237,1.53978827167836,5.09622933269894],[1,0.787234042553192,0.882978723404255,0.553191489361702,0.617021276595745,0.808510638297872,0.957446808510638,1.13829787234043,1.1063829787234,1,1.17021276595745,2.01063829787234,1.82978723404255,2.40425531914894,1.06382978723404,0.808510638297872,0.861702127659574,1.21276595744681,1.87234042553191,2.28723404255319,2.04255319148936,2.6063829787234,3.4468085106383,4.28723404255319,4.24468085106383,2.81914893617021,2.09574468085106,1.57446808510638,1.53191489361702,2.84042553191489,12.8085106382979],[1,0.754716981132076,0.716981132075472,0.462264150943396,0.556603773584906,1.01415094339623,1.39150943396226,1.95283018867925,1.71698113207547,1.42452830188679,1.58018867924528,1.90566037735849,1.88679245283019,1.30188679245283,1.0188679245283,0.716981132075472,0.783018867924528,1.49056603773585,2.83490566037736,3.27358490566038,3.00943396226415,2.54245283018868,2.56603773584906,2.50471698113208,4.00471698113208,2.93396226415094,2.42452830188679,1.43396226415094,1.92924528301887,7.24528301886792,31.627358490566],[1,0.611111111111111,0.555555555555556,0.583333333333333,0.388888888888889,0.888888888888889,0.611111111111111,0.555555555555556,0.611111111111111,0.611111111111111,0.888888888888889,1.30555555555556,1.16666666666667,1.11111111111111,1,0.833333333333333,0.722222222222222,1.16666666666667,2.19444444444444,1.94444444444444,2.05555555555556,1.83333333333333,2.08333333333333,2.36111111111111,3.13888888888889,3.25,2.66666666666667,1.91666666666667,2.77777777777778,6.55555555555556,10.25]], ["Jan-17","Feb-17","Mar-17","Apr-17","May-17","Jun-17","Jul-17","Aug-17","Sep-17","Oct-17","Nov-17","Dec-17","Jan-18","Feb-18","Mar-18","Apr-18","May-18","Jun-18","Jul-18","Aug-18","Sep-18","Oct-18","Nov-18","Dec-18","Jan-19","Feb-19","Mar-19","Apr-19","May-19","Jun-19","Jul-19"], 'line', 'barContentDiv', 'Google Searches of Dengue-related Keywords')

        function generateChart(data1, labels, chartType, chartContainer, title) {

          Chart.pluginService.register({
          beforeRender: function (chart) {
            if (chart.config.options.showAllTooltips) {
                // create an array of tooltips
                // we can't use the chart tooltip because there is only one tooltip per chart
                chart.pluginTooltips = [];
                chart.config.data.datasets.forEach(function (dataset, i) {
                    chart.getDatasetMeta(i).data.forEach(function (sector, j) {
                        chart.pluginTooltips.push(new Chart.Tooltip({
                            _chart: chart.chart,
                            _chartInstance: chart,
                            _data: chart.data,
                            _options: chart.options.tooltips,
                            _active: [sector]
                        }, chart));
                    });
                });

                // turn off normal tooltips
                chart.options.tooltips.enabled = false;
            }
        },
          afterDraw: function (chart, easing) {
            if (chart.config.options.showAllTooltips) {
                // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
                if (!chart.allTooltipsOnce) {
                    if (easing !== 1)
                        return;
                    chart.allTooltipsOnce = true;
                }

                // turn on tooltips
                chart.options.tooltips.enabled = true;
                Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
                    tooltip.initialize();
                    tooltip.update();
                    // we don't actually need this since we are not animating tooltips
                    tooltip.pivot();
                    tooltip.transition(easing).draw();
                });
                chart.options.tooltips.enabled = false;
            }
          }
        });
          window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
          };

          var ctx = document.getElementById(chartContainer).getContext('2d');
          var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: chartType,

            // The data for our dataset
            data: {
              labels: labels,
              datasets: [
                {
                  label: "Total",
                  fill: false, 
                  backgroundColor: window.chartColors.grey,
                  borderColor: window.chartColors.grey,
                  // borderDash: [10,5],
                  borderWidth: 2, 
                  data: data1[0]
                },
                {
                  label: "Eastern Visayas",
                  fill: false, 
                  backgroundColor: window.chartColors.blue,
                  borderColor: window.chartColors.blue,
                  // borderDash: [10,5],
                  borderWidth: 2, 
                  data: data1[1]
                },
                {
                  label: "Western Visayas",
                  fill: false, 
                  backgroundColor: window.chartColors.purple,
                  borderColor: window.chartColors.purple,
                  // borderDash: [10,5],
                  borderWidth: 2, 
                  data: data1[2]
                },
                {
                  label: "ARMM",
                  fill: false, 
                  backgroundColor: window.chartColors.green,
                  borderColor: window.chartColors.green,
                  // borderDash: [10,5],
                  borderWidth: 2, 
                  data: data1[3]
                },
              ]
            },

            options: {
              
              showAllTooltips: true,
              maintainAspectRatio: false,
              legend: {
                display: true,
                position: 'bottom', 
                labels: {
                  fontColor: 'black'
                }
              }, 
              title: {
                display: true,
                text: title
              },
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: false, 
                    fontColor: 'black', 
                    fontSize: 12
                  }, 
                  gridLines: {
                    display: true, 
                    color: '#303030',
                    borderWidth: 0.5
                  }
                }], 
                xAxes: [{
                  ticks: {
                    fontColor: 'black', 
                    fontSize: 12,
                    autoSkip: false
                  }, 
                  gridLines: {
                    display: true,
                    color: '#303030',
                    borderWidth: 0.5,
                  }
                }]
              },
              tooltips: {
                filter: function (tooltipItem, data) {
                    var label = data.labels[tooltipItem.index];
                    if (label != "Jul-19") {
                      return false;
                    } else {
                      return true;
                    }
                },
                callbacks: {
                    label: function(tooltipItem, data) {
                        return data.datasets[tooltipItem.datasetIndex].label + ": " + tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                    },
                    // remove title
                    title: function(tooltipItem, data) {
                      return;
                    }
                }
              },
            }
          })
          
        }