<div>
    <div class="row align-items-center justify-content-between mb-4">
        <div class="col">
            <h5 class="fw-500 text-white">{{ $lang->data['payment_receipts'] ?? 'Payment Receipts' }}</h5>
        </div>
</div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header p-4">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="{{ $lang->data['search_here'] ?? 'Search Here' }}" wire:model="search">
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['date'] ?? 'Date' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['order'] ?? 'Order' }}#
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['customer'] ?? 'Customer' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['amount'] ?? 'Amount' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['payment_type'] ?? 'Payment Type' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['note'] ?? 'Note' }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($payments as $row)
                                <tr>
                                    <td>
                                        <p class="text-sm px-3 mb-0">{{ $i++ }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ \Carbon\Carbon::parse($row->payment_date)->format('d/m/Y') }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">#{{ $row->order ? $row->order->order_number : ''}}</p>
                                    </td>
                                    <td>
                                    <p class="text-sm px-3 mb-0">{{ $row->customer ? $row->customer->name : ($lang->data['walk_in_customer'] ?? 'Walk In Customer')}}</p>
                                        <p class="text-sm px-3 mb-0">{{$row->customer ? getCountryCode() : ''}} {{ $row->customer ? $row->customer->phone : '' }}</p>
                                        <p class="text-sm px-3 mb-0">{{ $row->customer ? $row->customer->email: '' }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ getFormattedCurrency($row->received_amount) }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ getpaymentMode($row->payment_type) }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm mb-0">{{ $row->payment_note ? $row->payment_note : '-'}}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($hasMorePages)
                        <div x-data="{
                                init () {
                                    let observer = new IntersectionObserver((entries) => {
                                        entries.forEach(entry => {
                                            if (entry.isIntersecting) {
                                                @this.call('loadPayments')
                                                console.log('loading...')
                                            }
                                        })
                                    }, {
                                        root: null
                                    });
                                    observer.observe(this.$el);
                                }
                            }" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-4">
                            <div class="text-center pb-2 d-flex justify-content-center align-items-center">
                                Loading...
                                <div class="spinner-grow d-inline-flex mx-2 text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>