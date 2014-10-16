<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>时间</th>
        <th>物流单号</th>
        <th>物流名称</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        @foreach($shippings as $shipping)
    <tr>
        <td class="center">{{$shipping->shipping_date}}</td>
        <td class="center">
            {{$shipping->no}}
        </td>
        <td class="center">
            {{$shipping->carrier}}
        </td>
        <td class="center">
            
        </td>
    </tr>
        @endforeach
    <tr>
        <td class="center"><input id="shipping_date" type="datetime-local" name="shipping_date" class="form-control"></td>
        <td class="center">
            <input type="text" id="shippingno" name="shippingno" class="form-control">
        </td>
          <td class="center"><input id="carrier" type="text" name="carrier" class="form-control"></td>
         <td class="center">
            <button class="btn btn-info btn-shipping">添加</button>
        </td>
    </tr>
    </tbody>
    </table>