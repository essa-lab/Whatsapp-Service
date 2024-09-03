<section class="ud-features" style="padding-bottom:90px">
       
        <div class="container " >

        
      <div class="row " style="margin: 10px 25px 10px 25px;border-bottom: 1px solid #cfcfcf;
      padding-bottom: 25px;">

        
          <div class="col-xl-4 col-lg-4 col-sm-4 col-sm-12" >

          <div style="" class="chart-box">
            <h6 class="chart-title">Insatnces</h6>
            <div id="instance-chart">

            </div>
            <div style="" class="box-footer">
              <p>Limit : {{$user->subscripe->instances_limit}}</p>
              <p>Used : {{$user->subscripe->instances_used}}</p>

            </div>
          </div>

          </div>

          <div class="col-xl-4 col-lg-4 col-sm-4 col-sm-12" >

            <div style="" class="chart-box">
                <h6 class="chart-title">Messages</h6>
                <div id="request-chart">

                </div>
                <div style="" class="box-footer">
                  <p>Limit : {{$user->subscripe->requests_limit}}</p>
                  <p>Used : {{$user->subscripe->requests_used}}</p>
    
                </div>
              </div>

          </div>

          <div class="col-xl-4 col-lg-4 col-sm-4 col-sm-12" >
            <div style="" class="chart-box">
                <h6 class="chart-title">Available Days</h6>
                <div id="date-chart"></div>

              <div style="" class="box-footer">
                <p>From : {{$user->subscripe->subscription_start_date}}</p>
                <p>Until : {{$user->subscripe->subscription_end_date}}</p>
  
              </div>
              </div>


          </div>

          </div>

          
          <div class="row" style="margin: 10px 25px 10px 25px;border-bottom: 1px solid #cfcfcf;
          padding-bottom: 25px;">
            <div style="display: flex;justify-content: space-between">
              <h6 class="chart-title">Monthly Messages</h6>
              <div>
                <form wire:submit='yearChange'>
                  <label>Year :</label>
                  <input wire:model='year' type="number" min="2020" max="2099" step="1" />
                  <button style="background: #008367;color: white;padding: 2px 10px;border:none" onclick="refreshPage()" type="submit">submit</button>
                </form>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 col-sm-12" >
              <div  id="bars"></div>
            </div>
          </div>

          <div class="row" style="margin: 25px 25px 10px 25px;">
            <div style="display: flex;justify-content: space-between">
              <h6 style="margin-bottom: 15px" class="chart-title">Last 10 Messages</h6>
              <button style="background: #008367;color: white;padding: 2px 10px;border:none" wire:click="goToMessages()" type="button">All Messages</button>

            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 col-sm-12" >
              <div style="overflow-x: auto">

                <table class="table" style="">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th width="10%" scope="col">From</th>
                        <th width="10%" scope="col">To</th>
                        <th width="55%" scope="col">Message</th>
                        <th width="5%" scope="col">Status</th>
                        <th width="20%" scope="col">Sent At</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($messages as $key=>$message)
                        <tr wire:key='{{$key+1}}' >
                          <th>{{$key+1}}</th>
                            <td class="message-table-row">{{$message->from}}</td>
                            <td class="message-table-row">{{$message->to}}</td>
                            <td class="message-table-row" style="max-width:1px;word-wrap: break-word;">{{$message->message}}</td>
                            <td class="message-table-row">{{$message->status}}</td>
                            <td class="message-table-row">{{$message->created_at}}</td>
                            
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
          </div>


      </div>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script>
    function refreshPage(){
      location. reload()
    }
      var optionsBar = {
          series: [{

          data: [{{$monthlyConsumptionRequest[0]}}, {{$monthlyConsumptionRequest[1]}}, {{$monthlyConsumptionRequest[2]}},
          {{$monthlyConsumptionRequest[3]}}, {{$monthlyConsumptionRequest[4]}}, {{$monthlyConsumptionRequest[5]}}
          , {{$monthlyConsumptionRequest[6]}}, {{$monthlyConsumptionRequest[7]}}, {{$monthlyConsumptionRequest[8]}},
          {{$monthlyConsumptionRequest[9]}},{{$monthlyConsumptionRequest[10]}},{{$monthlyConsumptionRequest[11]}}]

        }],
        colors:['#1f77b4', '#ff7f0e', '#2ca02c','#d62728','#9467bd','#8c564b','#e377c2','#7f7f7f','#bcbd22','#17becf','#ffbb78','#98df8a'],

          chart: {
          type: 'bar',
          height: 350,
          toolbar: {
            show: false
          }
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            distributed: true, 

            borderRadiusApplication: 'end',
            horizontal: false,
            columnWidth:'35%'
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August', 'September', 'October','November','December'],
        }
        };

        var chartBar = new ApexCharts(document.querySelector("#bars"), optionsBar);
        chartBar.render();

      var percent = {{$user->subscripe->instances_used}}*(100/{{$user->subscripe->instances_limit}})
      var options = {
          series: [percent],
          chart: {
          height: 175,
          type: 'radialBar',
          toolbar: {
            show: false
          }
        },
        fill:{
            colors:['#008367']
          },
        plotOptions: {
          
          radialBar: {
            startAngle: 0,
            endAngle: 360,
             hollow: {
              margin: 0,
              size: '60%',
              background: '#f9fbff00',
              image: undefined,
              imageOffsetX: 0,
              imageOffsetY:0,
              position: 'front',
              dropShadow: {
                enabled: true,
                top: 3,
                left: 0,
                blur: 4,
                opacity: 0.24,
                color:'#25c2a0',

              }
            },        
            dataLabels: {
              show: true,
              name: {
                offsetY: 0,
                show: false,
                color: '#888',

              },
              
              value: {

                formatter: function(val) {
                  return percent+'%';
                },
                color: '#111',
                fontSize: '20px',
                show: true,
                offsetY: 9,

              },
              
            }
          }
        },
        
        stroke: {
          lineCap: 'round'
        },

        labels: ['Percent'],

        };

        var chart = new ApexCharts(document.querySelector("#instance-chart"), options);
        chart.render();

        var percent2 = {{$user->subscripe->requests_used}}*(100/{{$user->subscripe->requests_limit}})
      var options2 = {
          series: [percent2],
          chart: {
          height: 175,
          type: 'radialBar',
          toolbar: {
            show: false
          }
        },
        fill:{
            colors:['#008367']
          },
        plotOptions: {
          radialBar: {
            startAngle: 0,
            endAngle: 360,
             hollow: {
              margin: 0,
              size: '60%',
              background: '#f9fbff00',
              image: undefined,
              imageOffsetX: 0,
              imageOffsetY: 0,
              position: 'front',
              dropShadow: {
                enabled: true,
                top: 3,
                left: 0,
                blur: 4,
                opacity: 0.24
              }
            },
           
        
            dataLabels: {
              show: true,
              name: {
                offsetY: -10,
                show: false,
                color: '#888',
                fontSize: '17px'
              },
              value: {
                formatter: function(val) {
                  return percent2+'%';
                },
                color: '#111',
                fontSize: '20px',
                show: true,
                offsetY: 9,
              }
            }
          }
        },
        
        stroke: {
          lineCap: 'round'
        },
        labels: [''],
        };

        var chart2 = new ApexCharts(document.querySelector("#request-chart"), options2);
        chart2.render();

      var options3 = {
          series: [{{$remainingDays*(100/30)}}],
          chart: {
          height: 175,
          type: 'radialBar',
          toolbar: {
            show: false
          }
        },
        fill:{
            colors:['#008367']
          },
        plotOptions: {
          radialBar: {
            startAngle: 0,
            endAngle: 360,
             hollow: {
              margin: 0,
              size: '60%',
              // background: '#f9fbff00',
              image: undefined,
              imageOffsetX: 0,
              imageOffsetY: 0,
              position: 'front',
              dropShadow: {
                enabled: false,
                top: 3,
                left: 0,
                blur: 4,
                opacity: 0.24
              }
            },
           
        
            dataLabels: {
              show: true,
              name: {
                offsetY: -10,
                show: false,
                color: '#888',
                fontSize: '10px'
              },
              value: {
                formatter: function(val) {
                  return {{$remainingDays}};
                },
                color: '#111',
                fontSize: '20px',
                show: true,
                offsetY: 9,

              }
            }
          }
        },
        
        stroke: {
          lineCap: 'round'
        },
        // labels: ['Days Remaining'],
        };

        var chart3 = new ApexCharts(document.querySelector("#date-chart"), options3);
        chart3.render();
  </script>
</section>