@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        Add new Shop
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
                <div class="card-header">shop</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3"> 
                            <label class="small mb-1">Users</label>
                            <select class="form-select" aria-label="Default select example" id="user_id"> 
                                <option selected="" disabled="">Select a user :</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ ucwords($user->first_name).' '.ucwords($user->last_name) }}</option>
                                @endforeach
                               
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="profile">intitule</label>
                            <input class="form-control" id="intitule" type="text" name="intitule" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="intitule">description</label>
                            <textarea class="form-control" id="description" rows="5" verify></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="profile">profile</label>
                            <input class="form-control" id="profile" type="file" name="profile" verify>
                        </div>

                        {{-- <div class="mb-3">
                            <label class="small mb-1" for="profile">localisation</label>
                            <input class="form-control" id="localisation" type="text" name="localisation" verify>
                        </div> --}}

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
                const formData = new FormData();

                formData.append('profile', $('#profile')[0].files[0]);
                formData.append('user_id', $('#user_id').val());
                formData.append('intitule', $('#intitule').val());
                formData.append('description', $('#description').val());

                axios.post('/api/shops', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((response) => {
                    if (response.status === 200) {
                        redirect("{{ Route('shops.index') }}");
                    }
                })
                .catch((response) => { console.error(response); });
            }            
        })
    })

</script>
@endsection
