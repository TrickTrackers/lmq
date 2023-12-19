<!DOCTYPE html>

<html class="is-smooth-scroll-compatible is-loading" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lumiq - Risk Profiling</title>
    <meta name="description" content="" />
    <?php include("includes/header.php") ?>
    <div>
        <div id="smooth-content">

            <!-- Add your site or application content here -->

            <main>

                <!-- hero area start  -->

                <section class="p-relative section-spacing pb-5">
                    <div class="adjust-header-space"></div>
                    <div class="hero-area__bg"> <img src="assets/img/about-bg.jpg" alt="image not found"
                            class="object-fit-fill des" /><img src="assets/img/bg/mobile-bg.jpg" alt="image not found"
                            class="object-fit-fill mob" /> </div>
                    <div class="container">
                        <div class="hero-inner p-relative">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="hero__content">
                                        <p class="animation__char_come fs-20 fw-bold text-primary mb-1 text-uppercase">
                                            TOOLS </p>
                                        <h1
                                            class="hero__title animation__char_come fs-60 text-m-48 fw-bold lh-1 position-relative addstarafter d-inline">
                                            Risk Profiling </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- hero area end  -->

                <section class="pt-2">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-12">

                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tools.php">Tools</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Risk Profiling</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-3">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-12">

                                <h1 class="fw-light fs-4 bg-white">Decode Your Risk Appetite</h1>
                                <p class="mt-2 fs-5"> Answer a few questions to get started</p>
                            </div>
                        </div>
                    </div>
                </section>
                <form action="sendmailriskprofiling.php" method="post" id="myform">
                    <div class="container">
                        <section id="section1" class="row">
                            <div class="sticky-left col-lg-4">
                                <h3 class="fs-60 text-m-35 text-primary fw-bold bg-white lh-1 ms-lg-3"><img src="assets/img/risk-icon-1.svg" alt=""></h3>
                            </div>
                            <div class="col-lg-8 ">
                                <div class="rp-form">
                                    <div class="row gy-5">
                                        <div class="col-lg-12">
                                            <h4 class="mb-3 fw-bold fs-5">Your age?</h4>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault" name="age"
                                                            type="checkbox" value="35 or less" id="age-1">
                                                        <label class="form-check-label" for="age-1"> 35 or less </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault" name="age"
                                                            type="checkbox" value="35 - 55 years" id="age-2">
                                                        <label class="form-check-label" for="age-2"> 35 - 55 years
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault" name="age"
                                                            type="checkbox" value="56 - 65 years" id="age-3">
                                                        <label class="form-check-label" for="age-3"> 56 - 65 years
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault" name="age"
                                                            type="checkbox" value="Over 66" id="age-4">
                                                        <label class="form-check-label" for="age-4"> Over 66 </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">Who depends on you financially?</h4>
                                                <i class="fw-light fs-5 ms-2">(Multiple options can be selected)</i>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="financially[]"
                                                            type="checkbox"
                                                            value="Spouse, Kid(s) & other family members"
                                                            id="financial-1">
                                                        <label class="form-check-label" for="financial-1"> Spouse,
                                                            Kid(s) & other family members </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="financially[]"
                                                            type="checkbox" value="Parents only" id="financial-2">
                                                        <label class="form-check-label" for="financial-2"> Parents only
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="financially[]"
                                                            type="checkbox" value="Spouse OR kids only"
                                                            id="financial-3">
                                                        <label class="form-check-label" for="financial-3"> Spouse OR
                                                            kids only </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="financially[]"
                                                            type="checkbox" value="No dependents" id="financial-4">
                                                        <label class="form-check-label" for="financial-4"> No dependents
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">How much experience do you have with
                                                    investing? </h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault7"
                                                            type="checkbox" name="evperience_investing"
                                                            value="I have never invested before." id="own-1">
                                                        <label class="form-check-label" for="own-1"> I have never
                                                            invested before. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault7"
                                                            type="checkbox" name="evperience_investing"
                                                            value="1 to 3 years." id="own-2">
                                                        <label class="form-check-label" for="own-2"> 1 to 3 years.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault7"
                                                            type="checkbox" name="evperience_investing"
                                                            value="4 to 7 years." id="own-3">
                                                        <label class="form-check-label" for="own-3"> 4 to 7 years.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault7"
                                                            type="checkbox" name="evperience_investing"
                                                            value="More than 7 years." id="own-4">
                                                        <label class="form-check-label" for="own-4"> More than 7 years.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">What kind of financial investments do you

                                                    currently own? </h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault2"
                                                            name="currently_own" type="checkbox"
                                                            value="Bank savings, fixed deposits, and gold" id="own-1">
                                                        <label class="form-check-label" for="own-1"> Bank savings, fixed
                                                            deposits, and gold </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault2"
                                                            name="currently_own" type="checkbox" value="Slightly heavier weighting in equities or



                              equity mutual funds than fixed deposits." id="own-2">
                                                        <label class="form-check-label" for="own-2"> Slightly heavier
                                                            weighting in equities or



                                                            equity mutual funds than fixed deposits. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault2"
                                                            name="currently_own" type="checkbox" value="Mainly fixed deposits with some equities



                              or equity mutual funds." id="own-3">
                                                        <label class="form-check-label" for="own-3"> Mainly fixed
                                                            deposits with some equities



                                                            or equity mutual funds. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault2"
                                                            name="currently_own" type="checkbox"
                                                            value="Equities and equity mutual funds" id="own-4">
                                                        <label class="form-check-label" for="own-4"> Equities and equity
                                                            mutual funds </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">What is your primary goal for this
                                                    investment

                                                    portfolio? </h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault3"
                                                            name="portfolio" type="checkbox"
                                                            value="Capital Protection: Aim for moderate capital growth and have a very low tolerance for losses."
                                                            id="investment-1">
                                                        <label class="form-check-label" for="investment-1"> <strong
                                                                class="d-block"> Capital Protection:</strong> Aim for
                                                            moderate capital growth and have a very low tolerance



                                                            for losses. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault3"
                                                            name="portfolio" type="checkbox"
                                                            value="Enhanced Returns: Seek higher investment returns while accepting minor short-term losses."
                                                            id="investment-2">
                                                        <label class="form-check-label" for="investment-2"> <strong
                                                                class="d-block">Enhanced Returns:</strong> Seek higher
                                                            investment returns while accepting minor short-term



                                                            losses. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault3"
                                                            name="portfolio" type="checkbox"
                                                            value="Long-Term Wealth Generation: Focus on creating wealth long-term, with possible higher short-term losses."
                                                            id="investment-3">
                                                        <label class="form-check-label" for="investment-3"> <strong
                                                                class="d-block"> Long-Term Wealth Generation:</strong>
                                                            Focus on creating wealth long-term, with possible higher



                                                            short-term losses. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault3"
                                                            name="portfolio" type="checkbox"
                                                            value="Aggressive growth and wealth generation via different asset classes"
                                                            id="investment-4">
                                                        <label class="form-check-label" for="investment-4"> <strong
                                                                class="d-block"> Aggressive growth and wealth generation



                                                                via different asset classes</strong> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0"> What is your investment horizon?</h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault4"
                                                            name="investment_horizon" type="checkbox"
                                                            value="Less than 2 years" id="horizon-1">
                                                        <label class="form-check-label" for="horizon-1"> Less than 2
                                                            years </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault4"
                                                            name="investment_horizon" type="checkbox"
                                                            value="3 to 5 years" id="horizon-2">
                                                        <label class="form-check-label" for="horizon-2"> 3 to 5 years
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault4"
                                                            name="investment_horizon" type="checkbox"
                                                            value="2 to 3 years" id="horizon-3">
                                                        <label class="form-check-label" for="horizon-3"> 2 to 3 years
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault4"
                                                            name="investment_horizon" type="checkbox"
                                                            value="More than 5 years" id="horizon-4">
                                                        <label class="form-check-label" for="horizon-4"> More than 5
                                                            years </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section2" class="row">
                            <div class="sticky-left col-lg-4">
                                <h3 class="fs-60 text-m-35 text-primary fw-bold bg-white lh-1 ms-lg-3"><img src="assets/img/risk-icon-2.svg" alt=""></h3>
                            </div>
                            <div class="col-lg-8">
                                <div class="rp-form">
                                    <div class="row gy-5">
                                        <div class="col-lg-12">
                                            <h4 class="mb-3 fw-bold fs-5">What % is this investment out of your overall

                                                investments? </h4>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault5"
                                                            name="overall_investments" type="checkbox" value="0 - 20%"
                                                            id="overall-1">
                                                        <label class="form-check-label" for="overall-1"> 0 - 20%
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault5"
                                                            name="overall_investments" type="checkbox" value="21 - 40%"
                                                            id="overall-2">
                                                        <label class="form-check-label" for="overall-2"> 21 - 40%
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault5"
                                                            name="overall_investments" type="checkbox" value="41 - 75%"
                                                            id="overall-3">
                                                        <label class="form-check-label" for="overall-3"> 41 - 75%
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault5"
                                                            name="overall_investments" type="checkbox" value="75 - 100%"
                                                            id="overall-4">
                                                        <label class="form-check-label" for="overall-4"> 75 - 100%
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">Choose Your Investment Approach</h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault6"
                                                            name="Investment_Approach" type="checkbox" value="Conservative (emphasis on steady returns



                              while managing risk)" id="Approach-1">
                                                        <label class="form-check-label" for="Approach-1"> Conservative
                                                            (emphasis on steady returns



                                                            while managing risk) </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault6"
                                                            name="Investment_Approach" type="checkbox" value="Balanced to Aggressive (focus on



                              long-term growth with more risk)" id="Approach-2">
                                                        <label class="form-check-label" for="Approach-2"> Balanced to
                                                            Aggressive (focus on



                                                            long-term growth with more risk) </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault6"
                                                            type="checkbox" name="Investment_Approach" value="Balanced (focus on long-term growth with



                              moderate risk)" id="Approach-3">
                                                        <label class="form-check-label" for="Approach-3"> Balanced
                                                            (focus on long-term growth with



                                                            moderate risk) </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault6"
                                                            type="checkbox" name="Investment_Approach" value="Aggressive (high-risk strategy for



                              maximizing long-term returns)" id="Approach-4">
                                                        <label class="form-check-label" for="Approach-4"> Aggressive
                                                            (high-risk strategy for



                                                            maximizing long-term returns) </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">How much of a temporary decline in
                                                    portfolio value can you tolerate?</h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault8"
                                                            type="checkbox" name="tolerate_portfolio"
                                                            value="Cannot tolerate any decline in portfolio value."
                                                            id="Approach-1">
                                                        <label class="form-check-label" for="Approach-1"> Cannot
                                                            tolerate any decline in portfolio value. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault8"
                                                            type="checkbox" name="tolerate_portfolio"
                                                            value="Willing to accept a small decline between 5% -10% in portfolio value."
                                                            id="Approach-2">
                                                        <label class="form-check-label" for="Approach-2"> Willing to
                                                            accept a small decline between 5% -10% in portfolio value.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault8"
                                                            type="checkbox" name="tolerate_portfolio"
                                                            value="Willing to tolerate a decline between 11% - 20% in portfolio value."
                                                            id="Approach-3">
                                                        <label class="form-check-label" for="Approach-3"> Willing to
                                                            tolerate a decline between 11% - 20% in portfolio value.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault8"
                                                            type="checkbox" name="tolerate_portfolio"
                                                            value="Willing to endure a decline greater than 20% in portfolio value."
                                                            id="Approach-4">
                                                        <label class="form-check-label" for="Approach-4"> Willing to
                                                            endure a decline greater than 20% in portfolio value.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3 ">
                                                <h4 class="fw-bold fs-5 mb-0">If you experience a 10% loss on your
                                                    invested value one month after investment, what would you do?</h4>
                                            </div>
                                            <div class="row behaveradiocheck gy-3">
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault9"
                                                            type="checkbox" name="what_you_do"
                                                            value="Wait till the market recovers and then decide."
                                                            id="Approach-1">
                                                        <label class="form-check-label" for="Approach-1"> Wait till the
                                                            market recovers and then decide. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault9"
                                                            type="checkbox" name="what_you_do"
                                                            value="Sell and hold in cash." id="Approach-2">
                                                        <label class="form-check-label" for="Approach-2"> Sell and hold
                                                            in cash. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault9"
                                                            type="checkbox" name="what_you_do"
                                                            value="Keep investments untouched." id="Approach-3">
                                                        <label class="form-check-label" for="Approach-3"> Keep
                                                            investments untouched. </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input flexCheckDefault9"
                                                            type="checkbox" name="what_you_do"
                                                            value="Invest more and average." id="Approach-4">
                                                        <label class="form-check-label" for="Approach-4"> Invest more
                                                            and average. </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section3" class="row mb-5">
                            <div class=" sticky-left col-lg-4 ">
                                <h3 class="fs-60 text-m-35 text-primary fw-bold bg-white pb-lg-5 lh-1 ms-lg-3"><img src="assets/img/risk-icon-3.svg" alt=""> </h3>
                            </div>
                            <div class=" col-lg-8">
                                <div class="rp-form">
                                    <div class="row gy-4">
                                        <div class="col-lg-7">
                                            <label for="" class="col-form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control border-primary"
                                                id="fullname">
                                        </div>
                                        <div class="col-lg-7">
                                            <label for="" class="col-form-label">PAN Number</label>
                                            <input type="text" name="pan"
                                                class="form-control border-primary text-uppercase" id="panno">
                                        </div>
                                        <div class="col-lg-7">
                                            <label for="" class="col-form-label">Annual Income (after tax)</label>
                                            <select name="annual_income" class="form-select border-primary"
                                                id="annual_income">
                                                <option value="">Select</option>
                                                <option value="Less than ₹6 lakh.">Less than ₹6 lakh.</option>
                                                <option value="₹6 lakh to ₹12 lakh.">₹6 lakh to ₹12 lakh.</option>
                                                <option value="₹12 lakh to ₹24 lakh.">₹12 lakh to ₹24 lakh.</option>
                                                <option value="₹24 lakh to ₹36 lakh.">₹24 lakh to ₹36 lakh.</option>
                                                <option value="More than ₹36 lakh.">More than ₹36 lakh.</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 text-center">
                                            <button type="submit"
                                                class="btn btn-info my-4 btn-lg mx-auto px-4 rounded-1 fw-bold py-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </main>

            <!-- footer-area-start -->

            <?php include("includes/footer.php") ?>
            <script>
            $(document).on("click", ".flexCheckDefault", function(event) {

                var checkedlnt = $('input[name="age"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault2", function(event) {

                var checkedlnt = $('input[name="currently_own"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault3", function(event) {

                var checkedlnt = $('input[name="portfolio"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault4", function(event) {

                var checkedlnt = $('input[name="investment_horizon"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault5", function(event) {

                var checkedlnt = $('input[name="overall_investments"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault6", function(event) {

                var checkedlnt = $('input[name="Investment_Approach"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault7", function(event) {

                var checkedlnt = $('input[name="evperience_investing"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault8", function(event) {

                var checkedlnt = $('input[name="tolerate_portfolio"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).on("click", ".flexCheckDefault9", function(event) {

                var checkedlnt = $('input[name="what_you_do"]:checked').length;

                console.log(checkedlnt);

                if (checkedlnt > 1) {

                    $(this).prop('checked', false);

                }

            });

            $(document).ready(function() {

                $('#myform').submit(function(e) {

                    if ($('input[name="age"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select Your age.'); // You can add more complex validation or show error messages here					

                    } else if ($('input[name="financially[]"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select Who depends on you financially.'); // You can add more complex validation or show error messages here		

                    } else if ($('input[name="currently_own"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select What kind of financial investments do you currently own.'); // You can add more complex validation or show error messages here					

                    } else if ($('input[name="portfolio"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select What is your primary goal for this investment portfolio.'); // You can add more complex validation or show error messages here					

                    } else if ($('input[name="investment_horizon"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select What is your investment horizon.'); // You can add more complex validation or show error messages here					

                    } else if ($('input[name="overall_investments"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                            'Please select What % is this investment out of your overall investments.'); // You can add more complex validation or show error messages here	

                    } else if ($('input[name="Investment_Approach"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select Choose Your Investment Approach.'); // You can add more complex validation or show error messages here		

                    } else if ($('input[name="evperience_investing"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please select How much experience do you have with investing.'); // You can add more complex validation or show error messages here		

                    } else if ($('input[name="tolerate_portfolio"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                            'Please select How much of a temporary decline in portfolio value can you tolerate.'); // You can add more complex validation or show error messages here		

                    } else if ($('input[name="what_you_do"]:checked').length === 0) {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                            'Please select If you experience a 10% loss on your invested value one month after investment, what would you do.'); // You can add more complex validation or show error messages here		

                    } else if ($('#fullname').val() == '') {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please Enter Your Full Name.'); // You can add more complex validation or show error messages here					

                    } else if ($('#panno').val() == '') {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please Enter PAN Number.'); // You can add more complex validation or show error messages here					

                    } else if ($('#annual_income').val() == '') {

                        e.preventDefault(); // Prevent form submission						

                        alert(
                        'Please Select Annual Income.'); // You can add more complex validation or show error messages here					

                    }

                });

            });

            function createStickyTimeline(sectionId, leftColumnClass) {

                const section = document.getElementById(sectionId);

                const leftColumn = section.querySelector(`.${leftColumnClass}`);



                const timeline = gsap.timeline({

                    scrollTrigger: {

                        trigger: section,

                        start: "top top",

                        end: "bottom top",

                        pin: leftColumn,

                        scrub: true

                    }

                });



                return timeline;

            }



            const timeline1 = createStickyTimeline("section1", "sticky-left");

            const timeline2 = createStickyTimeline("section2", "sticky-left");

            const timeline3 = createStickyTimeline("section3", "sticky-left");
            </script>