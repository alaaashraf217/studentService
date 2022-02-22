<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'الرئيسية')
<!-- Start Content Section -->
@section('content')
    <!-- Start Top Cards -->
    <div class="columns is-multiline">
        <div class="column is-3">
            <div class="flex-card">
                <div class="p-4 text-white has-background-link">
                    <div class="icon-header">
                        <span class="icon-header-body">
                            <i class="fas fa-sitemap"></i>
                        </span>
                    </div>
                    <span class="has-text-white has-text-weight-bold">الخدمات</span>
                </div>
                <div class="content">
                    <div class="card-title is-tile is-styled has-text-right">
                        <div class="card-stat accent has-text-right is-size-4 has-text-weight-bold">
                            {{ \App\Models\Service::count() }}</div>
                    </div>
                    <div class="mt-2 more">
                        <a class="accent" href="{{ route('admin.services.index') }}">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-3">
            <div class="flex-card">
                <div class="p-4 text-white has-background-danger">
                    <div class="icon-header">
                        <span class="icon-header-body">
                            <i class="fas fa-image"></i>
                        </span>
                    </div>
                    <span class="has-text-white has-text-weight-bold">الصور المتحركة</span>
                </div>
                <div class="content">
                    <div class="card-title is-tile is-styled has-text-right">
                        <div class="card-stat accent has-text-right is-size-4 has-text-weight-bold">
                            {{ 1 }}</div>
                    </div>
                    <div class="mt-2 more">
                        <a class="accent" href="#">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-3">
            <div class="flex-card">
                <div class="p-4 text-white has-background-primary">
                    <div class="icon-header">
                        <span class="icon-header-body">
                            <i class="fa fa-newspaper"></i>
                        </span>
                    </div>
                    <span class="has-text-white has-text-weight-bold">الاخبار</span>
                </div>
                <div class="content">
                    <div class="card-title is-tile is-styled has-text-right">
                        <div class="card-stat accent has-text-right is-size-4 has-text-weight-bold">
                            {{ \App\Models\Post::count() }}</div>
                    </div>
                    <div class="mt-2 more">
                        <a class="accent" href="{{ route('admin.posts.index') }}">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-3">
            <div class="flex-card">
                <div class="p-4 text-white has-background-warning">
                    <div class="icon-header">
                        <span class="icon-header-body">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <span class="has-text-white has-text-weight-bold">رسائل التواصل </span>
                </div>
                <div class="content">
                    <div class="card-title is-tile is-styled has-text-right">
                        <div class="card-stat accent has-text-right is-size-4 has-text-weight-bold">{{ \App\Models\Contact::count() }}</div>
                    </div>
                    <div class="mt-2 more">
                        <a class="accent" href="{{ route('admin.contacts.index') }}">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Top Cards -->
    <!-- Start Bottom Cards And Charts -->
    <div class="columns is-multiline">
        <div class="column is-12">
            <div class="p-4 flex-card">
                <h4 class="header-title">اخر العملاء</h4>
                <hr class="m-0" />
                <div class="table-container">
                    <table class='table is-fullwidth is-hoverable'>
                        <thead>
                            <tr>
                                <th>اسم العميل </th>
                                <th>البريد الالكتروني</th>
                                <th>النوع</th>
                                <th>العنوان</th>
                                <th>رقم الهاتف</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>vilod565</td>
                                <td>vilod565@gmail.com</td>
                                <td>Male</td>
                                <td>Kolkata, West Bengal</td>
                                <td>9856435632</td>
                            </tr>

                            <tr>
                                <td>deepak123</td>
                                <td>deepak123@gmail.com</td>
                                <td>Male</td>
                                <td>Hooghly, West Bengal</td>
                                <td>6556456421</td>
                            </tr>

                            <tr>
                                <td>sneha345</td>
                                <td>sneha345@gmail.com</td>
                                <td>Female</td>
                                <td>Howrah, West Bengal</td>
                                <td>7674578634</td>
                            </tr>

                            <tr>
                                <td>saimi875</td>
                                <td>saimi875@gmail.com</td>
                                <td>Male</td>
                                <td>Birbhum, West Bengal</td>
                                <td>8767543452</td>
                            </tr>

                            <tr>
                                <td>santra765</td>
                                <td>santra765@gmail.com</td>
                                <td>Female</td>
                                <td>Maldah, West Bengal</td>
                                <td>9567345237</td>
                            </tr>

                            <tr>
                                <td>riya665</td>
                                <td>riya665@gmail.com</td>
                                <td>Female</td>
                                <td>Jalpaiguri, West Bengal</td>
                                <td>7656435634</td>
                            </tr>

                            <tr>
                                <td>raja222</td>
                                <td>raja222@gmail.com</td>
                                <td>Male</td>
                                <td>Maldah, West Bengal</td>
                                <td>8767543423</td>
                            </tr>

                            <tr>
                                <td>kunal456</td>
                                <td>kunal456@gmail.com</td>
                                <td>Male</td>
                                <td>Hooghly, West Bengal</td>
                                <td>8654328974</td>
                            </tr>

                            <tr>
                                <td>diwakar686</td>
                                <td>diwakar686@gmail.com</td>
                                <td>Male</td>
                                <td>Howrah, West Bengal</td>
                                <td>6754345672</td>
                            </tr>

                            <tr>
                                <td>nupur898</td>
                                <td>nupur898@gmail.com</td>
                                <td>Female</td>
                                <td>Kolkata, West Bengal</td>
                                <td>6897654320</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- End Bottom Cards And Charts -->
@endsection<!-- End Content Section -->
