<?php 
use Nguyenbaky\Oop\Models\Category;
use Nguyenbaky\Oop\Models\Product;

?>

@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Sales</li>
                </ol>
            </div>
            <!-- <a href="#" class="white_btn3">Create Report</a> -->
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Bordered table</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="table-responsive m-b-30">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Danh Mục</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ((new Category)->all() as $category)
                            <tr>
                                <th scope="row">{{$category['id']}}</th>
                                <td>{{$category['name']}}</td>
                                <td></td>
                                <td>@mdo</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 card_height_100">
        <div class="white_card mb_20">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Revenue</h3>
                    </div>
                    <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">This Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Last Week</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Last Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="white_card_body" style="height: fit-content;">
                <canvas id="bar"></canvas>
            </div>
        </div>
        <div class="white_card mb_20">
            <div class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                <div class="renew_report_left">
                    <h4 class="f_s_19 f_w_600 color_theme2 mb-0">Download your earnings report</h4>
                    <p class="color_gray2 f_s_12 f_w_600">There are many variations of passages.</p>
                </div>
                <div class="create_report_btn">
                    <a href="#" class="btn_1 mt-1 mb-1">Create Report</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection