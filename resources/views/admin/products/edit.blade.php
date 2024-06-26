@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Modify Product
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
                        <input hidden value="{{ $product->id }}" id="id">
                        <div class="mb-3">
                            <label class="small mb-1">Categories</label>
                            <select class="form-select" aria-label="Default select example" id="category_id">
                                <option selected value="{{ $product->category_id }}">{{ ucwords($product->category->name) }}</option>
                                <option disabled="">
                                    Select a categorie :
                                </option>
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}>{{ ucwords($category->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1">shop</label>
                            <select class="form-select" aria-label="Default select example" id="shop_id">
                                <option selected value="{{ $product->shop_id }}">{{ ucwords($product->shop->intitule) }}</option>
                                <option  disabled="">
                                    Select a shop :
                                </option>
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}">{{ ucwords($shop->intitule) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="price">price</label>
                            <input class="form-control" id="price" type="text" name="price" value="{{ $product->price }}" />
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="special_rice">special price</label>
                            <input class="form-control" id="special_price" type="text" name="special_price" value="{{ $product->special_price }}"/>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="name">name</label>
                            <input class="form-control" id="name" type="text" name="name" value="{{ $product->name }}"/>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="description">description</label>
                            <textarea class="form-control" id="description" type="text" name="description" rows="3">{{ $product->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="images">images</label>
                            <input multiple class="form-control" id="images" type="file"/>
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
        $('#save').click(function(e) {
            e.preventDefault();
            if (verify() == 0) {
                let formData = new FormData();
                let i = 0;
                for (const image of $('#images')[0].files) {
                    formData.append('image_'+ i, image);
                    i++;
                }

                formData.append('i', i);
                formData.append('category_id', parseInt($('#category_id').val()));
                formData.append('shop_id', $('#shop_id').val());
                formData.append('price', $('#price').val());
                formData.append('special_price', $('#special_price').val());
                formData.append('name', $('#name').val());
                formData.append('description', $('#description').val());

                axios.post('/api/products/update/'+ $('#id').val(), formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((response) => {
                    if (response.status === 200) {
                        //redirect("{{ Route('products.index') }}");
                        console.log(response.data);
                    }
                })
                .catch((response) => { console.error(response); });
            }
        })
    })

</script>
@endsection
