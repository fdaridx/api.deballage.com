@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Modify Category
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
                <div class="card-header">category</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $category->id }}" id="id">
                        <div class="mb-3"> 
                            <label class="small mb-1">Categories</label>
                            <select class="form-select" aria-label="Default select example" id="categorie_id"> 
                                <option value="{{ $category->category_id }}" selected>{{ $category->category ? ucwords($category->category->name) : '' }}</option>
                                <option disabled="">Select a categorie :</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ ucwords($categorie->name) }}</option>
                                @endforeach
                               
                            </select>
                        </div>
                      
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Name</label>
                            <input value="{{ $category->name }}" class="form-control" id="name" type="text" placeholder="Enter Name" name="name" verify>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="description">Description</label>
                            <textarea class="form-control" id="description" type="text" placeholder="Enter Description" name="description" rows="3" verify>{{ $category->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="profile">Profile</label>
                            <input class="form-control" id="profile" type="file" name="profile" verify>
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
                const formData = new FormData();

                formData.append('profile', $('#profile')[0].files[0]);
                formData.append('name', $('#name').val());
                formData.append('description', $('#description').val());
                formData.append('categorie_id', $('#categorie_id').val());

                axios.put('/api/categories/update/'+$('#id').val(), formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((response) => {
                    if (response.status === 200) {
                        redirect("{{ Route('categories.index') }}");
                    }
                })
                .catch((response) => { console.log(response); });
            }            
        })
    })

</script>
@endsection
