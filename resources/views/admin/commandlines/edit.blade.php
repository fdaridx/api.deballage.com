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
                <div class="card-header">command Line</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $commandline->id }}" id="id">
                        <div class="mb-3">
                            <label class="small mb-1">Products</label>
                            <select class="form-select" aria-label="Default select example" id="product_id">
                                <option selected value="{{ $commandline->product_id }}">{{ ucwords($commandline->product->name) }}</option>
                                <option disabled="">
                                    Select a product :
                                </option>
                                @foreach ($products as $product)
                                    <option value={{ $product->id }}>{{ ucwords($product->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="quantity">quantity</label>
                            <input class="form-control" id="quantity" type="number" min="1" name="quantity" value="{{ $commandline->quantity }}" verify>
                        </div>
{{-- 
                        <div class="mb-3">
                            <label class="small mb-1">State</label>
                            <select class="form-select" aria-label="Default select example" id="state">
                                <option selected value="{{ $commandline->state }}">{{ ucwords($commandline->state) }}</option>
                                <option disabled="">
                                    Select a state :
                                </option>
                                <option value="init">Init</option>
                                <option value="enabled">Enabled</option>
                                <option value="disabled">Disabled</option>
                            </select>
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
                axios.put('/api/commandeslines/update/'+$('#id').val(), {
                    product_id: $('#product_id').val(),
                    id: @json($commandline->command_id),
                    last_name: $('#last_name').val(),
                    quantity: $('#quantity').val(),
                })
                .then(response => {
                    if (response.status === 200) {
                        redirect("{{ Route('commandes.details', $commandline->command_id) }}");
                    }
                })
                .catch(response => { console.log(response); })
            }            
        })
    })

</script>
@endsection
