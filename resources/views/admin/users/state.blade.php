@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Modify State User
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
                <div class="card-header">user</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $user->id }}" id="id">
                        
                        <div class="mb-3">
                            <label class="small mb-1">state</label>
                            <select class="form-select" aria-label="Default select example" id="gender" verify>
                                <option value="{{ $user->state }}" selected>{{ ucfirst($user->state) }}</option>
                                <option disabled> Select a state : </option>
                                <option value="init">Init</option>
                                <option value="enabled">Enabled</option>
                                <option value="disabled">Disabled</option>
                            </select>
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
                axios.put('/api/users/update/'+$('#id').val(), {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    type: $('#type').val(),
                    phone: $('#phone').val(),
                    gender: $('#gender').val(),
                    email: $('#email').val(),
                    password: $('#password').val()
                })
                .then(response => {
                    if (response.status === 200) {
                        redirect("{{ Route('users.index') }}");
                    }
                })
                .catch(response => { console.log(response); })
            }            
        })
    })

</script>
@endsection
