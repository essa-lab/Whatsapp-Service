<section class="ud-features" style="padding-bottom:90px">

    <div class="container ">

        <div class="row " style="margin: 10px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div  style="display: flex;justify-content: space-between;margin-bottom: 60px">
                    <span style="font-weight: 600;color:rgb(54, 54, 252)">Plans</span>
                    
                </div>
                <div style="overflow-x: auto">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plan Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Duration Month</th>
                        <th scope="col">Request Limit</th>
                        <th scope="col">Instance Limit</th>
                        <th scope="col">Price</th>
                        <th scope="col">Is Active</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($plans as $key=>$plan)
                        <tr wire:key='{{$key+1}}' wire:click='openPlan({{$plan->service_plan_id}})' class="user-row">
                            <th scope="row">{{$plan->service_plan_id}}</th>
                            <td>{{$plan->plan_name}}</td>
                            <td>{{$plan->description}}</td>
                            <td>{{$plan->duration_months}}</td>
                            <td>{{$plan->requests_limit}}</td>
                            <td>{{$plan->instances_limit}}</td>
                            <td>{{$plan->price}}</td>
                            <td><span class="{{$plan->is_active==1 ? 'active-span':'normal-span'}}">{{$plan->is_active==1?'Active':'Disabled'}}</span></td>
                            
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

            </div>

        </div>

    </div>
    
</section>
