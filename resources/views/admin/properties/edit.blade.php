@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Modify Property
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">property</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $property->id }}" id="id">
                        <div class="mb-3">
                            <label class="small mb-1">attributes</label>
                            <select class="form-select" aria-label="Default select example" id="atribute_id" verify>
                                <option selected value="{{ $property->attribute_id }}">{{ ucwords($property->attribute->name) }}</option>
                                <option disabled="">
                                    Select a atribute :
                                </option>
                                @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ ucwords($attribute->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="value">value</label>
                            <input class="form-control" id="value" type="value" value="{{ $property->value }}" verify>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="hidden" id="session_id" />
                        </div>

                        <a id="save" class="btn btn-primary">Save</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#save').click(function (e) {
            e.preventDefault();
            if (verify() == 0) {
                axios.put('/api/properties/update/'+$('#id').val(), {
                    atribute_id: $('#atribute_id').val(),
                    value: $('#value').val(),
                })
                .then(response => {
                    if (response.status === 200) {
                        redirect("{{ Route('properties.index') }}");
                    }
                })
                .catch(response => { console.log(response); })
            }            
        })
    })

</script>
@endsection
