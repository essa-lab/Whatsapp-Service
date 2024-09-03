<section class="ud-features" style="padding-bottom:90px">

    <div class="container ">

        <div class="row " style="margin: 10px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div  style="display: flex;justify-content: space-between;margin-bottom: 60px">
                    <span style="font-weight: 600;color:rgb(54, 54, 252)">Users</span>
                    <div style="position: relative">
                    <input type="text" wire:model.live='query' placeholder="Search"/>
                    <i style="position: absolute;
                    left: 90%;
                    top: 15%;
                    font-size: 20px;" class="lni lni-search"></i>
                    </div>
                </div>
                <div style="overflow-x: auto">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Expires At</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Instance Limit</th>
                        <th scope="col">Instance Used</th>

                        <th scope="col">Message Limit</th>

                        <th scope="col">Message Used</th>

                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($users as $key=>$user)
                        <tr wire:key='{{$key+1}}' wire:click='openUser({{$user->id}})' class="user-row">
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{isset($user->subscripe)?$user->subscripe->subscription_end_date :"N/A"}}</td>
                            <td>{{isset($user->subscripe)?$user->subscripe->servicePlan->plan_name:'N/A'}}</td>
                            <td>{{isset($user->subscripe)?$user->subscripe->instances_limit:"N/A"}}</td>
                            <td>{{isset($user->subscripe)?$user->subscripe->instances_used:"N/A"}}</td>
                            <td>{{isset($user->subscripe)?$user->subscripe->requests_limit:"N/A"}}</td>
                            <td>{{isset($user->subscripe)?$user->subscripe->requests_used:"N/A"}}</td>

                            
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{$users->links()}}
                </div>
            </div>

        </div>

    </div>
    <script>
        function copy(button,token) {
            button.textContent = "Copied";
            
            navigator.clipboard.writeText(token);
        }
    </script>
</section>
