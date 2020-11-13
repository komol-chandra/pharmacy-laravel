<div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <input wire:model="searchTerm" style="margin-left: 8rem;
        margin-top: 1rem;" type="text" placeholder="Medicine search..."/>
    </div>

    <div class="col-md-4"></div>
    <div class="custom-div3 mt-2">

        <div class="col-md-12 row">
            @foreach($medicines as $medicine)
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 mt-4 each_medicine" data-id="{{$medicine}}">
                <div class="card text-center custom-card">
                    <td><img width="130" height="97" style="padding: 8px;" src={{$medicine->med_image}}> </td>
                    <div class="card-body"><h5>{{ $medicine->med_name  }}</h5>
                        <p>{{ $medicine->type ? $medicine->type->type_name : "Not Set" }}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    {{ $medicines->links('livewire.pagination') }}
    </div>
</div>
