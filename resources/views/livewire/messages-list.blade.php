<section class="ud-features" style="padding-bottom:90px">

    <div class="container ">

        <div class="row " style="margin: 10px 25px 10px 25px;">

            <div class="col-xl-12 col-lg-12 col-sm-12 ">

                <div  style="display: flex;justify-content: space-between;margin-bottom: 60px">
                    <span style="font-weight: 600;color:#008367">Messages</span>
                    <div style="position: relative">
                    <input type="text" wire:model.live='query' placeholder="Search"/>
                    <i style="position: absolute;
                    left: 90%;
                    top: 15%;
                    font-size: 20px;" class="lni lni-search"></i>
                    </div>
                </div>
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
                              <th  >{{$key+1}}</th>
                                <td class="message-table-row">{{$message->from}}</td>
                                <td class="message-table-row">{{$message->to}}</td>
                                <td class="message-table-row" style="max-width:1px;word-wrap: break-word;">{{$message->message}}</td>
                                <td class="message-table-row" >{{$message->status}}</td>
                                <td class="message-table-row">{{$message->created_at}}</td>
                                
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                  {{$messages->links()}}
                </div>
            </div>

        </div>

    </div>

</section>
