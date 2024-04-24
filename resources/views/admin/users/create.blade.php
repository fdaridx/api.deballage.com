@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Add new User
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
                        <div class="mb-3">
                            <label class="small mb-1" for="first_name">first name</label>
                            <input class="form-control" id="first_name" type="text" name="first_name" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="last_name">last name</label>
                            <input class="form-control" id="last_name" type="text" name="last_name" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="phone">phone</label>
                            <input class="form-control" id="phone" type="number" name="phone" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="password">password</label>
                            <input class="form-control" id="password" type="password" name="password" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="email">email</label>
                            <input class="form-control" id="email" type="email" name="email" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1">gender</label>
                            <select class="form-select" aria-label="Default select example" id="gender" verify>
                                <option selected="" disabled="">
                                    Select a gender :
                                </option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1">type</label>
                            <select class="form-select" aria-label="Default select example" id="type" verify>
                                <option selected="" disabled="">
                                    Select a type :
                                </option>
                                <option value="user">User</option>
                                <option value="seller">Seller</option>
                                {{-- <option value="admin">Admin</option> --}}
                            </select>
                        </div>

                        {{-- <div class="mb-3">
                            <label class="small mb-1">info</label>
                            <select class="form-select" aria-label="Default select example" name="info[]" multiple>
                                <option selected="" disabled="">
                                    Select a rating :
                                </option>
                                <option value="administrator">Administrator</option>
                                <option value="registered">Registered</option>
                            </select>
                        </div> --}}

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
                axios.post('/api/users', {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    type: $('#type').val(),
                    phone: $('#phone').val(),
                    gender: $('#gender').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    session_id: $('#session_id').val(),
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
