@extends('layouts.base')

@section('customCSS')
  <style>
    #container1 {
      min-width: 300px;
      max-width: 800px;
      height: 500px;
      margin: 1em auto;
    }

    caption {
    padding-bottom: 15px;
    font-family: 'Verdana';
    font-size: 1.2em;
    color:#555;
    }

    table {
    font-family: 'Verdana';
    font-size: 12pt;          
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 2px auto;
      text-align: center;
      width: 100%;
    }

    table tr:nth-child(odd) {
    background-color: #fff;
    }

    table tr:nth-child(even) {
    background-color: #FCF9F9;
    }

    th {
    font-weight: 600;
      padding: 10px;
    }

  </style>
@endsection

@section('content')

    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row" style="opacity: 90%;">
      <h1 style="padding-left: 50px; padding-bottom: 50px">Analytic</h1>
            
      <div class="col-12">
        <div id="container1" class="container1" ></div>
      </div>
      <div class="col-md-12" style="padding-top: 50px">
          <div id="container2" class="container2" ></div>
      </div>
        <div class="col-md-6"></div>
    </div>
</div>
@endsection

@section('customJS')

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></sc
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
      Highcharts.chart('container1', {
        chart: {
            type: 'variablepie'
        },
        accessibility: {
            description: 'A variable radius pie chart compares the population density and total land mass for seven European nations: Spain, France, Poland, the Czech Republic, Italy, Switzerland and Germany. The chart visualizes the data by using the width of each section to represent total area and the depth of the section to represent population density. Each section is color-coded according to the country and the chart is interactive: by hovering over each section the data points are exposed in a call-out box. The chart is organized by population density in a counterclockwise direction. Germany has the highest population density at 235.6 people per square kilometer, followed by Switzerland, Italy, the Czech Republic, Poland, France and Spain. France has the largest land mass at 551,500 square kilometers. Spain is the second largest country at 505,370 square kilometers but has the lowest population density at 92.9 people per square kilometer. Switzerland is the smallest nation by land mass at 41,277 square kilometers but it has the second highest population density at 214.5 people per square kilometer.'
        },
        title: {
            text: 'Countries compared by population density and total area.'
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Area (square km): <b>{point.y}</b><br/>' +
                'Population density (people per square km): <b>{point.z}</b><br/>'
        },
        series: [{
            minPointSize: 10,
            innerSize: '20%',
            zMin: 0,
            name: 'countries',
            data: [{
                name: 'Steph',
                y: 505370,
                z: 92.9
            }, {
                name: 'France',
                y: 551500,
                z: 118.7
            }, {
                name: 'Poland',
                y: 312685,
                z: 124.6
            }, {
                name: 'Czech Republic',
                y: 78867,
                z: 137.5
            }, {
                name: 'Italy',
                y: 301340,
                z: 201.8
            }, {
                name: 'Switzerland',
                y: 41277,
                z: 214.5
            }, {
                name: 'Germany',
                y: 357022,
                z: 235.6
            }]
        }]
    });

    Highcharts.chart('container2', {
      chart: {
          type: 'spline'
      },
      title: {
          text: 'Monthly Average Temperature'
      },
      subtitle: {
          text: 'Source: WorldClimate.com'
      },
      xAxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
              'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
      },
      yAxis: {
          title: {
              text: 'Temperature'
          },
          labels: {
              formatter: function () {
                  return this.value + '°';
              }
          }
      },
      tooltip: {
          crosshairs: true,
          shared: true
      },
      plotOptions: {
          spline: {
              marker: {
                  radius: 4,
                  lineColor: '#666666',
                  lineWidth: 1
              }
          }
      },
      series: [{
          name: 'Tokyo',
          marker: {
              symbol: 'square'
          },
          data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
              y: 26.5,
              marker: {
                  symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
              }
          }, 23.3, 18.3, 13.9, 9.6]

      }, {
          name: 'London',
          marker: {
              symbol: 'diamond'
          },
          data: [{
              y: 3.9,
              marker: {
                  symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
              }
          }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
      }]
    });

    </script>
@endsection