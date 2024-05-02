@extends('admin.user-app')
@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">

                        Modify state of the command Line
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
                <div class="card-header">Command Line</div>
                <div class="card-body">
                    <form>
                        <input hidden value="{{ $commandline->id }}" id="id">
                        
                        <div class="mb-3">
                            <label class="small mb-1">Action</label>
                            <select class="form-select" aria-label="Default select example" id="state">
                                <option selected disabled="">
                                    Select a action :
                                </option>
                                <option value="confirmed">Confirmed</option>
                                <option value="delivered">delivered</option>
                                <option value="cancel"> <!--  -->ancel</option>
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
            axios.post('/api/commandeslines/state/'+$('#id').val(), {
                state: $('#state').val(),
            })
            .then(response => {
                if (response.status === 200) {
                    redirect("{{ Route('user.commandes.index') }}");
                }
            })
            .catch(response => { console.log(response); })           
        })
    })

</script>
@endsection
