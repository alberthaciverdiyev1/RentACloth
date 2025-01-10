@extends('../main')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Add Product</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION CONTACT -->
        <div class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading_s1">
                            <h2>Get In touch</h2>
                        </div>
                        <p class="leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit
                            massa enim. Nullam id varius nunc id varius nunc.</p>
                        <div class="field_form">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <input required placeholder="Enter Name *" id="name" class="form-control"
                                           name="name" type="text">
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <input required placeholder="Enter Quantity *" id="quantity" class="form-control"
                                           name="quantity" type="number">
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <input required placeholder="Enter Price *" id="price" class="form-control"
                                           name="price" type="number">
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <input required placeholder="Enter Rental Period *" id="rental_period" class="form-control"
                                           name="rental_period" type="number">
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <input required placeholder="Enter Status *" id="status" class="form-control"
                                           name="status" type="number">
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="1">ASUS</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="1">Category</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <select name="color_id" id="color_id" class="form-control">
                                        <option value="1">Color</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <select name="size" id="size" class="form-control">
                                        <option value="1">Size</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <select name="material" id="material" class="form-control">
                                        <option value="1">Material</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <select name="condition" id="condition" class="form-control">
                                        <option value="2">Condition</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <textarea required placeholder="Message *" id="description" class="form-control"
                                              name="description" rows="4"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="button" title="Add new product!" class="btn btn-fill-out"
                                            id="add-product">Send Message
                                    </button>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END SECTION CONTACT -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control rounded-0"
                                       placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->

@endsection
