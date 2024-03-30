<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['customer_name'] ?? 'Customer Name' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['contact'] ?? 'Contact' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['address'] ?? 'Address' }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($customers as $row)
                                <tr>
                                    <td>
                                        <p class="text-sm px-3 mb-0">{{ $i++ }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->name }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm px-3 mb-0">{{ $row->phone }}</p>
                                        <p class="text-sm px-3 mb-0">{{ $row->email }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm mb-0">{{ $row->address }}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>