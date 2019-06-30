
<!--

                                  <select class="form-control" name="branch">
                                  <option>Select Item</option>
                                   @foreach ($branch as $branch)
                                        <option value="{{ $branch->name }}" </option>
                                   @endforeach    
                                 </select>







  <select class="form-control" name="resoureceName">
  <option>Select Item</option>
   @foreach ($items as $item)
        <option value="{{ $item->id }}" {{ ( $item->id == $existingRecordId) ? 'selected' : '' }}> {{ $item->name }} </option>
   @endforeach    
 </select>




                                           @foreach ($requests as $requests)
                    <tr>
                    <td>{{ $requests->id }}</td>
                    <td>{{ $requests->name }}</td>
                    <br>
                    </tr>
                    @endforeach
                -->