@extends('layouts.master')
@section('content')
    <div class="content">
        <!-- Quick Overview -->
        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-success">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-success mb-0">
                            Add New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-danger">24</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-danger mb-0">
                            Out of stock
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark">260</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-muted mb-0">
                            New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark">14503</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-muted mb-0">
                            All Products
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Products -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Products</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn-block-option" id="dropdown-ecom-filters" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Filters <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                New
                                <span class="badge badge-success badge-pill">260</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Out of Stock
                                <span class="badge badge-danger badge-pill">24</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                All
                                <span class="badge badge-primary badge-pill">14503</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <!-- Search Form -->
                <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-products-search"
                                name="one-ecom-products-search" placeholder="Search all products..">
                            <div class="input-group-append">
                                <span class="input-group-text bg-body border-0">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END Search Form -->

                <!-- All Products Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th class="d-none d-md-table-cell">Product</th>
                                <th class="d-none d-sm-table-cell text-center">Added</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-right">Value</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01535</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #35</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">17/03/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$30,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01534</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #34</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">22/01/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$37,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01533</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #33</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">27/03/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$12,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01532</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #32</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">04/09/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$36,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01531</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #31</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">04/11/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$75,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01530</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #30</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">21/06/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$50,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01529</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #29</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">04/03/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$36,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01528</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #28</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">08/03/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$88,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01527</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #27</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">25/11/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$68,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01526</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #26</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">13/02/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$61,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01525</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #25</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">22/11/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$61,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01524</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #24</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">11/08/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$51,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01523</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #23</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">24/12/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$30,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01522</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #22</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">11/02/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$41,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01521</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #21</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">14/06/2019</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$14,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01520</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #20</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">20/11/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$81,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01519</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #19</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">05/12/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$78,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01518</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #18</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">28/02/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$22,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>PID.01517</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #17</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">25/12/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$35,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html"
                                        data-toggle="tooltip" title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="tooltip"
                                        title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END All Products Table -->

                <!-- Pagination -->
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination pagination-sm justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
        </div>
        <!-- END All Products -->
    </div>
@endsection
