@extends('admin.app')
@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg></div>
                            Command Lines
                    </h1>
                    <div class="page-header-subtitle">Here are all your Command Lines
                    </div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar text-primary">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg></span>
                        <input class="form-control ps-0 pointer" id="litepickerRangePlugin"
                            placeholder="Select date range...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header"><div class="" style="display: flex;justify-content:space-between">
            <div>list of command lines </div>
            {{-- <div class="badge bg-primary text-white rounded-pill" x-data='xlien'>
                <a x-on:click='redirect( "" )' class="text-white pointer">Add</a> 
            </div> --}}
        </div></div>
        <div class="card-body" x-data='xdatas("commandeslines/{{ $command->id }}", 5)'>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="dataTable-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for='line in datas'>
                                <tr>
                                    <td x-text='ucword(line.product.name)'></td>
                                    <td x-text='line.quantity'></td>
                                    <td>
                                        <div x-on:click='redirect(line.edit_url)' class="pointer badge bg-warning text-white rounded-pill">
                                            edit</div>
                                            <div x-text='line.state' x-on:click='redirect(line.state_url)' class="pointer badge bg-primary text-white rounded-pill"></div>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <div class="dataTable-bottom">
                    <template x-if='lengthData > item'>
                        <div class="dataTable-info" x-text="`Showing ${nbElt} of ${lengthData} entries`"></div>
                        <nav class="dataTable-pagination">
                            <ul class="dataTable-pagination-list">
                                <template x-for="i in Math.ceil(lengthData/item)">
                                    <li class=""><a x-on:click='change(i)' x-text='i'></a></li>
                                </template>
                                {{-- <li class="active"><a href="#" data-page="1">1</a></li> --}}
                                
                                {{-- <li class="pager"><a href="#" data-page="2">›</a></li> --}}
                            </ul>
                        </nav>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

