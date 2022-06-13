@php($usdt = user()->usdt)
<div class="deposit--box text-center">
    <div class="d-flex justify-content-center">
        <div class="small-box">
            @if($usdt == null)
                <div class="alert alert-info">
                    We are creating a wallet for you, please wait a moment!
                </div>
            @else
                <h2 class="text-center">Choose coin Deposit</h2>
                <p class="mb-0">Minimum deposit 20 USDT</p>
                <p class="mb-0">Only send USDT BEP20, BNB BEP20 to this address.</p>
                <p class="mb-0">Sending any other asset to this address may result in the loss of your deposit!</p>
                <div class="qr-code-box">
                    <div
                        class="d-flex justify-content-center mt-3 mb-3"
                        data-qr-width="160"
                        data-qr-height="160"
                        data-qr="{{ $usdt->token }}"></div>
                    <h3>QR CODE</h3>
                </div>
                <div class="input-canable-copy group-deposit-text">
                    <input type="text" id="btn-deposit-text" class="form-control" value="{{ $usdt->token }}" disabled>
                    <button onclick="Home.copyTextRaw('{{ $usdt->token }}', () => alertify.success('Copy Success'))">
                        <img src="{{ asset('image/adm/icon/copy-icon.png') }}" alt="Copy" class="w-100">
                    </button>
                </div>
            @endif
        </div>
    </div>
    <div class="deposit-history">
        <div class="d-flex align-items-center mb-3 mt-4">
            <img src="{{ asset('image/adm/icon/history.png') }}" alt="History" style="width: 42px">
            <h3 class="mb-0">HISTORY DEPOSIT</h3>
        </div>
        <div class="d-flex flex-wrap mb-3">
            <input type="text" style="width: 210px; max-width: 100%" class="form-control mr-2 mb-1" value="{{ date('Y-m-d') }}">
            <input type="text" style="width: 210px; max-width: 100%" class="form-control mr-2 mb-1" value="{{ date('Y-m-d') }}">
            <button class="btn btn-success btn-gradient mb-1">Search</button>
        </div>
        <div class="form-radius">
            <table class="table table-responsive mb-0">
                <thead>
                <tr>
                    <th class="border-top-0" scope="col">No.</th>
                    <th class="border-top-0" scope="col">Amount</th>
                    <th class="border-top-0" scope="col">Note</th>
                    <th class="border-top-0" scope="col">Status</th>
                    <th class="border-top-0" scope="col">Created Date</th>
                </tr>
                </thead>
                <tbody>
                {{--@php($count = 1)--}}
                {{--@foreach($histories->items() as $history)--}}
                {{--    <tr>--}}
                {{--        <td>{{ $count++ }}</td>--}}
                {{--        <td>{{ $history->amount }}</td>--}}
                {{--        <td>{{ $history->note }}</td>--}}
                {{--        <td>{{ $history->status }}</td>--}}
                {{--        <td style="min-width: 140px">{{ __d($user->created_at) }}</td>--}}
                {{--    </tr>--}}
                {{--@endforeach--}}
                {{--@if($histories->count() <= 0)--}}
                {{--    <tr>--}}
                {{--        <td colspan="5">No User</td>--}}
                {{--    </tr>--}}
                {{--@endif--}}
                <tr>
                    <td colspan="5">No History</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
