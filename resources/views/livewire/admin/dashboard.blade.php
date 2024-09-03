<div class="container min-container" style="padding:120px 0px">
    <div class="row mt-4 mb-4">
                <div class="col-lg-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="mr-3">
                                    <p class="text-muted mb-2">Total Users</p>
                                    <h5 class="mb-0">{{$users}}</h5>
                                </div>
                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="lni lni-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card blog-stats-wid">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Subscriped Users</p>
                                    <h5 class="mb-0">{{$subscribedUser}}</h5>
                                </div>
                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="lni lni-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card blog-stats-wid">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="mr-3">
                                    <p class="text-muted mb-2">Connected Sessions</p>
                                    <h5 class="mb-0">{{$connectedSessions}}</h5>
                                </div>
                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="lni lni-link"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card blog-stats-wid">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="mr-3">
                                    <p class="text-muted mb-2">Unconnected Session</p>
                                    <h5 class="mb-0">{{$sessions-$connectedSessions}}</h5>
                                </div>
                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="lni lni-unlink"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end row -->

            
        <!-- end col -->
        
        
        <!-- end col -->

    </div>
    <div class="row">
        <div class="col-xl-8">

            <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <h5 class="card-title me-2">Service Plans</h5>
                    
                </div>

                
                <div id="service-plan-chart">

                </div>
            </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                        <h5 class="card-title me-2">Monthly Message Consumption</h5>
                        <div class="ms-auto">
                            <form wire:submit='yearChange'>
                                <label>Year :</label>
                                <input wire:model='year' type="number" min="2020" max="2099" step="1" />
                                <button style="background: #2851d7fc;color: white;padding: 2px 10px;border:none" onclick="refreshPage()" type="submit">submit</button>
                              </form>
                        </div>
                    </div>

                   
                    
                   <div id="bars"></div>
                </div>
            </div>
            </div>



        <div class="col-xl-4 min-col">
            
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="avatar-md mx-auto mb-4">
                            <div class="avatar-title bg-light rounded-circle text-primary h1">
                                <i class="mdi mdi-email-open"></i>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <h4 class="text-primary">Test Message</h4>
                                
                                <div style="box-shadow: none;padding:60px 0px" class="ud-contact-form-wrapper">
                                <form wire:submit='sendMessage' class="ud-contact-form">

                                    <div class="ud-form-group">
                                        <label for="SessionName">Session Name</label>
                                        <input wire:model='sessionName' type="text" name="SessionName" placeholder="" required>
                                    </div>
            
                                    <div class="ud-form-group">
                                        <label for="PhoneNumber">Phone Number</label>
                                        <input wire:model='phoneNumber' type="text" name="PhoneNumber" placeholder="" required>
                                    </div>

                                    <div class="ud-form-group">
                                        <label for="Message">Message</label>
                                        <input wire:model='message' type="text" name="Message" placeholder="" required>
                                    </div>
                                    
            
            
            
                                    <div class="ud-form-group mb-0"
                                        >
                                        <button type="submit" class="ud-main-btn">
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>

    function refreshPage(){
      location. reload()
    }
      var optionsBar1 = {
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
            distributed: true, 

            borderRadius: 4,
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

        var chartBar1 = new ApexCharts(document.querySelector("#bars"), optionsBar1);
        chartBar1.render();

    var optionsBar = {
        series: [{

        data: [{{$servicePlans->where('service_plan_id',4)->value('count')?$servicePlans->where('service_plan_id',4)->value('count') :0}}
        ,{{$servicePlans->where('service_plan_id',3)->value('count')? $servicePlans->where('service_plan_id',3)->value('count'):0}},
        {{$servicePlans->where('service_plan_id',2)->value('count')?$servicePlans->where('service_plan_id',2)->value('count') :0}},
        {{$servicePlans->where('service_plan_id',1)->value('count')? $servicePlans->where('service_plan_id',1)->value('count'):0}}]

      }],
      colors:['#1f77b4', '#ff7f0e', '#2ca02c','#d62728'],
        chart: {
        type: 'bar',
        height: 350,
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
            distributed: true, 

          borderRadius: 4,
          borderRadiusApplication: 'end',
          horizontal: false,
          columnWidth:'35%'
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: [ 'Bussiness Plan','Pro Plan','Beginner Plan','Free Plan'],
      }
      };

      var chartBar = new ApexCharts(document.querySelector("#service-plan-chart"), optionsBar);
      chartBar.render();

    </script>
</div>