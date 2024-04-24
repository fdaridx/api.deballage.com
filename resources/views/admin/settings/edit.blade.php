@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Modify Setting
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
                <div class="card-header">setting</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $setting->id }}" id="id">
                        <div class="mb-3">
                            <label class="small mb-1" for="name">name</label>
                            <input class="form-control" id="name" type="text" name="name" value="{{ $setting->name }}" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="value">value</label>
                            <input class="form-control" id="value" type="text" name="value" value="{{ $setting->value }}" verify>
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
                axios.put('/api/settings/update/'+$('#id').val(), {
                    name: $('#name').val(),
                    value: $('#value').val()
                })
                .then(response => {
                    if (response.status === 200) {
                        redirect("{{ Route('settings.index') }}");
                    }
                })
                .catch(response => { console.log(response); })
            }            
        })
    })

</script>
@endsection
