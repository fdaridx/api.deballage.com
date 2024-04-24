@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Add new qwater
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
                <div class="card-header">qwater</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="small mb-1">Cities</label>
                            <select class="form-select" aria-label="Default select example" id="citie_id" verify>
                                <option selected="" disabled="">
                                    Select a city :
                                </option>
                                @foreach ($cities as $city)
                                    <option value={{ $city->id }}>{{ ucwords($city->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="first_name">name</label>
                            <input class="form-control" id="name" type="text" name="name" verify>
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
                axios.post('/api/qwaters', {
                    citie_id: $('#citie_id').val(),
                    name: $('#name').val()
                })
                .then(response => {
                    if (response.status === 200) {
                        redirect("{{ Route('qwaters.index') }}");
                    }
                })
                .catch(response => { console.log(response); })
            }            
        })
    })

</script>
@endsection
