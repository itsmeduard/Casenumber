<div>
    @foreach($caseNumber as $cnumIndex => $cNumber)
        <br>{{$cnumIndex}}/ {{$cNumber}}
        <div class='row'>
            <div class='col-12'>
                <label>Case Number</label>
                <input type='text' class='form-control' wire:model='inputcNumber.{{$cnumIndex}}'>
            </div>
            @foreach($inputPlate as $plateIndex => $plateNumber)
                <div class='col-12'>
                    <label>Plate Number</label>
                    <input type='text' class='form-control mb-2' wire:model="inputPlate.{{$plateIndex}}.plate_number.{{$cnumIndex}}">
                    @if($loop->last)
                        <div class='d-flex justify-content-start items-center'>
                            <button class='btn btn-outline-primary mr-3' wire:click="add_plate({{$cnumIndex}}, {{$plateIndex}})">
                                Add
                            </button>
                            <button class="btn btn-outline-danger" wire:click="remove_plate({{$plateIndex}})">
                                Remove
                            </button>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endforeach
</div>
