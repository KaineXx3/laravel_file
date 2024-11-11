@extends('layouts.app')

@section('content')
<style>
    .grid-container {
        display: grid;
        grid-gap: 10px;
        grid-template-columns: repeat(6, minmax(0, 1fr));
    }

    @media only screen and (max-width: 865px) {
        .grid-container {
            grid-template-columns: 1fr;
        }
    }

    @media only screen and (max-width: 614px) {
        .grid-container {
            grid-template-columns: 100%;
        }
    }

    .grid-item {
        width: 100%;
        height: 100%;
    }

    .itemChart1 {
        grid-row-start: 1;
        grid-row-end: 3;
        grid-column-start: 1;
        grid-column-end: 2;
    }

    .itemPanelStat1 {
        grid-row-start: 3;
        grid-row-end: 4;
        grid-column-start: 1;
        grid-column-end: 2;
    }

    .itemChart2 {
        grid-row-start: 1;
        grid-row-end: 3;
        grid-column-start: 2;
        grid-column-end: 3;
    }

    /* Card and Container Styles */
    .card {
        margin: 10px 0; /* Add margin for spacing between cards */
    }
</style>

<div class="container text-center">
    <div class="row mb-3">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    Title
                </div>
                <div class="card-body">
                    <p class="card-text">Welcome to CCNA 3 course</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" >
            <div class="card" style="height: 200px;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Class 1</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Introduction to Networking</h6>
                    <p class="card-text">OSI 7 layer is the basic of the network.</p>
                    <p class="card-text">OSI 7 layer is the basic of the network.</p>
                </div>
            </div>
        </div>

        <div class="col">
                <div class="card mb-3" style="height: 200px;"> 
                    <div class="card-body d-flex align-items-center justify-content-center"> 
                        <img src="{{ asset('images/download.png') }}" alt="Description of image" class="img-fluid" style="width: 30%;">
                    </div>
                </div>
            </div>
    </div>

    <div class="container mt-4 ">
        <table class="table table-striped border-spacing-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->gender }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
