@extends('admin.app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        Add new Attribute Product
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
                <div class="card-header">Attribute Product</div>
                <div class="card-body">
                    <form enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="small mb-1">Attributes</label>
                            <select class="form-select" aria-label="Default select example" id="attribute_id">
                                <option selected="" disabled="">
                                    Select a attribute :
                                </option>
                                @foreach ($attributes as $attribute)
                                    <option value={{ $attribute->id }}>{{ ucwords($attribute->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <a class="btn btn-primary" id="save">
                            Save
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('#save').click(function(e) {
            e.preventDefault();
            if (verify() == 0) {
                const formData = new FormData();
                
                formData.append('attribute_id', $('#attribute_id').val());
                formData.append('product_id', @json($product->id));
                
                axios.post('/api/attributeProducts', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((response) => {
                    if (response.status === 200) {
                        redirect("{{ Route('products.attribute', $product->id) }}");
                    }
                })
                .catch((response) => { console.error(response); });
            }            
        })
    })

</script>
@endsection
