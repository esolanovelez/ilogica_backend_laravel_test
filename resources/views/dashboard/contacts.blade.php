<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('LIST OF CONTACTS MESSAGES') }}</div>
            <div class="card-body">
                @if($list_contacts->count() > 0)
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                            <th class="text-center" width="5%" scope="col">#</th>
                            <th class="text-center" width="10%"scope="col">Fullname</th>
                            <th class="text-center" width="10%"scope="col">Email</th>
                            <th class="text-center" width="10%"scope="col">Phone</th>
                            <th class="text-center" width="20%"scope="col">Fecha</th>
                            <th class="text-center" width="45%"scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_contacts as $k1 => $d)
                                <tr>
                                    <th scope="row">{{ $d->id }}</th>
                                    <td>{{ $d->fullname }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td>{{ $d->phone }}</td>
                                    <td>{{ $d->created_at }}</td>
                                    <td>{{ $d->message }}</td>
                                </tr>
                            @endforeach                  
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

