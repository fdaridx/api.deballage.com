@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        Modify City
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
                <div class="card-header">city</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $city->id }}" id="id">

                        <div class="mb-3">
                            <label class="small mb-1">Countries</label>
                            <select class="form-select" aria-label="Default select example" id="countrie_id" verify>
                                <option selected value={{ $city->countrie_id }}>{{ ucwords($city->country->name) }}</option>
                                <option disabled="">
                                    Select a country :
                                </option>
                                @foreach ($countries as $country)
                                    <option value={{ $country->id }}>{{ ucwords($country->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="first_name">name</label>
                            <input class="form-control" id="name" type="text" name="name" value="{{ $city->name }}" verify>
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
                axios.put('/api/cities/update/'+$('#id').val(), {
                    countrie_id: $('#countrie_id').val()
                    name: $('#name').val(),
                })
                .then(response => {
                    if (response.status === 200) {
                        redirect("{{ Route('cities.index') }}");
                    }
                })
                .catch(response => { console.log(response); })
            }            
        })
    })

</script>
@endsection
