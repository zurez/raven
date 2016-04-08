 @extends('common.default')
 @section('head')
 <script type="text/javascript">
  $(document).ready(function() {

    $('#table').DataTable( {
        dom: 'Bfrtip',
        "pageLength": 30,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

 </script>
 @stop
 @section('content')
 <div id="search-form" class="row">

{!! Form::open() !!}
              <div class="form row">
                <div class="col-md-3"> <span class="st">Search</span> <select name="target" class="form-control general" id="target">
                  <option value="asset">Assets</option>
                  <option value="trans">Transactions</option>
                  <option value="maint">Maintenance</option>
                </select></div>
                {{--  --}}
                <div class="col-md-3"><span class="st"> with Location </span> <select name="location" class="form-control general" id="location">
                 <option value="all">All</option>
        <option value="Pennsylvania"
          <?php
                if (old('location')=="Pennsylvania") {
                  # code...
                  echo "selected='selected'";
                }
              ?>
              >Pennsylvania</option>
              <option value="Commerce"
              <?php
                if (old('location')=="Commerce") {
                  # code...
                  echo "selected='selected'";
                }
              ?>
              >Commerce</option>
              <option value="Upland"
                <?php
                if (old('location')=="Upland") {
                  # code...
                  echo "selected='selected'";
                }
              ?>
              >Upland</option>
              <option value="Indiana"
              <?php
                if (old('location')=="Indiana") {
                  # code...
                  echo "selected='selected'";
                }
              ?>
              >Indiana</option>
              <option value="Marion"
                <?php
                if (old('location')=="Marion") {
                  # code...
                  echo "selected='selected'";
                }
              ?>
              >Marion</option>
              <option value="Innovation Campus" 
                <?php
                if (old('location')=="Innovation Campus") {
                  # code...
                  echo "selected='selected'";
                }
              ?>
              >Innovation Campus</option>
            </select></div>
                <div class="col-md-3"><span class="st">within Date </span><input type="date" name="start" class="form-control"></div>
                <div class="col-md-3">     
              <span class="st">& Date</span> <input type="date" name="end" class="form-control"></div>
              </div>
              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Search</button>
            </form>
</div>
          
{{-- Result Area --}}
<div class="row">
@if(isset($cost))
  Total Cost : ${{$cost}}
@endif
  @if(isset($results))
    <table class="table" style="visibility:{{$m or 'hidden'}}" id="table">
      @if($type=="asset")
      <thead>
      <tr>
        <th>Site</th>
        <th>Serial Number</th>
        <th>Condition</th>
        <th>Asset Type</th>
        <th>Asset Tag</th>
        <th>Manufacturer</th>
        <th>Vendor</th>
        <th>Location</th>
        <th>Model</th>
        <th>Costs</th>
        </tr>
      </thead>
      <tbody>
        @foreach($results as $r)
        <tr>
          <td>{{$r->site}}</td>
          <td>{{$r->serial_number}}</td>
          <td>{{$r->condition}}</td>
          <td>{{$r->asset_type}}</td>
          <td>{{$r->asset_tag}}</td>
          <td>{{$r->manufacturer}}</td>
          <td>{{$r->vendor_number}}</td>
          <td>{{$r->location}}</td>
          <td>{{$r->model}}</td>
          <td>${{$r->costs}}</td>
          </tr>
        @endforeach
        </tbody>
      @endif
      @if($type=="trans")
        <thead>
          <th>Asset ID</th>
          <th>Date</th>
          <th>Type</th>
          <th>Action</th>
          <th>Notes</th>
          <th>Created By</th>

        </thead>
        <tbody>
        @foreach($results as $r)
        
        <td>{{$r->asset_id}}</td>
        <td>{{$r->date}}</td>
        <td>{{$r->type}}</td>
        <td>{{$r->action}}</td>
        <td>{{$r->notes}}</td>
        <td>{{$r->creator}}</td>
        @endforeach
        </tbody>
        @endif
      @if($type=="maint")
        @foreach($results as $r)
        {{-- <td>{{$r->}}</td> --}}
        @endforeach
      @endif

    </table>
  @endif
</div>
<script type="text/javascript">
      $("#location").prop('disabled', false);
      // var update=function(){
      //   if ($("#target")) {};
      // }
      // alert($('#target').val());

      $("#target").change(function(){
         if ($("#target").val()!="asset") {
         $("#location").prop('disabled', true);
      }
      else{
         $("#location").prop('disabled', false);
      };
      });
     
</script>
@stop'