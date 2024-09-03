<section class="ud-features" style="padding-bottom:90px">

    <div class="container ">

        <div class="row " style="margin: 10px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div  style="display: flex;justify-content: space-between;margin-bottom: 60px">
                    <span style="font-weight: 600;color:rgb(54, 54, 252)">Conatce Us Messages</span>
                    
                </div>
                <div style="overflow-x: auto">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Recived At</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($contacts as $key=>$contact)
                        <tr wire:key='{{$key+1}}' >
                            <th scope="row">{{$contact->id}}</th>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->message}}</td>
                            <td>{{$contact->created_at}}</td>
                            
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

            </div>

        </div>

    </div>
    
</section>
