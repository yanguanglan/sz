<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>时间</th>
        <th>支付类型</th>
        <th>流水号</th>
        <th>金额</th>
        <th>备注</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
    <tr>
        <td class="center">{{$payment->paydate}}</td>
        <td class="center">{{$payment->paymentmethod->name}}</td>
        <td class="center">
            {{$payment->no}}
        </td>
        <td class="center">
            {{$payment->amount}}
        </td>
        <td class="center">
            {{$payment->memo}}
        </td>
        <td class="center">
            
        </td>
    </tr>
        @endforeach
    <tr>
        <td class="center"><input id="paydate" type="datetime-local" name="paydate" class="form-control"></td>
        <td class="center">
            {{Form::select('payment_method_id', 
                                PaymentMethod::lists('name', 'id'),
                                null,
                                array('class'=>'form-control', 'id'=>'payment_method_id')
                            )}}
        </td>
        <td class="center">
            <input type="text" id="no" name="no" class="form-control">
        </td>
          <td class="center"><input id="amount" type="text" name="amount" class="form-control"></td>
        <td class="center">
            <input type="text" id="memo" name="memo" class="form-control">
        </td>
         <td class="center">
            <button class="btn btn-info btn-payment">添加</button>
        </td>
    </tr>
    </tbody>
    </table>