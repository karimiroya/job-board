<!doctype html>
<html class="no-js" lang="zxx">
@include('front.layouts.topmenu')
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                        <path fill-rule="evenodd" fill="rgb(27, 207, 107)"
                                            d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                    </svg>
                                </div>
                                <form id="filter_job">
                                    @csrf
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>Job Category</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="category">

                                    <option value="Design & Creative">Design & Creative</option>
                                    <option value="Design & Development">Design & Development</option>
                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                    <option value="Mobile Application">Mobile Application</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Content Writer">Content Writer</option>

                                </select>
                            </div>
                        </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                <div class="select-job-items2">
                                    <select name="nature">
                                        <option value="full time">full time</option>
                                        <option value="part time">part time</option>
                                        <option value="remote">remote</option>
                                        <option value="freelance">freelance</option>

                                    </select>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single two -->
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Job Location</h4>
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="city">
                                        <option value="esfahan">esfahan</option>
                                        <option value="tehran">tehran</option>
                                        <option value="shiraz">shiraz</option>
                                        <option value="mashhhad">mashhhad</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->

                                <!-- select-Categories End -->
                            </div>
                            <!-- single three -->
                            <br>
                            <br>
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Price</h4>
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="price">
                                        <option value="0-400">0 to 400</option>
                                        <option value="400-800">400 to 800</option>
                                        <option value="800-1500">800 to 1500</option>
                                        <option value="1500-up">1500 to up</option>
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Job Category Listing End -->
                        <button type="submit" id="filterJob" class="genric-btn info">
                            filterJob</button>
                        </form>
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            {{-- <span>{{ $countjob }} Jobs </span> --}}
                                            <!-- Select job items start -->

                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <div id="fjob">
                                @include('front.jobstable')

                                </div>



                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

        <!--Pagination Start  -->
        <!--Pagination End  -->

</main>


<script src="./front/js/app.js"></script>
<script>
    $(document).on('click', '#filterJob', function(event) {
            event.preventDefault();



            $.ajax({
                url: "/filterJob",
                type: "POST",

                data: $('#filter_job').serialize(),

                success: function(response) {

                    $('#Fjob').empty();
                $('#fjob').html(response.table);
               


                    }

                //     ,
                // error: function(response) {
                //     var str = "";
                //     $.each(response.responseJSON.errors, function(index, value) {
                //         str += (value + "<br>");
                //     })
                //     $('#requeirdjob').empty();
                //     $('#requeirdjob').html(str);

                // }
            });

        });
</script>
</body>

</html>
