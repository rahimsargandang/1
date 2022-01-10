@extends('admin.layouts.admin-dash-layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="text-center">
            <img  src="https://www.ukm.my/pkk//wp-content/logo/en/Alternatelogo_blacktext.png" width="800"  >

            ADMIN

        </div>
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <i class="nav-icon fas fa-exclamation-circle"></i> <h3>150</h3>

                <p>Total Voter</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <i class="nav-icon fas fa-check"></i> <h3>200<sup style="font-size: 20px"></sup></h3>

                <p>Total Votes</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Total Candidates Application</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/approvecandidate" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Total Approved Candidates</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/candidateinfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

    </div>
    </div>
    </div>
    </div>

@endsection
